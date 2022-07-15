<?php
use Illuminate\Support\Facades\Route;

Route::group([ 'prefix' => 'post' ], function () {

    Route::get('/', 'PostController@index');

    Route::get('/create', 'PostController@create');

    Route::post('/store', 'PostController@store');

    Route::get('/edit/{post}', 'PostController@edit');

    Route::post('/destroy', 'PostController@destroy');

    Route::get('/show/{post}','PostController@show');

    Route::get('pesquisar','PostController@pesquisar');

    Route::post('pesquisar','PostController@pesquisar');

    Route::get('exportar','PostController@exportar');

    Route::get('/adicionar-gostei/{post}','PostController@adicionarGostei');

    Route::get('/adicionar-naogostei/{post}','PostController@adicionarNaoGostei');
});
