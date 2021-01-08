
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;  
class UserController extends Controller
{
   public function index(Request $request){ 
    	User::create([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>$request->password,
    		'mobile'=>$request->mobile,
    	]);
        return redirect()->back();
    }
  public function view(){
    	$data = User::get();
    	return view('user.registration',['data'=>$data]);
    }
   public function delete(Request $deleteRequest){
        User::where('id',$deleteRequest->id)->delete();
    }
    public function edit(Request $request){
        // dd($request->all());
       return User::where('id',$request->id)->first();
    }
    public function update(Request $updateRequest){
        // dd($updateRequest->all());
            User::where('id',$updateRequest->editId)->update([
            'name'=>$updateRequest->editName,
            'email'=>$updateRequest->editEmail,
            'password'=>$updateRequest->editPassword,
            'mobile'=>$updateRequest->editMobile,
        ]);
        return redirect()->back();
    }
}

