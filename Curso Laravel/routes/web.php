<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curso', function () {

    $arr = [1, 2, 3, 4, 5];

    $nomes = [
        'Lucas',
        'João',
        'Maria',
        'Ana',
        'Pedro'
    ];

    $nome = "Lucas";
    $usuario = "Lucas";

    return view('curso', [
        'nome' => $nome,
        'usuario' => $usuario,
        'arr' => $arr,
        'nomes' => $nomes
    ]);
});