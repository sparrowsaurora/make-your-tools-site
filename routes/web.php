<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/kits', function () {
    return view('kits');
});
Route::get('/docs', function () {
    return view('docs');
});
Route::get('/support', function () {
    return view('support');
});

