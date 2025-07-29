<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/comunas', [CommuneController::class, 'communes'])->middleware(['auth', 'verified'])->name('communes');
Route::get('/departamentos', [DepartmentController::class, 'departments'])->middleware(['auth', 'verified'])->name('departments');
Route::get('/facultades', [FacultyController::class, 'faculties'])->middleware(['auth', 'verified'])->name('faculties');
Route::get('/barrios', [NeighborhoodController::class, 'neighborhoods'])->middleware(['auth', 'verified'])->name('neighborhoods');
Route::get('/programas', [ProgramController::class, 'programs'])->middleware(['auth', 'verified'])->name('programs');
Route::get('/calificaciones',[ScoreController::class, 'scores'])->middleware(['auth', 'verified'])->name('scores');
Route::get('/estudiantes', [StudentController::class, 'students'])->middleware(['auth', 'verified'])->name('students');
Route::get('/asignaturas', [SubjectController::class, 'subjects'])->middleware(['auth', 'verified'])->name('subjects');
Route::get('/docentes', [TeacherController::class, 'teachers'])->middleware(['auth', 'verified'])->name('teachers');


require __DIR__.'/auth.php';
