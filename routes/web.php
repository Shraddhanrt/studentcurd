<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'Index'])->name('index');
Route::get('/form', [StudentController::class, 'create'])->name('create');
Route::post('/submit-form', [StudentController::class, 'store'])->name('submit');
Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::post('edit/{id}', [StudentController::class, 'update'])->name('update');
Route::get('/user/delete/{id}', [StudentController::class, 'destroyUser'])->name('users.destroy');
