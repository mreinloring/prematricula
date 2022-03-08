<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function index(){
        return view('inscripciones.index');
    }

    public function create(){
        return view('inscripciones.create');
    }

    public function show($inscripcion){
        return view('inscripciones.show', compact('inscripcion'));
    }
}
