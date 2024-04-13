<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Пути ресурсного контроллера Student
Route::get('/groups/students', [StudentController::class, 'index'])->name('student.index'); // общий список студентов всех групп

Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('student.store'); // именованный маршрут group.store
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('student.show');


// Пути ресурсного контроллера Group
Route::get('/groups', [GroupController::class, 'index'])->name('group.index'); // именованный маршрут group.index
Route::get('/groups/create', [GroupController::class, 'create'])->name('group.create'); // именованный маршрут group.create
Route::get('/groups/{id}', [GroupController::class, 'show'])->name('group.show'); // именованный маршрут group.show
Route::post('/groups', [GroupController::class, 'store'])->name('group.store'); // именованный маршрут group.store

// изменение групп
Route::get('/groups/{group}/edit', [GroupController::class, 'edit'])->name('group.edit');
Route::post('/groups/{group}', [GroupController::class, 'update'])->name('group.update');





