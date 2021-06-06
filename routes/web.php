<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

route::get('/',[StudentController::class,'index']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->group(function(){
route::get('/show/{id}',[StudentController::class,'show']);
  
route::get('/edit/{id}',[StudentController::class,'edit']);

route::get('/create',[StudentController::class,'create']);
route::post('/store',[StudentController::class,'store']);
route::post('/update/{id}',[StudentController::class,'update']);
route::get('/delete/{id}',[StudentController::class,'destroy']);

// });

