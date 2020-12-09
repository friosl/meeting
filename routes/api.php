<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/meetings', 'Api\MeetingApi@index')->name("api.meeting.index");
Route::get('/meetings/{id}', 'Api\MeetingApi@show')->name("api.meeting.show");

Route::get('/v2/meetings', 'Api\MeetingApiV2@index')->name("api.v2.meeting.index");
Route::get('/v2/meetings/{id}', 'Api\MeetingApiV2@show')->name("api.v2.meeting.show");

Route::get('/v3/meetings', 'Api\MeetingApiV3@index')->name("api.v3.meeting.index");
Route::get('/v3/meetings/paginate', 'Api\MeetingApiV3@paginate')->name("api.v3.meeting.paginate");
