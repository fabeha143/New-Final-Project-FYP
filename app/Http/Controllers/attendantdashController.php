<?php

namespace App\Http\Controllers;
use App\Models\dose_schedule;
use Illuminate\Http\Request;

class attendantdashController extends Controller
{
    public function index()
    {
        $dose_schedule = dose_schedule::all();
        return view('Attendant Dashboard/attendantdash',compact('dose_schedule'));
    }
    public function store(Request $request ,$id)
    {

        dose_schedule::create([
            'dose_confirm' => $request->dose_confirm
        ]);
    }
}
