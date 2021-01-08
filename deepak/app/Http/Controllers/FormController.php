<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class FormController extends Controller
{
    public function index(Request $backend){
    	DB::table('dtname')->insert([
    		'name'=>$backend->name,
    		'age'=>$backend->age,
    		'email'=>$backend->email,
    		'password'=>$backend->password,
    		'mobile'=>$backend->mobile,
    	]);
    	return redirect()->back();
    }
    public function view(){
    	$data = DB::table('dtname')->get();
    	return view('form',['data'=>$data]);
    }
    public function delete(Request $delete){
    	 return DB::table('dtname')->where('id',$delete->id)->delete();
    }
    public function edit(Request $edit){
    	return DB::table('dtname')->where('id',$edit->id)->get();
    }
    public function update(Request $update){
      return DB::table('dtname')->where('id',$update->editId)->update([
       'name'=>$update->editName,
       'age'=>$update->editAge,
       'email'=>$update->editEmail,
       'password'=>$update->editPassword,
       'mobile'=>$update->editMobile,
       ]);

    }
}
