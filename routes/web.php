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
    // return view('welcome');
    echo "aluuuux";
});

Route::get('penjumlahan/{a}/{b}', function($a, $b){
	echo "Hasil Penjumlahan $a + $b = ". ($a+$b);
});
Route::get('pengurangan/{a}/{b}/{c}', function($f, $g, $h){
	echo "Hasil Pengurangan $f - $g - $h = ". ($f-$g-$h);
});
Route::get('perkalian/{a}/{b}', function($a, $b){
	echo "Hasil Perkalian dari $a x $b = ". ($a*$b);
});
Route::get('pembagian/{a}/{b}', function($a, $b){
	echo "Hasil Pembagian dari $a : $b = ". ($a/$b);
});
