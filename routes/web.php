<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function(){
    return view('home');
})->name('halaman home');

Route::get('Profile', function(){
    $biodata = [
        'nama' => 'I NENGAH LASTRA WIRA PRIMADIKA',
        'NIM' => '2201010202',
        'JK' => 'Laki-Laki',
        'alamat'=>'Jln. Tukad Badung X no. 12 B'
    ];
    return view('Profile', compact('biodata'));
    return view('Profile');
})->name('halaman Profile');

Route::get('work', function(){
    return view('work');
})->name('halaman work');