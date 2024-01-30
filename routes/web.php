<?php

use App\Http\Controllers\RecetteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



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
    return view('index');
})->name('home');


Route::get('/page-register', function () {
    return view('pageRegister');
})->name('page.register');

Route::get('/add-page', function () {
    return view('AddRecipe');
})->name('add.page');



Route::get('/recettePage', function () {
    return view('recettePage');
})->name('recettePage');




Route::post('/register', [UserController::class,'register']);
Route::post('/logout', [UserController::class,'logout']);
Route::post('/login', [UserController::class,'login']);


// Recipe creation 

route::post('/New-recipe' , [RecetteController::class , 'CreateRecipe']);