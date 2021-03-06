<?php

namespace App\Http\Controllers;

use App\Models\Editoriale;
use App\Models\Genero;
use Illuminate\Http\Request;
use App\Models\Tipo_institucione;
use App\Models\Localidade;
use App\Models\Tipo_recurso;

class FormController extends Controller
{
    public function institution()
    {
        $generos = Genero::all();
        $tipoInsti = Tipo_institucione::all();
        $localidades = Localidade::all();
        return view('form.institution', compact('generos', 'tipoInsti', 'localidades'));
    }

    public function years()
    {
        return view('form.years');
    }

    public function year($year)
    {
        $editoriales = Editoriale::all();
        $recursos = Tipo_recurso::all();
        return view('form.year', compact('year', 'editoriales', 'recursos'));
    }

    public function information()
    {
        return view('form.information');
    }

    public function action($action)
    {
        return view('form.action', compact('action'));
    }
}
