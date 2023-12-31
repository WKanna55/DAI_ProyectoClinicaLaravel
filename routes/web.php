<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgendarCitaController;
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

Route::get('/perfilPaciente', [PerfilPacienteController::class, 'show'])->name('perfilPaciente');

Route::post('/perfilPaciente', [PerfilPacienteController::class, 'update'])->name('actualizarPaciente');

Route::get('/doctor',[DoctorController::class, 'citas'])->name('citas');

Route::get('/pago',[PagoController::class, 'pago'])->name('pago');

Route::get('/dermatologia', [HomeController::class, 'dermatologia'])->name('dermatologia');

Route::get('/gastroenterologia', [HomeController::class, 'gastroenterologia'])->name('gastroenterologia');

Route::get('/ginecologia', [HomeController::class, 'ginecologia'])->name('ginecologia');

Route::get('/medicina_general', [HomeController::class, 'medicina_general'])->name('medicina_general');

Route::get('/odontologia', [HomeController::class, 'odontologia'])->name('odontologia');

Route::get('/oftalmologia', [HomeController::class, 'oftalmologia'])->name('oftalmologia');

Route::get('/doctor/atencion',[DoctorController::class, 'atencion'])->name('atencion');

Route::post('/doctor/atencion',[DoctorController::class, 'post_consulta'])->name('post_consulta');

Route::get('/agendar_especialidad',[AgendarCitaController::class, 'showEspecialidad'])->name('showEspecialidad');

Route::post('/agendar_especialidad',[AgendarCitaController::class, 'showDoctores'])->name('showDoctores');

/*Route::post('/agendar_doctor',[AgendarCitaController::class, 'showDoctores'])->name('showDoctores');*/

Route::post('/agendar_fecha',[AgendarCitaController::class, 'showFechas'])->name('showFechas');


Route::post('/agendar_horario',[AgendarCitaController::class, 'showHorarios'])->name('showHorarios');


//Route::get('/pago',[PagoController::class, 'pago'])->name('pago');



// Pago

Route::post('pago/payment', [PagoController::class, 'payment'])->name('paypal');

Route::get('pago/success', [PagoController::class, 'success'])->name('paypal_success');

Route::get('paypal_aviso', [PagoController::class, 'aviso'])->name('paypal_aviso');

Route::get('pago/cancel', [PagoController::class, 'cancel'])->name('paypal_cancel');


// Admin

Route::get('/admin', [AdminController::class, 'show'])->name('admin'); // muestra pagina de inicio de admin

Route::get('/admin/list', [AdminController::class, 'citas'])->name('citasAdmin'); // muestra citas

Route::get('/admin/agenda', [AdminController::class, 'showAgendar'])->name('agendaAdmin');// agenda citas

Route::post('/admin/agenda', [AdminController::class, 'agendar'])->name('buscar_paciente');

Route::delete('/admin/destroy', [AdminController::class, 'destroy'])->name('admin.destroy');
