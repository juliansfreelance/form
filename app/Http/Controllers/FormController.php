<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function institution()
    {
        return view('form.institution');
    }

    public function years()
    {
        return view('form.years');
    }

    public function year($year)
    {
        return view('form.year', compact('year'));
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
