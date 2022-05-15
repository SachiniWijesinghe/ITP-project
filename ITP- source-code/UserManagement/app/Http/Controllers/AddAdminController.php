<?php

namespace App\Http\Controllers;
//use App\Models\Admin_Privilege;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AddAdminController extends Controller
{
    // public function index()
    // {
    //     $data = Admin_Privilege::all();
    //     return view('addAdmin',['data'=>$data]);
    // }

    public function getData(Request $request)
    {
        //dd($request->all());
        //dd($request->bearerToken());

        $request->validate([
            'fullName'=>'required',
            'username'=>'required',
            'email'=>'required|email|unique:admin',
            'role'=>'required',
            'password'=>'required',
            'con_password'=>'required',
            'disImage'=>'required'
        ]);

        $query = DB::table('admin')->insert([
            'fullName'=>$request->input('fullName'),
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'role'=>$request->input('role'),
            'password'=>$request->input('password'),
            'con_password'=>$request->input('con_password'),
            'disImage'=>$request->input('disImage'),
        ]);

        if($query){
            return back()->with('success','Data have been successfully inserted');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function add(Request $req)
    {
        return $req->input();
    }
}
