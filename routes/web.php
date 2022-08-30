<?php

use App\Http\Controllers\TodolistFormController;
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

Route::get('/', [TodolistFormController::class, 'index']);
Route::get('/create-page', [TodolistFormController::class, 'createPage']);
Route::post('/create',[TodolistFormController::class, 'create']);
Route::get('/edit-page/{id}', [TodolistFormController::class, 'editPage']);
Route::post('/edit', [TodolistFormController::class, 'edit']);
Route::get('/delete-page/{id}', [TodolistFormController::class, 'deletePage']);
Route::post('/delete/{id}', [TodolistFormController::class, 'delete']);
