<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/login/labo',function(){
    return view('labo.labo');
})->name('labo');


/*Route::get('/login/labo/gerant/listemedecin',function(){
    return view('labo.gerant.listemedecin');
})->name('listmedecin');*/

//gerant begin

Route::get('/login/labo/gerant/listemedecin',[PostController::class,'listemedecin'])->name('listmedecin');

Route::get('/login/labo/gerant/listesecretaire',[PostController::class,'listesecretaire'])->name('listesecretaire');

Route::get('/login/labo/gerant/acceuil',[PostController::class,'acceuilgerant'])->name('acceuilgerant');

Route::get('/login/labo/gerant/adduser',[PostController::class,'adduser'])->name('adduser');
//gerant end
