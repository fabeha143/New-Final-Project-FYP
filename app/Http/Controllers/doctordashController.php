<?php

namespace App\Http\Controllers;
use App\Models\appointments;
use App\Models\patient;


use Illuminate\Http\Request;

class doctordashController extends Controller
{
    public function doc_appointment()
    {
        $data = appointments::where('status', 'Approved')->get();
        return view('DoctorDashboard/doc_appointment',['data' => $data]);
    }
    public function inpatientlist()
    {
        $patientdata = patient::where('status', 'Active')->get();
        return view('DoctorDashboard/InPatientlist',['patientdata' => $patientdata]);
    }
   
}
    
