<?php

namespace App\Models;

use App\Enums\CursoStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'body',
        'status'
    ];

    public function status() :Attribute
    {
        return Attribute::make(
            set: fn(CursoStatus $status) => $status->name,
        );
    }


}
