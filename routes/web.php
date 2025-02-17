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

// Route::get('/', function () {
//     return view('index');
// })->name('index');

Route::get('/', 'App\Http\Controllers\EventsController@index')->name('index');
Route::get('/login', 'App\Http\Controllers\UsersController@loginPage')->name('login');
Route::post('/loginUser', 'App\Http\Controllers\UsersController@login')->name('loginUser');
Route::get('/logoutUser', 'App\Http\Controllers\UsersController@logout')->name('logoutUser');
Route::get('/registration', 'App\Http\Controllers\UsersController@registration')->name('registration');
Route::post('/registrationStore', 'App\Http\Controllers\UsersController@registrationStore')->name('registrationStore');

Route::group(['middleware' => ['auth', 'checklevel:admin,user']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\EventsController@dashboard')->name('dashboard');
    Route::get('/submitEvent', 'App\Http\Controllers\EventsController@create')->name('submitEvent');
    Route::post('/storeEvent', 'App\Http\Controllers\EventsController@store')->name('storeEvent');
    Route::get('/detailEvent/{event}', 'App\Http\Controllers\EventsController@show')->name('detailEvent');
});
Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/listEvent', 'App\Http\Controllers\EventsController@listEvent')->name('listEvent');
    Route::get('/updateEvent/{event}', 'App\Http\Controllers\EventsController@edit')->name('updateEvent');
    Route::post('/updateEvent/{event}', 'App\Http\Controllers\EventsController@editStore')->name('updateEvent');
    Route::get('/deleteEvent/{event}', 'App\Http\Controllers\EventsController@destroy')->name('deleteEvent');
    Route::get('/displayEvent/{event}', 'App\Http\Controllers\EventsController@update')->name('displayEvent');
    Route::get('/noDisplayEvent/{event}', 'App\Http\Controllers\EventsController@updateNo')->name('noDisplayEvent');
});
