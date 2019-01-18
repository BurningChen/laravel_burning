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
use Illuminate\Support\Facades\App;

Route::get('/', function () {
//    echo \App\Http\Controllers\Show::test();
    $value = config('app.timezone');
//    var_dump($value);
});
