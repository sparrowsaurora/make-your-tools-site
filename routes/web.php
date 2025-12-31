<?php

use App\Http\Controllers\WaitlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KitController;
use App\Http\Controllers\DocController;

/**
 * The main routes.
 *
 * no auth reqs.
 *
 * - Self.
 * - kits (shop) shop/kit/<id> (pref name)
 * - Docs ...-> docs/kit/<id> (pref name)
 * - courses?
 * - support (contact)
 */

Route::get('/', function () {
    return view('main');
});
Route::get('/kits', [KitController::class, 'index']);
Route::get('/docs', [DocController::class, 'index']);
Route::get('/support', function () {
    return view('support');
});

/**
 *  WaitList routes
 *
 *  temp routes until site is ready.
 *  for people interested in the product
 */

Route::get('/waitlist', [WaitlistController::class, 'show'])->name('waitlist.show');
Route::post('/waitlist', [WaitlistController::class, 'store'])->middleware('throttle:10,1')->name('waitlist.store');

/**
 *  Kit routes, (shop)
 *
 *  kits/<kitName>
 */
Route::get('/kits/{kit}', [KitController::class, 'show'])->name('kits.show');
