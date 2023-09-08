<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(Curso $curso){

        //$cursos = Curso::all(); Já pega tudo.
        
        
        // $curso = new Curso(); não precisa pois já vem pela dependência(uso do parâmetro "Curso $curso" já traz o objeto)
        $cursos = $curso->all(); // retorna uma collection

        dd($cursos);

        return view('admin/cursos/index', compact('cursos'));
    }
}
