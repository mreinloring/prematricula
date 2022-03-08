<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function index(){
        return "Bienvenido a la pagina de inscripcion";
    }

    public function create(){
        return "en esta pagina crearas una nueva inscripcion";
    }

    public function show($inscripcion){
        return "Bienvenido a la inscripcion : $inscripcion";
    }
}
