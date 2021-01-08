<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index(Request $index){
    	DB::table('users')->insert([
    	'name'=>$index->name,
    	'age'=>$index->age,
    	'email'=>$index->email,
    	'password'=>$index->password,
    	'mobile'=>$index->mobile,
    	]);
        return redirect()->back();
    }
    public function view(){
    	$data = DB::table('users')->get();
    	return view('rajform',['data'=>$data]);
    }
    public function delete(Request $delete){
         return DB::table('users')->where('id',$delete->id)->delete();
    }
    public function edit(Request $edit){
         return DB::table('users')->where('id',$edit->id)->get();
    }
     public function update(Request $update){
        DB::table('users')->where('id',$update->editId)->update([
        'name'=>$update->editName,
        'age'=>$update->editAge,
        'email'=>$update->editEmail,
        'password'=>$update->editPassword,
        'mobile'=>$update->editMobile,
        ]);
        return redirect()->back();
    }

}
