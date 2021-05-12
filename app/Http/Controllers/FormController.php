<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function institution()
    {
        return "form Institucion";
    }

    public function years()
    {
        return "form years";
    }

    public function year($year)
    {
        return "form year: $year";
    }

    public function information()
    {
        return "información";
    }

    public function action($action)
    {
        return "formulario $action";
    }
}
