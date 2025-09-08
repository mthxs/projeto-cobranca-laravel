<?php

use Illuminate\Support\Facades\Route;

Route::get('/tutorial', function () {
    return view('welcome');
});

Route::view('/cobrancas', 'inicio');
