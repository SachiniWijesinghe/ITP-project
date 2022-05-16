<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
//use MongoDB\Driver\Session;
use View;
use Dotenv\Validator; //logging
use Illuminate\Support\Facades\Auth; //logging
use Hash;
use Session;

class CustomerController extends Controller
{
    function show(Request $request)
    {
        $search=$request['search']??"";
        if($search !=null){
            $Data=Candidate::where('Fname','LIKE',"$search")->get();

        }
        else{
            $Data=Candidate::all();
        }
        return view('customers',['candidates'=>$Data]);

    }



//delete

public function delete($id)
{
    $Data=Candidate::find($id);
    $Data->delete();
    return redirect('customers');
}



//login

public function login()
{
    return view("login");
   

}



    public function loginUser(Request $request)
    {
        $this->validate($request,[

            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);
        $candidates=Candidate::where('email','=',$request->email)->first();
        if ($candidates){
            if(Hash::check($request->password,$candidates->password)){
                $request->session()->put('loginId',$candidates->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Password not correct');
            }

        }else{
            return back()->with('fail','This email is not registered');
        }

    }
    public function dashboard(){


        return view("dashboard");
    }

public function  profileView(){

    $data=array();
        if (Session::has('loginId')){
            $data=Candidate::where('id','=',Session::get('loginId'))->first();
        }

        return view("update",compact('data'));
}

public function logout(){
        if (Session::has('loginId')){
            Session::pull('loginId');
            return redirect ('login');
        }
}




public function showData($id){

    $data = Candidate::find($id);
    return view('edit',compact('data'));
}

function ProUpdate(Request $req,$id){

$data = Candidate::find($id);
$data->Fname= $req -> input('Fname');
$data->Lname= $req -> input('Lname');
$data->email= $req -> input('email');
$data->contactNo= $req -> input('contactNo');
$data->Address= $req -> input('Address');
$data->city= $req -> input('city');
$data->ZIP= $req -> input('ZIP');
$data->update();
return redirect('dashboard')->with('status',"Data Updated Sucessfully");


}



}
