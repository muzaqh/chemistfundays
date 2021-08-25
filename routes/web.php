<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegionsController;

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

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
// Route::match(['get', 'post'], '/home', function(){
//     return view('dashboard');
// });
Route::view('/loginpage', 'auth.login');
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');
Route::resource('/users', UserController::class);
Route::resource('/regions', RegionsController::class);

Route::middleware(['auth'])->group(function () {
    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::view('/home', 'dashboard');
    });
});
