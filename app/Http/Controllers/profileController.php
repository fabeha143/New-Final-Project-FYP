<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function index()
    {
        $posts = profile::all()->where('user_id',Auth::user()->id);
        $UserData = Auth::user();
        $roles = $UserData->getRoles();
        return view('Profile/profile',compact('UserData','roles','posts'));
    }
    public function post(Request $request)
    {
       profile::create([
           'posts' => $request->post,
           'user_id' => Auth::user()->id

       ]);
       return redirect()->back()->with('message','Operation Successful !');
       
    }
    public function distroy($id)
    {
        profile::where('id' , $id)->delete();
        return redirect()->back();
    }
    
}
 