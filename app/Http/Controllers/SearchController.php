<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institucione;
use App\Models\Texto;
use App\Models\Tipo_recurso;
use App\Models\Asignatura;

class SearchController extends Controller
{
    public function institutions(Request $request)
    {
        $term = $request->get('term');
        $querys = Institucione::where('nombre_institucion', 'LIKE', '%' . $term . '%')->get();
        $data = [];
        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->nombre_institucion
            ];
        }
        return $data;
    }

    public function asignaturas(Request $request)
    {
        $id_asignatura = $request->get('term');
        $querys = Asignatura::where('id_asignatura', $id_asignatura)->first();
        return $querys->nombre_asignatura;
    }

    public function textos(Request $request)
    {
        $term = $request->get('term');
        $querys = Texto::where('nombre_texto', 'LIKE', '%' . $term . '%')->get();
        $data = [];
        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->nombre_texto
            ];
        }
        return $data;
    }

    public function recursos(Request $request)
    {
        $term = $request->get('term');
        $querys = Tipo_recurso::where('nombre_tipo_recurso', 'LIKE', '%' . $term . '%')->get();
        $data = [];
        foreach ($querys as $query) {
            $data[] = [
                'label' => $query->nombre_tipo_recurso
            ];
        }
        return $data;
    }
}
