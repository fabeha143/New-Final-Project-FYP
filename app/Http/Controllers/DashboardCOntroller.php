<?php

namespace App\Http\Controllers;

use App\Models\app_prescription;
use Illuminate\Support\Facades\Auth;
use App\Models\patient;
use App\Models\doctor;
use App\Models\employee;
use App\Models\inpatient_prescription;
use App\Models\appointments;
use Illuminate\Http\Request;

class DashboardCOntroller extends Controller
{
    public function index()
    {
        $patient = patient::all()->count();
        $doctor = doctor::all()->count();
        $employee = employee::all()->count();
        $appointmentsall = appointments::all();
        $appointments = appointments::where('status','=','pending')->count();

        $appointmentsapproved = appointments::where('status','=','Approved')->count();
        $PatientActive = patient::where('status','=','Active')->count();
        $appointmentprecription = app_prescription::all()->count();
        $inpatient_prescription_list = inpatient_prescription::all()->count();
        $patientAll = patient::all();



        if(Auth::user()->hasRole('admin')){

            return view('AdminPanel/index',compact('patient','doctor','employee','appointments','appointmentsall'));
        }
        elseif(Auth::user()->hasRole('doctor')){

            return view('DoctorDashboard/doctordash',compact('appointmentsapproved','PatientActive','appointmentprecription','inpatient_prescription_list','patientAll'));
        }
        elseif(Auth::user()->hasRole('attendant')){
            
            return view('Attendant Dashboard/attendantdash');
        }
    }
}
