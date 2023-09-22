<?php

namespace App\DTO\Cursos;

use App\Enums\CursoStatus;
use App\Http\Requests\StoreUpdateCurso;

class CreateCursoDTO{

    public function __construct(
        public string $nome,
        public CursoStatus $status,
        public string $body
    )
    {}

    public static function makeFromRequest(StoreUpdateCurso $request):self
    {
        return new self(
            $request->nome,
            CursoStatus::A,
            $request->body
        );
    }
}

?>
