<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;


class RegistersController extends Controller
{
    public function register(Request $request){
        $this->validate($request,[
            'Fname'=>'required',
            'Lname'=>'required',
            'email'=>'required',
            'password'=>'required',
            'Cpassword'=>'required',
            'contactNo'=>'required',
            'Address'=>'required',
            'city'=>'required',
            'ZIP'=>'required',
        ]);
$candidates = new Candidate;
$candidates->Fname= $request -> input('Fname');
$candidates->Lname= $request -> input('Lname');
$candidates->email= $request -> input('email');
$candidates->password= $request -> input('password');
$candidates->Cpassword= $request -> input('Cpassword');
$candidates->contactNo= $request -> input('contactNo');
$candidates->Address= $request -> input('Address');
$candidates->city= $request -> input('city');
$candidates->ZIP= $request -> input('ZIP');
$candidates->save();
return redirect('/')->with('response','Register Succesfully');


    }
}
