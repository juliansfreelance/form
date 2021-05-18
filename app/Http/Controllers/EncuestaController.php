<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Docente;
use App\Models\Institucione;
use App\Models\Encuesta;
use App\Models\Texto;
use App\Models\Encuesta_recurso;
use App\Models\Recurso_texto;
use App\Models\Editoriale;
use App\Models\Tipo_recurso;

class EncuestaController extends Controller
{
    public function store(Request $request)
    {
        $tipo = $request->tipo;

        if ($tipo == 'docente') {
            $docente = new Docente();
            $docente->nombre_docente = $request->nombre;
            $docente->apellido_docente = $request->apellido;
            $docente->correo_docente = $request->correo;
            $docente->telefono_docente = $request->telefono;
            $docente->id_genero = $request->id_genero;
            $docente->save();
            return response()->json($docente);
        } else if ($tipo == 'institucion') {
            $id_localidad = $request->id_localidad;
            $id_tipo_institucion = $request->id_tipo_institucion;
            $nombre_inst = $request->nombre_institucion;
            $search = Institucione::where('nombre_institucion', $nombre_inst)
                ->where('id_localidad', $id_localidad)
                ->where('id_tipo_institucion', $id_tipo_institucion)
                ->get();
            if (count($search) == 0) {
                $institucion = new Institucione();
                $institucion->id_localidad = $id_localidad;
                $institucion->id_tipo_institucion = $id_tipo_institucion;
                $institucion->nombre_institucion = $nombre_inst;
                $institucion->save();
                return response()->json($institucion);
            } else {
                return response()->json($search[0]);
            }
        } else if ($tipo == 'encuesta') {
            $encuesta = new Encuesta();
            $encuesta->id_docente = $request->id_docente;
            $encuesta->id_institucion = $request->id_institucion;
            $encuesta->id_asignatura = $request->id_asignatura;
            $encuesta->save();
            return response()->json($encuesta);
        } else if ($tipo == 'year_old') {
            $id_rec = $this->encure($request->id_encuesta, $request->id_tipo_recurso, $request->year_recurso);
            $id_texto = $this->texto($request->texto_nombre, $request->id_editorial, $request->year_edicion);
            $recurso_texto = new Recurso_texto();
            $recurso_texto->id_encuesta_recurso = $id_rec;
            $recurso_texto->id_texto = $id_texto;
            $recurso_texto->save();
            return response()->json(['message' => 'Recurso Texto Old ' . $request->year_recurso . ' creado corectamente'], 201);
        } else if ($tipo == 'year_new') {
            $id_rec = $this->encure($request->id_encuesta, $request->id_tipo_recurso, $request->year_recurso);
            $id_editorial = $this->editorial($request->nombre_editorial);
            $id_texto = $this->texto($request->texto_nombre, $id_editorial, $request->year_edicion);
            $recurso_texto = new Recurso_texto();
            $recurso_texto->id_encuesta_recurso = $id_rec;
            $recurso_texto->id_texto = $id_texto;
            $recurso_texto->save();
            return response()->json(['message' => 'Recurso Texto New ' . $request->year_recurso . ' creado corectamente'], 201);
        } else if ($tipo == 'year_recursos') {
            $id_tipo_recurso = $this->recnotext($request->recurso_nombre);
            $recurso = new Encuesta_recurso();
            $recurso->id_encuesta = $request->id_encuesta;
            $recurso->id_tipo_recurso = $id_tipo_recurso;
            $recurso->year_recurso = $request->year_recurso;
            $recurso->save();
            return response()->json(['message' => 'Recurso No Texto ' . $request->year_recurso . ' creado corectamente'], 201);
        }
    }
    private function editorial($nombre_editorial)
    {
        $search = Editoriale::where('nombre_editorial', $nombre_editorial)->get();
        if (count($search) == 0) {
            $editorial = new Editoriale();
            $editorial->nombre_editorial = $nombre_editorial;
            $editorial->save();
            return $editorial->id_editorial;
        } else {
            return $search[0]->id_editorial;
        }
    }

    private function texto($nombre_texto, $id_editorial, $year_edicion)
    {
        $search = Texto::where('nombre_texto', $nombre_texto)
            ->where('id_editorial', $id_editorial)
            ->where('year_edicion', $year_edicion)
            ->get();
        if (count($search) == 0) {
            $texto = new Texto();
            $texto->nombre_texto = $nombre_texto;
            $texto->id_editorial = $id_editorial;
            $texto->year_edicion = $year_edicion;
            $texto->save();
            return $texto->id_texto;
        } else {
            return $search[0]->id_texto;
        }
    }

    private function encure($id_encuesta, $id_tipo_recurso, $year_recurso)
    {
        $recurso = new Encuesta_recurso();
        $recurso->id_encuesta = $id_encuesta;
        $recurso->id_tipo_recurso = $id_tipo_recurso;
        $recurso->year_recurso = $year_recurso;
        $recurso->save();
        return $recurso->id_encuesta_recurso;
    }
    private function recnotext($nombre)
    {
        $search = Tipo_recurso::where('nombre_tipo_recurso', $nombre)->get();
        if (count($search) == 0) {
            $recurso = new Tipo_recurso();
            $recurso->nombre_tipo_recurso = $nombre;
            $recurso->save();
            return $recurso->id_tipo_recurso;
        } else {
            return $search[0]->id_tipo_recurso;
        };
    }
}
