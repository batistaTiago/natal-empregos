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
    return view('home', compact('data'));
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

Route::prefix('admin')->group(function () {

    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');

    Route::prefix('empresa')->group(function () {
        Route::get('cadastrar', 'EmpresaController@cadastrarEmpresaForm')->name('admin.empresa.cadastrar.form');
        Route::post('cadastrar', 'EmpresaController@cadastrarEmpresaCallback')->name('admin.empresa.cadastrar.callback');

        Route::prefix('{slug}')->group(function () {
            Route::prefix('vagas')->group(function () {
                Route::post('/cadastrar', 'VagaController@cadastroNovaVaga')->name('nova.vaga.emprego.callback');
            });
        });
    });

    Route::prefix('vagas')->group(function () {
        Route::get('/cadastrar', 'VagaController@cadastroForm')->name('admin.empresa.detalhes.vagas.cadastrar.form');
    });
});

Route::prefix('area-do-candidato')->group(function () {

    Route::prefix('vagas')->group(function () {
        Route::get('/', 'VagaController@listarVagas')->name('cliente.vagas.listar');
        Route::get('/{id}', 'VagaController@getDetalhesVaga')->name('cliente.vaga.detalhe');
    });

    Route::get('/contato', 'ContatoController@contatoForm')->name('cliente.contato.form');
    Route::post('/contato', 'ContatoController@contatoSubmit')->name('contato.form.callback');
});
