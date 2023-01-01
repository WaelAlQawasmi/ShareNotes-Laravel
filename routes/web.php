<?php

use App\Http\Controllers\NotesController;
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



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified']
)->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('note.index');
    })->name('dashboard');


   

});
Route::post('notesAction/deletees/', [NotesController::class,'destroies'])->name('notesAction.destroies');

Route::controller(NotesController::class)->middleware(['auth:sanctum',config('jetstream.auth_session'),'verified']
)->prefix('notes')->group(function(){
   
    Route::put('/update/{id}/', 'update')->name('note.update')->middleware('NotesAccess');
   

    Route::post('/store','store')->name('note.store');
    Route::get('/index','index')->name('note.index');
});


