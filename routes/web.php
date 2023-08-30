<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudanteController;
use App\Http\Controllers\NotificacaoController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ViagemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'gestao'], function () {
    Voyager::routes();
    Route::get('/viagem/{id}/estudantes/adicionar', [ViagemController::class, 'adicionar'])->middleware(["auth"])->name('viagem.adicionar');
    Route::get('/viagem/{id}/estudantes/presenca', [ViagemController::class, 'presenca'])->middleware(["auth"])->name('viagem.presenca');
    Route::get('/veiculo/viagens/{id}', [VeiculoController::class, 'veiculoViagem'])->middleware(["auth"])->name('veiculo.viagem');
    Route::get('/estudante/pendentes', [EstudanteController::class, 'pendentes'])->middleware(["auth"])->name('estudante.pendente');
    Route::post('/viagem/adicionarAlunos', [ViagemController::class, 'adicionarAlunos'])->middleware(["auth"])->name('adicionar.alunos');
    Route::post('/viagem/horaSubida', [ViagemController::class, 'horaSubida'])->middleware(["auth"])->name('hora.subida');
    Route::post('/viagem/horaDescida', [ViagemController::class, 'horaDescida'])->middleware(["auth"])->name('hora.descida');
    Route::delete('/eliminar/notificacao/{id}', [NotificacaoController::class, 'destroy'])->middleware(["auth"])->name('notificacao.destroy');
});
