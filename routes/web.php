<?php

use Illuminate\Support\Facades\Route;

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
    // return view('welcome');
    return config('majalah.pagination.backend');
});

//implementasi paramater pada route
Route::get('admin/{id}/article/{articleId}', function ($id, $articleId)
{
    return 'Admin Gaul ' . $id . ' Penulisan Artikel sebanyak : ' . $articleId;
});

//implementasi parameter jika optional
Route::get('admin/{id?}', function ($id = null)
{
    return 'Admin Gaul ' . $id;
});
