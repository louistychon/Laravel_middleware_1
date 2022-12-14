<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;


//front

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/articles', function () {
    return view('pages.frontoffice.articles');
})->middleware('role');


Route::get('/foo', function () {
    return view('pages.frontoffice.foo');
})->middleware('role');

//back

//home

Route::get('/back/home', function () {
    return view('pages.backoffice.home');
})->middleware(['auth'])->name('dashboard');

//users

Route::get('/users',[RoleController::class, 'index'])->middleware('role:admin');
Route::get('/users/{id}/show', [RoleController::class, 'show'])->middleware(['auth']);
Route::get('/users/create', [RoleController::class, 'create'])->middleware(['auth']);
Route::post('/users/create/new', [RoleController::class, 'store'])->middleware(['auth']);
Route::delete('/users/{id}/delete', [RoleController::class, 'destroy'])->middleware(['auth']);

//articles

Route::get('/articles', [ArticleController::class, 'index'])->middleware(['auth']);
Route::get('/articles/create', [ArticleController::class, 'create'])->middleware(['auth']);
Route::get('/articles/{id}/show', [ArticleController::class, 'show'])->middleware(['auth']);
Route::post('/articles/create/article', [ArticleController::class, 'store'])->middleware(['auth']);
Route::delete('/articles/{id}/delete', [ArticleController::class, 'destroy'])->middleware(['auth']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
