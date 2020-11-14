<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChannelController;

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

Route::prefix("channels")->group(function () {
    Route::get( "", [ChannelController::class, 'index'])->name("channels-list");
    Route::get( "new", [ChannelController::class, 'create'])->name("channels-create");
    Route::post( "", [ChannelController::class, 'store'])->name("channels-store");
    Route::get( "{id}", [ChannelController::class, 'edit'])->name("channels-edit");
    Route::put( "{id}", [ChannelController::class, 'update'])->name("channels-update");
    Route::delete( "{id}", [ChannelController::class, 'destroy'])->name("channels-destroy");
});
