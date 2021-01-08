<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Storage;
use App\File;
use Response;
class FileController extends Controller
{
 public function index()
    {
    	$file=File::all();
    	return view('user.file',['file'=>$file]);
    }
    public function create(Request $create){
    	$data = $create->file('file_name');
    	$photo = $data->getClientOriginalName();
    	$path = storage_path('app/public/images/');
    	$status = $data->move($path, $photo);
     //    $data = $create->file;
    	// Storage::put($data,'file');
    	File::create(['file_name'=>$photo]);
    	return redirect()->back();
    }
    public function delete($id) { 
    	File::find($id)->delete();
    	return redirect()->back();
    }
    public function download($file){
    	 return Storage::download('public/images/'.$file);
    }
}
