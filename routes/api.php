<?php

use App\Http\Controllers\Api\CursoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/cursos', CursoController::class);
