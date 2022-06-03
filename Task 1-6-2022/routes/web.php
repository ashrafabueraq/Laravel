<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\regsController;
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


Route::get('/form', function () {
    return view('form');
});


// Route::get('/contact us', function () {
//     return view('contactus');
// });


Route::get('/main', function () {
    return view('main');
});

Route:: get('/home', [homeController::class, 'home']);

Route:: get('/calculate', [homeController::class, 'calculate']);

Route:: get('/registration', [regsController::class, 'getdata']);

Route:: get('/regesid', [regsController::class, 'getid']);