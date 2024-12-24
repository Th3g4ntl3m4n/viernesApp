<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

/** 

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

*/

Route::get('/contacto', [ContactoController::class, 'create'])->name('contacto');

/* First Register Controller */
Route::post('/formContact', 'App\Http\Controllers\ContactoController@formContact')->name('formContact');


// Ruta para mostrar el formulario
//* Route::get('/contacto', [ContactoController::class, 'create'])->name('contacto.create');

// Ruta para procesar el formulario y almacenar los datos
/*Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');*/

// Ruta para mostrar la lista de contactos
/*Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index'); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
