<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use App\File;


class FileController extends Controller
{
    public function index(){
    	$file = File::all();
    	return view('file',['deepak'=>$file]);
    }
    public function createFile(Request $create){
    	$data = $create->file('file_name');
    	$photo = $data->getClientOriginalName();
    	$path = storage_path('app/storage/images/');
    	$status = $data->move($path,$photo);
    	File::create([file_name=>$photo]);
    	return redirect()->back();
    }
}
