<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::group(['middleware'=>'auth'], function(){
    
Route::view('/forgetpassword', 'forgetpass');


///////////////////////////////Admin/////////////////////////////////////////////

// Route::get('/index', [App\Http\Controllers\admindashController::class, 'index'])->name('index');
Route::get('/appointment', [App\Http\Controllers\appointmentController::class, 'index'])->name('index');
Route::get('/approved/{id}', [App\Http\Controllers\appointmentController::class, 'approved'])->name('approved');
Route::get('/cancel/{id}', [App\Http\Controllers\appointmentController::class, 'cancel'])->name('cancel');

Route::resource('patient','PatientController');
Route::resource('doctor','doctorController');
Route::resource('employee','employeeController');
Route::resource('employeeRole','employee_role_controller');
Route::resource('department','departmentController');
Route::resource('medicine','medicineController');
Route::resource('doseschedule','doseschedController');
Route::resource('schedule','scheduleController');
Route::resource('medicinesCategory','med_cat_controller');

//Mail
Route::get('/profile', [App\Http\Controllers\profileController::class,'index'])->name('profile');
//profile
Route::get('/inbox', [App\Http\Controllers\mailController::class,'index'])->name('inbox');

///////////////////////////////Admin/////////////////////////////////////////////


///////////////////////////////Doctor/////////////////////////////////////////////
// Route::get('/doctordash', [App\Http\Controllers\doctordashController::class, 'index'])->name('index');
Route::get('/AppointmentList', [App\Http\Controllers\doctordashController::class, 'doc_appointment'])->name('AppointmentList');
Route::get('/inpatientList', [App\Http\Controllers\doctordashController::class, 'inpatientlist'])->name('inpatientList');

Route::get('/writePrescription/{id}', [App\Http\Controllers\app_prescription_controller::class, 'index'])->name('writePrescription');
Route::post('/Prescriptioncreate/{id}',[App\Http\Controllers\app_prescription_controller::class, 'store'])->name('Prescriptioncreate');

Route::get('/writePrescriptionpatient/{id}', [App\Http\Controllers\InPatientController::class, 'index'])->name('writePrescriptionpatient');
Route::post('/InpatientPrescriptioncreate/{id}',[App\Http\Controllers\InPatientController::class, 'store'])->name('InpatientPrescriptioncreate');

Route::resource('appprescription','outpatient_prescription_controller');
Route::resource('Inpatientprescription','inpatient_pres_controller');

// Route::get('/InPatient', [App\Http\Controllers\InPatientController::class, 'index'])->name('InPatient');
///////////////////////////////Doctor/////////////////////////////////////////////

///////////////////////////////Attendant/////////////////////////////////////////////
// Route::get('/attendantdash ', [App\Http\Controllers\attendantdashController::class, 'index'])->name('index');

///////////////////////////////Attendant/////////////////////////////////////////////


    Route::get('/dashboard',[App\Http\Controllers\DashboardCOntroller::class , 'index'])->name('dashboard');
    // });
require __DIR__.'/auth.php';
