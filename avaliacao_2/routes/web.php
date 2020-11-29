<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;

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

Route::get("/home", [HomeController::class, 'index'])->name("home");
Route::get("logout", [HomeController::class, 'logout'])->name("logout");

Route::middleware(['auth'])->group(function(){

    Route::prefix("tags")->group(function () {
        Route::get( "", [TagController::class, 'index'])->name("tags-list");
        Route::get( "new", [TagController::class, 'create'])->name("tags-create");
        Route::post( "", [TagController::class, 'store'])->name("tags-store");
        Route::get( "{id}", [TagController::class, 'edit'])->name("tags-edit");
        Route::put( "{id}", [TagController::class, 'update'])->name("tags-update");
        Route::delete( "{id}", [TagController::class, 'destroy'])->name("tags-destroy");
    });

    Route::prefix("posts")->group(function () {
        Route::get( "", [PostController::class, 'index'])->name("posts-list");
        Route::get( "new", [PostController::class, 'create'])->name("posts-create");
        Route::post( "", [PostController::class, 'store'])->name("posts-store");
        Route::get( "{id}", [PostController::class, 'edit'])->name("posts-edit");
        Route::put( "{id}", [PostController::class, 'update'])->name("posts-update");
        Route::delete( "{id}", [PostController::class, 'destroy'])->name("posts-destroy");
    });
});

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
