<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\MatchController;
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

Route::get("/", [HomeController::class, 'index'])->name("home");
Route::get("logout", [HomeController::class, 'logout'])->name("logout");


Route::middleware(['auth'])->group(function(){

    Route::prefix("channels")->group(function () {
        Route::get( "", [ChannelController::class, 'index'])->name("channels-list");
        Route::get( "new", [ChannelController::class, 'create'])->name("channels-create");
        Route::post( "", [ChannelController::class, 'store'])->name("channels-store");
        Route::get( "{id}", [ChannelController::class, 'edit'])->name("channels-edit");
        Route::put( "{id}", [ChannelController::class, 'update'])->name("channels-update");
        Route::delete( "{id}", [ChannelController::class, 'destroy'])->name("channels-destroy");
    });

    Route::prefix("matches")->group(function () {
        Route::get( "", [MatchController::class, 'index'])->name("matches-list");
        Route::get( "new", [MatchController::class, 'create'])->name("matches-create");
        Route::post( "", [MatchController::class, 'store'])->name("matches-store");
        Route::get( "{id}", [MatchController::class, 'edit'])->name("matches-edit");
        Route::put( "{id}", [MatchController::class, 'update'])->name("matches-update");
        Route::delete( "{id}", [MatchController::class, 'destroy'])->name("matches-destroy");
    });

    Route::prefix("users")->group(function () {
        Route::get( "", [UserController::class, 'index'])->name("users-list");
        Route::get( "new", [UserController::class, 'create'])->name("users-create");
        Route::post( "", [UserController::class, 'store'])->name("users-store");
        Route::get( "{id}", [UserController::class, 'edit'])->name("users-edit");
        Route::put( "{id}", [UserController::class, 'update'])->name("users-update");
        Route::delete( "{id}", [UserController::class, 'destroy'])->name("users-destroy");
    });
});

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
