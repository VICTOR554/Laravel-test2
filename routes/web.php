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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return "This is the home page";
});

Route::get('/work', function () {
    return "This is the work page";
});

Route::redirect('/work', '/home', 301);



Route::any('users/{id?}', function ($id = 'John doe') {
    return "User page ".$id;
});

Route::any('users/{id?}/comment/{commentId?}', function ($id = 'John doe', $commentId = 'null') {
    return "User page ".$id. " comment id ".$commentId;
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
