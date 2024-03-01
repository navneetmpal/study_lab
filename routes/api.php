<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\IndexController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/test', function () {
//     return "hello";
// });

Route::get('/test', [IndexController::class, 'index'])->name('test.index');//testing mate
Route::post('/store', [IndexController::class, 'store'])->name('test.store');
Route::get('/show/{id}', [IndexController::class, 'show'])->name('test.show');
Route::delete('/destroy/{id}', [IndexController::class, 'destroy'])->name('test.destroy');
Route::put('/update/{id}', [IndexController::class, 'update'])->name('test.update');
// Route::patch('/update/{id}', [IndexController::class, 'update'])->name('test.update');
Route::post('/registger', [IndexController::class, 'registger'])->name('test.registger');
Route::post('/login', [IndexController::class, 'login'])->name('test.login');

// Route::get('/user/{id}', [IndexController::class, 'getUser'])->name('test.getUser');

Route::middleware('auth:api')->group(function(){
    Route::get('/user/{id}', [IndexController::class, 'getUser'])->name('test.getUser');
});