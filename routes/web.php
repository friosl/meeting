<?php

use App\Http\Controllers\MeetingController;
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
// HomeController el php en "Controller" @ función en el controlador name -> ruta de la vista / método supongo... Not sure
Route::get('/meeting', 'HomeController@index')->name("home.index");
Route::get('/meeting/create','MeetingController@create')->name("meeting.create");
Route::get('/meeting/show', 'MeetingController@showAll')->name("meeting.show");
Route::get('/meeting/show/{id}', 'MeetingController@show_Id')->name("meeting.showID");

Route::post('/meeting/save', 'MeetingController@save')->name("meeting.save");
Route::get('/meeting/destroy/{id}', 'MeetingController@destroy')->name("meeting.destroy");
