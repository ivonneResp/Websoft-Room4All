<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentacuartosController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\Super\CategoriesController;
use App\Http\Controllers\Super\PostsController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/posts/{category}', [HomeUserController::class, 'postByCategory'])->name('posts.category');

Route::get('/post', [HomeUserController::class, 'index'])->name('post');


//titulo (no necesariamente debe ser el titulo pero asi de mientras para que jale :,c)
Route::get('/superAdmin/categories', [App\Http\Controllers\Super\CategoriesController::class, 'index'])->name('SuperAdmin.categories.index');
Route::post('/superAdmin/categories/store', [App\Http\Controllers\Super\CategoriesController::class, 'store'])->name('SuperAdmin.categories.store');
Route::post('/superAdmin/categories/{categoryId}/update', [App\Http\Controllers\Super\CategoriesController::class, 'update'])->name('SuperAdmin.categories.update');
Route::delete('/superAdmin/categories/{categoryId}/delete', [App\Http\Controllers\Super\CategoriesController::class, 'delete'])->name('SuperAdmin.categories.delete');


//posts
Route::get('/admin/posts', [App\Http\Controllers\Admin\PostsController::class, 'index'])->name('Administrador.posts.index');
Route::post('/admin/posts/store', [App\Http\Controllers\Admin\PostsController::class, 'store'])->name('Administrador.posts.store');
Route::post('/admin/posts/{postId}/update', [App\Http\Controllers\Admin\PostsController::class, 'update'])->name('Administrador.posts.update');
Route::delete('/admin/posts/{postId}/delete', [App\Http\Controllers\Admin\PostsController::class, 'delete'])->name('Administrador.posts.delete');



//post para super admin prueba

Route::get('/superAdmin/posts', [App\Http\Controllers\Super\PostsController::class, 'index'])->name('SuperAdmin.posts.index');
Route::post('/superAdmin/posts/store', [App\Http\Controllers\Super\PostsController::class, 'store'])->name('SuperAdmin.posts.store');
Route::post('/superAdmin/posts/{postId}/update', [App\Http\Controllers\Super\PostsController::class, 'update'])->name('SuperAdmin.posts.update');
Route::delete('/superAdmin/posts/{postId}/delete', [App\Http\Controllers\Super\PostsController::class, 'delete'])->name('SuperAdmin.posts.delete');









Auth::routes();

//para renta de cuartosss

//Route::get('/post', [App\Http\Controllers\RentacuartosController::class, 'index']);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('/superAdmin', [SuperController::class, 'index'])->name('super');


