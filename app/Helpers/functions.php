<?php

use App\Enums\CursoStatus;

if(!function_exists('getStatusCurso')){
    function getStatusCurso(string $status): string{
        return CursoStatus::fromValue($status);
    }

}



?>