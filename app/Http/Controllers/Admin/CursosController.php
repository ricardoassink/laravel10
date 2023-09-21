<?php

namespace App\Http\Controllers\Admin;

use App\DTO\CreateCursoDTO;
use App\DTO\UpdateCursoDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCurso;
use App\Models\Curso;
use App\Services\CursoService;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function __construct(
        protected CursoService $service
    ){}   

    public function index(Request $request)
    {

        $cursos = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 2),
            filter: $request->filter,
        ); 

        $filters = ['filter' => $request->get('filter','')];

        return view('admin/cursos/index', compact('cursos', 'filters'));
    }

    public function show(string|int $id)
    {

        // $curso = Curso::find($id)
        // $curso = Curso::where('id','=',$id)->first();
        if (!$curso = $this->service->findOne($id)) {

            return redirect()->back();
        }
        // chama view show.blade.php para mostrar os dados já passando os dados deste curso.
        return view('admin/cursos/show', compact('curso'));
    }

    public function novo()
    {
        return view('admin/cursos/novo');
    }

    public function gravar(StoreUpdateCurso $request, Curso $curso)
    {
        $this->service->new(
            CreateCursoDTO::makeFromRequest($request)
        );

        return redirect()->route('cursos.index'); // redireciona para a lista de cursos
    }

    public function edit(string| int $id)
    {
        if (!$curso = $this->service->findOne($id)) {

            return redirect()->back();
        }

        return view('admin/cursos/edit', compact('curso'));
    }

    public function update(string|int $id, StoreUpdateCurso $request)
    {
        $curso = $this->service->update(
            UpdateCursoDTO::makeFromRequest($request)
        );

        if (!$curso) {

            return back();
        }

        return redirect()->route('cursos.index');

    }

    // public function delete(string|int $id, Request $request, Curso $curso)
    public function delete(string $id)
    {
        // if (!$curso = $curso->find($id)) {

        //     return back();
        // }

        // $curso->delete();
        $this->service->delete($id);

        return redirect()->route('cursos.index');

    }
}
