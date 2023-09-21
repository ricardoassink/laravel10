<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateCurso;

class UpdateCursoDTO{

    public function __construct(
        public string $id,
        public string $nome,
        public string $status,
        public string $body
    )
    {}

    public static function makeFromRequest(StoreUpdateCurso $request):self
    {
        return new self(
            $request->id,
            $request->nome,
            'a',
            $request->body
        );
    }
}

?>