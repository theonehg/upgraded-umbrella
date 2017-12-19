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
    return route('request_create');
})->name('dashboard');

Route::get('/create', function () {
    return view('create',
        [
            'loggedUser' => (object)[
                'id' => 1,
                'email' => 'thanhminhmr@gmail.com',
                'name' => 'Mai Thanh Minh',
                'team_id' => 102,
                'position_id' => 402
            ],
            'users' => [
                (object)[
                    'id' => 1,
                    'name' => 'Mai Thanh Minh'
                ],
                (object)[
                    'id' => 2,
                    'name' => 'User Name One'
                ],
                (object)[
                    'id' => 3,
                    'name' => 'User Name Two'
                ],
                (object)[
                    'id' => 4,
                    'name' => 'User Name Three'
                ],
                (object)[
                    'id' => 5,
                    'name' => 'User Name Four'
                ]
            ],
            'teams' => [
                (object)[
                    'id' => 101,
                    'name' => 'Team Name One'
                ],
                (object)[
                    'id' => 102,
                    'name' => 'Team Name Two'
                ],
                (object)[
                    'id' => 103,
                    'name' => 'Team Name Three'
                ],
                (object)[
                    'id' => 104,
                    'name' => 'Team Name Four'
                ]
            ],
            'priorities' => [
                (object)[
                    'id' => 201,
                    'name' => 'Low'
                ],
                (object)[
                    'id' => 202,
                    'name' => 'Medium'
                ],
                (object)[
                    'id' => 203,
                    'name' => 'High'
                ],
                (object)[
                    'id' => 204,
                    'name' => 'Critical'
                ]
            ],
            'departments' => [
                (object)[
                    'id' => 301,
                    'name' => 'Hanoi'
                ],
                (object)[
                    'id' => 302,
                    'name' => 'Danang'
                ]
            ],
            'positions' => [
                (object)[
                    'id' => 401,
                    'name' => 'Member'
                ],
                (object)[
                    'id' => 402,
                    'name' => 'Sub-Leader'
                ],
                (object)[
                    'id' => 403,
                    'name' => 'Leader'
                ]
            ]
        ]);
})->name('request_create');

Route::post('/create', function () {
    return redirect(route('dashboard'));
})->name('request_create_post');

Route::get('/logout', function () {
    return 'logout';
})->name('logout');

Route::get('/list', function () {
    return 'list';
})->name('request_list');