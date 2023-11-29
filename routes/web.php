<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilPacienteController;
use App\Http\Controllers\PagoController;

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
    return view('home.index');
})->name('home');

Route::get('/register', [RegisterController::class, 'show'])->name('reg');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'show'])->name('loginShow');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');

Route::get('/especialidades', [HomeController::class, 'especialidades'])->name('especialidades');

Route::get('/logout', [LogoutController::class,'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'adminShow'])->name('adminShow');

Route::get('/perfilPaciente', [PerfilPacienteController::class, 'show'])->name('perfilPaciente');

Route::get('/doctor',[DoctorController::class, 'citas'])->name('citas');

Route::get('/pago',[PagoController::class, 'pago'])->name('pago');
