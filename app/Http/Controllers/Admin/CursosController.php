<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(Curso $curso)
    {

        //$cursos = Curso::all(); Já pega tudo.


        // $curso = new Curso(); não precisa pois já vem pela dependência(uso do parâmetro "Curso $curso" já traz o objeto)
        $cursos = $curso->all(); // retorna uma collection

        //dd($cursos);

        return view('admin/cursos/index', compact('cursos'));
    }

    public function show(string|int $id)
    {

        // $curso = Curso::find($id)
        // $curso = Curso::where('id','=',$id)->first();
        if (!$curso = Curso::find($id)) {

            return redirect()->back();
        }
        // chama view show.blade.php para mostrar os dados já passando os dados deste curso.
        return view('admin/cursos/show', compact('curso'));
    }

    public function novo()
    {
        return view('admin/cursos/novo');
    }

    public function gravar(Request $request, Curso $curso)
    {
        $data = $request->all();
        $data['status'] = 'a';

        // chama o Model e o método CREATE que vai inserir os dados no banco automaticamente.
        $curso->create($data); // agora curso é um objeto

        return redirect()->route('cursos.index'); // redireciona para a lista de cursos
    }

    public function edit(string| int $id)
    {
        if (!$curso = Curso::find($id)) {

            return redirect()->back();
        }
        
        return view('admin/cursos/edit', compact('curso'));
    }
}
