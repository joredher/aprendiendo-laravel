<?php

namespace App\Http\Controllers\Estudiantes\Configuracion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Estudiantes\BsEstudiantes;


class EstudiantesController extends Controller
{
    public function index(){
        return view('estudiantes.index');
    }
}
