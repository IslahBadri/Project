<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;


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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get("/",[homeControl::class,"index"]);

Route::get("/userproject",[homeControl::class,"viewp"]);

Route::get("/details",[homeControl::class,"updatep"]);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);


Route::get("/project",[adminControl::class,"project"]);

Route::get("/monitor",[adminControl::class,'monitor']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
