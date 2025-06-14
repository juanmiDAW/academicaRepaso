<?php

use App\Http\Controllers\AlumnoController;
use App\Models\Nota;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('alumnos', AlumnoController::class);

Route::get('notas/ver/{id}',function($id){
    return view('notas.ver', ['notas'=>Nota::with('asignatura', 'evaluacion', 'alumno')->where('alumno_id', $id)->get()]);
})->name('notas');

require __DIR__ . '/auth.php';
