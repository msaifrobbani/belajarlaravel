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
    return view('welcome');
    //return config('majalah.pagination.backend');
});

//implementasi paramater pada route
/*
Route::get('admin/{id}/article/{articleId}', function ($id, $articleId)
{
    return 'Admin Gaul ' . $id . ' Penulisan Artikel sebanyak : ' . $articleId;
});
*/

//implementasi parameter jika optional
/*
Route::get('admin/{id?}', function ($id = null)
{
    return 'Admin Gaul ' . $id;
});
*/

Route::get('/login', function(){
    return 'login';
})->name('login'); //name untuk memudahkan kita dalam memanggil route

//Route group user
//Fungsi middleware('auth') adalah untuk mengecek bahwa routing ini hanya bisa diakses oleh user yang sudah login
Route::prefix('user')->middleware('auth')->group(function(){
    //definisikan route
    Route::get('/change-password', function(){
        return 'change password';
    });
    
    Route::get('/profile', function(){
        return 'profile';
    });
    
    Route::get('/photo', function(){
        return 'photo';
    });
});

Route::prefix('menu')->group(function(){
    //definisikan route
    Route::prefix('setting')->group(function(){
        Route::get('/security', function(){
            return 'Authentification';
        });
        
        Route::get('/author', function(){
            return 'profile';
        });
        
        Route::get('/malware', function(){
            return 'photo';
        });
    });

    Route::get('/sosmed', function(){
        return 'sosmed';
    });
});
