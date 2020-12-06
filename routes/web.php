<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use app\Http\Controllers\UsersController;

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
})->name('login');

Route::get('/register', function () {
    return view('register');
});

Route::get('/submitEvent', function () {
    return view('event.createEvent');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', 'App\Http\Controllers\UsersController@loginPage')->name('login');
Route::post('/loginUser', 'App\Http\Controllers\UsersController@login')->name('loginUser');
Route::get('/logoutUser', 'App\Http\Controllers\UsersController@logout')->name('logoutUser');
Route::get('/registration', 'App\Http\Controllers\UsersController@registration')->name('registration');
Route::post('/registrationStore', 'App\Http\Controllers\UsersController@registrationStore')->name('registrationStore');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\EventsController@index')->name('dashboard');
});