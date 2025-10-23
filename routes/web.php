<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index'])->name('todos.index');
Route::resource('todos', TodoController::class)->except(['index']);
Route::post('todos/{todo}/toggle', [TodoController::class, 'toggle'])->name('todos.toggle');
Route::patch('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todos.complete');
