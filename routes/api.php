<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Lista todos os médicos
Route::get('/medicos', 'MedicoController@all');

// Mostra as informações de um médico
Route::get('/medico/{id}', 'MedicoController@one');

// Insere um novo médico
Route::post('/medico', 'MedicoController@new');

// Atualiza a informação de um médico
Route::put('/medico/{id}', 'MedicoController@edit');

// Exclui um médico
Route::delete('/medico/{id}', 'MedicoController@delete');


