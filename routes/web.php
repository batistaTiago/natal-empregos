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
    // $data = \App\Models\GCVagaEmprego::with('regime')->get();
    $data = [];
    return view('home', compact('data'));
});

Route::get('/cadastro-vaga', 'VagaController@cadastroForm')->name('cadastro.vaga');

Route::post('/enviar', function () {
    dd("aqui");
});
Route::get('/formulario', function () {
    return view('form');
});

Route::get('/cadastro-empresa', function () {
    return view('cadastro');
})->name('cadastro.empresa.form');
Route::post('/cadastro-empresa', 'EmpresaController@cadastroNovaEmpresa')->name('cadastro.empresa.submit');
Route::get('/detalhes-vaga/{id}', 'VagaController@getDetalhesVaga')->name('detalhes.vaga');
Route::get('', function () {
});

Route::get('admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::post('/nova-vaga-emprego', 'VagaController@cadastroNovaVaga')->name('nova.vaga.emprego.submit');

Route::get('/novas-vagas', 'VagaController@listarVagas')->name('listar.vagas');

Route::get('/contato', function () {
    return view('contato');
})->name('contato.form');
Route::post('/contato', 'ContatoController@contatoSubmit')->name('contato.form.submit');
