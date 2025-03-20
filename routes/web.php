<?php
use App\Http\Controllers\TheEndController;
use App\Http\Controllers\EjecutorController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Página principal
});

Route::get('/login', function () {
    return view('login'); // Página de login
});

Route::get('/CrearCuenta', function () {
    return view('CrearCuenta'); // Página de login
});

Route::get('/principal', function () {
    return view('principal');
})->name('principal');


Route::get('dashboard-content', [EjecutorController::class, 'getDashboardContent'])->name('dashboard-content');
Route::get('mis_investigaciones-content', [EjecutorController::class, 'getMisInvestigacionesContent'])->name('mis_investigaciones-content');
Route::get('colaboradores-content', [EjecutorController::class, 'getColaboradoresContent'])->name('colaboradores-content');
Route::get('estadisticas-content', [EjecutorController::class, 'getEstadisticasContent'])->name('estadisticas-content');

Route::post('/logout', [TheEndController::class, 'fin'])->name('fin');
