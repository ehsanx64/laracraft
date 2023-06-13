<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    $out = "<ul>\n";

    for ($i = 0; $i < 10; $i++) {
        $out .= sprintf("\t<li>%d</li>\n", $i);
    }

    $out .= "</ul>";

    return $out;
});

Route::get('test', function() {
    return Response::json([
        'method' => 'test',
        'result' => [
            'data' => [
                [
                    'name' => 'A',
                    'age' => 29,
                ],
                [
                    'name' => 'B',
                    'age' => 19,
                ],
                [
                    'name' => 'C',
                    'age' => 39,
                ],
                [
                    'name' => 'D',
                    'age' => 99,
                ],
            ]
        ]
    ]);
});

// function test_handler() {
//     return 'test_handler()';
// }

// Route::get('/test', test_handler);