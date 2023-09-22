<?php

namespace App\DTO\Cursos;

use App\Http\Requests\StoreUpdateCurso;

class CreateCursoDTO{

    public function __construct(
        public string $nome,
        public string $status,
        public string $body
    )
    {}

    public static function makeFromRequest(StoreUpdateCurso $request):self
    {
        return new self(
            $request->nome,
            'a',
            $request->body
        );
    }
}

?>
