<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Docente;
use App\Models\Institucione;
use App\Models\Encuesta;
use App\Models\Texto;
use App\Models\Encuesta_recurso;

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
                return response()->json($search);
            }
        } else if ($tipo == 'encuesta') {
            $encuesta = new Encuesta();
            $encuesta->id_docente = $request->id_docente;
            $encuesta->id_institucion = $request->id_institucion;
            $encuesta->id_asignatura = $request->id_asignatura;
            $encuesta->save();
            return response()->json($encuesta);
        } else if ($tipo == 'year1') {
            $texto = new Texto();
            $texto->nombre_texto = $request->texto_nombre;
            $texto->id_editorial = $request->nombre_editorial;
            $texto->year_edicion = $request->year_edicion;
            $texto->save();

            $idtexto = $texto->id_texto;


            return response()->json($t);
        }
    }
}
