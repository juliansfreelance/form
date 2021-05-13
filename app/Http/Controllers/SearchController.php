<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institucione;
use App\Models\Texto;

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
}
