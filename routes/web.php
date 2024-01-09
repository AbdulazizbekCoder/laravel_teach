<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\CommentController;

/*
 *
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class ,'main'])->name('main');
Route::get('/about', [PageController::class ,'about'])->name('about');
Route::get('/service', [PageController::class ,'service'])->name('service');
Route::get('/contact', [PageController::class ,'contact'])->name('contact');
Route::get('/project', [PageController::class ,'project'])->name('project');


Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class,
    'Users' => UserController::class,
]);
