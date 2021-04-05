<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mutator_accessor;
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

Route::get('/','mutator_accessor@index');
Route::get('insert','mutator_accessor@insert');
