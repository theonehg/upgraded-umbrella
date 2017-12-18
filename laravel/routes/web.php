<?php

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
    return redirect(route('request_create'));
})->name('dashboard');

Route::get('/create', function () {
    return view('create',
        [
            'user' => (object)[
                'id' => 'user_id',
                'avatar' => '#',
                'fullname' => 'Mai Thanh Minh',
                'title' => 'Meo Meo Meo',
                'username' => 'thanhminhmr',
                'email' => 'thanhminhmr@gmail.com',
                'team_id' => 'team_id',
                'position_id' => 'position_id'
            ]
        ]);
})->name('request_create');

Route::get('/logout', function () {
    return 'logout';
})->name('logout');

Route::get('/list', function () {
    return 'list';
})->name('request_list');