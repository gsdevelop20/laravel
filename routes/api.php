<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('myapi', function (Request $request) {
    $data = [
        'users' => [
            [
                'id' => 3,
                'name' => 'gabriel'
            ],
            [
                'id' => 8,
                'name' => 'Rulysor'
            ],
            [
                'id' => 8,
                'name' => 'Rulysor'
            ],
            [
                'id' => 8,
                'name' => 'Rulysor'
            ],
            [
                'id' => 8,
                'name' => 'Rulysor'
            ]
        ]
    ];

    $content = json_encode($data);

    return $content;
});
