<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NotaController;
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
Route::resource('notas', NotaController::class);

Route::get('notas/ver/{id}',function($id){
    return view('notas.ver', ['notas'=>Nota::with('asignatura', 'evaluacion', 'alumno')->where('alumno_id', $id)->get()]);
})->name('notas');

Route::get('notas/cambiar/{id}', function($id){
    return view('notas.cambiar', ['nota'=>Nota::where('id', $id)->first()]);
})->name('notas.cambiar');

require __DIR__ . '/auth.php';
