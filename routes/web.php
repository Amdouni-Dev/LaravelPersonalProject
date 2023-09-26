<?php

use App\Http\Controllers\EventController;
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
Route::get('/test',[\App\Http\Controllers\TestController::class,'test']);
Route::get('/test2',[\App\Http\Controllers\TestController::class,'test2']);
Route::get('/testForm',[\App\Http\Controllers\TestController::class,'testForm']);

Route::get('/testTemplate',[\App\Http\Controllers\TestController::class,'testTemplate']);

// Partie Event
Route::get('/events',[\App\Http\Controllers\EventController::class,'affiche']);
Route::post('/events', [EventController::class, 'store'])->name('events.store');

Route::get('/createEvent', [EventController::class, 'create']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
//Route::get('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::get('/events/{id}', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');


Route::get('/eventsShow/{id}', [EventController::class, 'show'])->name('events.show');


//Route::put('/events', [EventController::class, 'update']);








