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

// Route::get('/', function () {
//     return view('welcome');
// });

// route::get('home', function(){
//     echo 'ini home';
// });

// route::get('home/dashboard', function(){
//     echo 'ini adalah halaman dashboard';
// });

// route::get('home/news', function(){
//     echo 'ini adalah halaman news';
// });
 
// route::get('home/dashboard/barang', function(){
//     echo 'ini adalah halaman barang';
// });

// route::get('logout', function(){
//     echo 'ini adalah halaman logout';
// });

// Route::get('login/{nama}', function($nama){
//     echo 'Selamat datang ' . $nama .' di websait kami';
// });

// Route::get('home/dashboard/barang/{nama_barang}', function($nama_barang){
//     echo 'stock '. $nama_barang .' masih 10 unit';
// });

// Route::get('home/{nama}/{alamat}', function($nama, $alamat){
//     echo 'Nama: ' . $nama . '<br>';
//     echo 'Alamat: ' . $alamat . '<br>';
// })->name('home');

// Route::get('/', function () {
//     $parameter = [
//      'nama' => 'Susila',
//      'alamat' => 'Denpasar'
//     ];
//     return redirect()->route('home', $parameter);
// });
    
// Route::get('biodata', function(){
//     $data = [
//         'user' => 'anonim1',
//         'pass' => '12334'
//     ];
    
//     return view('biodata', compact('data'));
// })->name('halaman biodata');
    
// Route::get('biodata', function(){
//     return view('biodata');
// });

Route::get('home', function(){
    return view('home');
})->name('halaman home');

Route::get('Profile', function(){
    return view('Profile');
})->name('halaman Profile');

Route::get('work', function(){
    return view('work');
})->name('halaman work');