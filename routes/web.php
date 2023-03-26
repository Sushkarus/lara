<?php

use Illuminate\Support\Facades\DB;
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
    $visited = DB::select('select * from places where visited = ?', [1]);
//    var_dump($visited);die;
    $togo = DB::select('select * from places where visited = ?', [0]);

    return view('travellist', ['visited' => $visited, 'togo' => $togo ] );
});
