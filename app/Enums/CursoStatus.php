<?php

namespace App\Enums;

enum CursoStatus: string
{
    case A = "Ativo";
    case C = "Inativo";
    case P = "Pendente";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status){
            if($name === $status->name){
                return $status->value;
            }
        }

        throw new \ValueError("$status não é válido.");
    }
}


?>