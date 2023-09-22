<?php

namespace App\Http\Controllers\Api;

use App\DTO\Cursos\CreateCursoDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateCurso;
use App\Http\Resources\CursoResource;
use App\Services\CursoService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CursoController extends Controller
{
    public function __construct(
        protected CursoService $service
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateCurso $request)
    {
        $curso = $this->service->new(
            CreateCursoDTO::makeFromRequest($request)
        );
        return new CursoResource($curso);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!$curso = $this->service->findOne($id)){
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND); // 404
        }

        return new CursoResource($curso);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!$curso = $this->service->findOne($id)){
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND); // 404
        }

        $this->service->delete($id);

        return response()->json([], Response::HTTP_NO_CONTENT); // 204 No Content
    }
}
