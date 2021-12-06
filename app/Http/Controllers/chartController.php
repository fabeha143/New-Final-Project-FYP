<?php

namespace App\Http\Controllers;
use App\Models\visitors;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class chartController extends Controller
{
    public function chartjs(){

       $visitor = visitors::select(\DB::raw("year(created_at) as year"),\DB::raw("SUM(click) as total_click"),\DB::raw("SUM(viewer) as total_viewer"))->orderBy("created_at")->groupBy(DB::raw("year(created_at)"))->get();
       
          $result[] = ['Year','Click','Viewer'];
       
          foreach ($visitor as $key => $value) {
               $result[++$key] = [$value->year, (int)$value->total_click, (int)$value->total_viewer];
           
               }
            return view('AdminPanel/index')->with('visitor',json_encode($result));
    }  
}
