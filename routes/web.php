<?php

use Illuminate\Support\Facades\Route;
use App\Models\Shoe;

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






Route::get('/shoes', function() {

    $shoes = Shoe::all();
    return view('index', [ 'shoes' => $shoes ] );

});







Route::get('/shoes/{id}', function($id) {
    $DATA = [
        ['id' => 0, 'name' => "Nike TN", 'price' => 150],
        ['id' => 1, 'name' => "New Balance", 'price' => 10],
        ['id' => 2, 'name' => "Tongs", 'price' => 3],
    ];
    $maChaussure = $DATA[$id];
    return view('show', [ 'maChaussure' => $maChaussure]);
    
});


Route::get('/', function () {
    return view('welcome');
});











