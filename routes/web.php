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

Route::get('/events',[\App\Http\Controllers\EventController::class,'affiche'])->name('events.index');

Route::get('/events2',[\App\Http\Controllers\EventController::class,'rechercheParDate'])->name('events.rechercheParDate');

Route::post('/events', [EventController::class, 'store'])->name('events.store');

Route::get('/createEvent', [EventController::class, 'create']);
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
//Route::get('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::get('/events/{id}', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');


Route::get('/eventsShow/{id}', [EventController::class, 'show'])->name('events.show');



Route::get('/participations',[\App\Http\Controllers\ParticipationController::class,'index']);
//Afficher le formulaire d'ajout d'une participation
Route::get('/participations/create',[\App\Http\Controllers\ParticipationController::class,'create']);

// route pour ajouter une participation
Route::post('/participations',[\App\Http\Controllers\ParticipationController::class,'store'])->name('participations.store');


// supprimer une participation
Route::delete('/participations/{id}',[\App\Http\Controllers\ParticipationController::class,'destroy'])->name('participations.destroy');
//Route::put('/events', [EventController::class, 'update']);

// afficher formulaire de modification d'une participation
Route::get('/participations/edit/{id}',[\App\Http\Controllers\ParticipationController::class,'edit'])->name('participations.edit');
//Modifier participation
Route::put('/participations/{id}',[\App\Http\Controllers\ParticipationController::class,'update'])->name('participations.update');

Route::get('/cal', function () {
    return view('home');
});







