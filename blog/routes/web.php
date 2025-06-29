<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EssamCon;
use App\Http\Controllers\login;
use App\Http\Controllers\profile;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [EssamCon::class, 'essam']);


Route::get('/login', [login::class, 'login']);


Route::get('/profile', [profile::class, 'profile']);
