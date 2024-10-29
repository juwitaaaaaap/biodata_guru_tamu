<?php

use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use App\Models\Rute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// ini adalah rute tanpa MVC 
Route::get('/rutebaru',function()
{
    return'<h2 style="color:pink">Ini adalah rute baru tanpa MVC';
});

// ini adalah rute dengan view
Route::get('/ruteview', function () {
    return view('ruteview');
});

//ini adalah rute controller
Route::get('/rutecontroller', [RuteController::class, 'menampilkanData']);

//ini adalah rute dengan view, controller & model
Route::get('/rutemodel',[RuteController::class, 'menampilkanDataModel']);

//ini adalah rute biodata
Route::get('/rutebiodata',[BiodataController::class,'menampilkanBiodata']);
