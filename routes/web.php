<?php

use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/new', function () {
    return view('new');
});
Route::get('/badr', function () {
    echo 'bonjour cest badr dev';
});
Route::get('/badr/{name}', function ($name) {
    echo 'bonjour ' . $name;
});
Route::get('/badr/{name}/age/{id}', function ($name, $id) {
    echo 'bonjour ' . $name ." age de " . $id;
})->where(['name' => '[A-Za-z]+', 'id' =>'[1-9]+']);

// Route::get('/contact', 'TestController@contact');
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/done',[TodoController::class, 'store']);

Route::get('/',[TodoController::class, 'index']);

Route::delete('/del/{id}',[TodoController::class, 'destroy']);

Route::get('/display/{id}',[TodoController::class, 'edit']);

Route::put('/up/{id}',[TodoController::class, 'update']);