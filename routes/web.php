<?php

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
    $data = \App\Models\VagaEmprego::with('regime')->get();
    //$data = [];
    return view('home', compact('data'));
});

Route::get('/cadastro', function () {
    return view('cadastro');
});
Route::get('/cadastroempresa', function () {
    return view('cadastroempresa');
});

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/detalhesvaga', function () {
    return view('detalhesvaga');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/formulario', function () {
    return view('form');
});

Route::post('/nova-vaga-emprego', 'VagaController@cadastroNovaVaga')->name('nova.vaga.emprego.submit');

Route::get('/novas-vagas', 'VagaController@listarVagas')->name('listar.vagas');
