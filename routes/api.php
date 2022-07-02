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

Route::get('contacts',[App\Http\Controllers\ContactController::class,'contacts']);


Route::post('save_Contact',[App\Http\Controllers\ContactController::class,'saveContact']);

Route::delete('delete_contact/{id}',[App\Http\Controllers\ContactController::class,'deleteContact']);