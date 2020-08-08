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

Route::get('/', 'VagaController@landing')->name('home');
Route::get('/listavagas', function () {
    return view('listavagas');
});

Route::get('/servicos', function() {
    $servicos = [
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
    ];

    return view('servico.servicos', compact('servicos'));
});

Route::get('/servicopost', function() {
    return view('servico.detalheservico');
});

Route::get('/sobrenos', function() {
    return view('sobrenos');
});

Route::prefix('admin')->group(function () {

    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');

    Route::prefix('vagas')->group(function () {
        Route::get('/', 'Admin\Vagacontroller@listarVagas')->name('admin.vagas.listar');
    });

    Route::prefix('empresas')->group(function () {
        Route::get('/', 'Admin\Vagacontroller@listarEmpresas')->name('admin.empresa.listar');
        Route::get('cadastrar', 'EmpresaController@cadastrarEmpresaForm')->name('admin.empresa.cadastrar.form');
        Route::post('cadastrar', 'EmpresaController@cadastrarEmpresaCallback')->name('admin.empresa.cadastrar.callback');
        Route::prefix('{slug}')->group(function () {
            Route::prefix('vagas')->group(function () {
                Route::post('editar', 'VagaController@editarVagaEmprego')->name('admin.vaga.editar');
                Route::post('/cadastrar', 'VagaController@cadastroNovaVaga')->name('nova.vaga.emprego.callback');
            });
        });
    });
    Route::prefix('vagas')->group(function () {
        Route::get('/cadastrar', 'VagaController@cadastroForm')->name('admin.empresa.detalhes.vagas.cadastrar.form');
    });
});

Route::prefix('vagas')->group(function () {
    Route::get('/', 'VagaController@listarVagas')->name('cliente.vagas.listar');
    Route::get('/{id}', 'VagaController@vagaDetalhes')->name('cliente.vaga.detalhe');
});

Route::get('/contato', 'ContatoController@contatoForm')->name('cliente.contato.form');

Route::post('gcc-tracker', 'TrackerController@registrarAcesso')->name('gcc-tracker');


Route::post('/contato', 'ContatoController@contatoSubmit')->name('contato.form.callback');

Route::get('/detalhes', function () {
    return view("detalhesvaga");
});


Route::get('/teste/{id}', 'VagaController@deletarContato')->name('deletar.contato');
Route::get('/teste2', 'VagaController@editarEmpresa')->name('editar.empresa');
Route::get('/teste3', 'VagaController@deletarEmpresa')->name('deletar.empresa');

Route::get('/teste4', 'VagaController@deletarVaga')->name('deletar.vaga');

Route::get('/teste5', 'VagaController@editarVaga')->name('editar.vaga');
