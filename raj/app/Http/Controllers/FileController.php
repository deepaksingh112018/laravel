<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use App\File;
class FileController extends Controller
{
    public function index(){
        $file =File::all();
    	return view('file',['deepak'=>$file]);
    }
     public function create(Request $create){
     	// dd($create->all());
     	$data=$create->file('file');
        // dd($data);
        $photo = $data->getClientOriginalName();
        $path = storage_path('app/public/images');
        $status = $data->move($path, $photo);
     	File::create(['file_name'=>$photo]);
     	// File::create(['file_name'=>$data]);


    }

}
