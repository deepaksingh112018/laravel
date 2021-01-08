<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Raj;
class ProfileController extends Controller
{
    public function index(Request $request){ 
    	Raj::create([
    		'name'=>$request->name,
    		'age'=>$request->age,
    		'email'=>$request->email,
    		'password'=>$request->password,
    		'mobile'=>$request->mobile,
    	]);
        return redirect()->back();
    }
  public function view(){
    	$data = Raj::get();
    	return view('pratics',['data'=>$data]);
    }
}
