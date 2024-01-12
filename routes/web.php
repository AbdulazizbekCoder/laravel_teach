<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PageController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\AuthController;
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

Route::get('login', [AuthController::class ,'login'])->name('login');
Route::post('authenticate', [AuthController::class ,'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class ,'logout'])->name('logout');


Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class,
    'Users' => UserController::class,
]);
