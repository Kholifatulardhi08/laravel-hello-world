<?php

use Illuminate\Support\Facades\Route;

//Praktikum 1
Route::get('/', function ($id) {
    return view('welcome');
});
//no 1
Route::any('/', function () {
     return "Selamat Datang";
});
//no 2
Route::any('/about', function () {
     return "Nama: Brilliandy zufar P <p> NIM: 1941720201 <p> Kelas: TI-2A";
    
});
//no 3
Route::get('/article/{id}', function ($id) {
     return "Halaman artikel id " .$id;

});