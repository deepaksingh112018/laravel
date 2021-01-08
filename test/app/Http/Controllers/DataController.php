<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class DataController extends Controller
{
    public function index(Request $backend ){
    	User::create([
    		'name'=>$backend->name,
    		'mobile'=>$backend->mobile,
    	]);
    	return redirect()->back();
    }
    public function view(){
    	$data = User::get();
    	return view('test',['data'=>$data]);
    }
}
