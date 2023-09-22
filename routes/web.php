<?php

use App\Enums\CursoStatus;
use App\Http\Controllers\Admin\{CursosController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test',function(){
    dd(array_column(CursoStatus::cases(), 'name'));
});

Route::get('/cursos/{id}/edit',[CursosController::class,'edit'])->name('cursos.edit');

Route::post('/cursos', [CursosController::class,'gravar'])->name('cursos.gravar');
Route::get('/cursos/novo',[CursosController::class,'novo'])->name('cursos.novo');

Route::get('/cursos',[CursosController::class,'index'])->name('cursos.index');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos/{id}',[CursosController::class,'show'])->name('cursos.show');
Route::put('/cursos/{id}',[CursosController::class,'update'])->name('cursos.update');
Route::delete('/cursos/{id}',[CursosController::class,'delete'])->name('cursos.delete');


