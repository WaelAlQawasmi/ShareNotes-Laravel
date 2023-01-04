<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\NotesController;
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
// user profile routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// get user sessions
Route::middleware('auth:sanctum')->get('/sessions', function (Request $request) {
    return $request->user()->tokens()->get();
});


// auth routes
Route::post('/register',[CreateNewUser::class,'createViaApi']);
//LOGOUT this token
Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
    return $request->user()->currentAccessToken()->delete();
});
Route::middleware('auth:sanctum')->post('/logout-all-sessions', function (Request $request) {
    return $request->user()->tokens()->delete();
});

Route::post('/login',[CreateNewUser::class,'loginViaApi']);


Route::controller(NotesController::class)->middleware(['auth:sanctum']
)->prefix('notes')->group(function(){
   
    Route::put('/update/{id}/', 'update')->name('note.update')->middleware('NotesAccess');
    Route::delete('/delete/{id}/', 'destroies')->name('note.delete')->middleware('NotesAccess');


    Route::post('/store','store')->name('note.store');
    Route::get('/index','indexApi')->name('note.indexApi');
});
