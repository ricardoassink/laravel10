<?php

namespace App\DTO\Cursos;

use App\Enums\CursoStatus;
use App\Http\Requests\StoreUpdateCurso;

class UpdateCursoDTO{

    public function __construct(
        public string $id,
        public string $nome,
        public CursoStatus $status,
        public string $body
    )
    {}

    public static function makeFromRequest(StoreUpdateCurso $request):self
    {
        return new self(
            $request->id,
            $request->nome,
            CursoStatus::A,
            $request->body
        );
    }
}

?>