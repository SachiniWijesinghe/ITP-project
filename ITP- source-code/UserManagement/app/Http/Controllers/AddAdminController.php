<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Admin_Privilege;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Crypt;

use View;

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
            'username'=>'required|min:6|max:50',
            'email'=>'required|email|unique:admin',
            //'role'=>'required',
            'password'=>[
                'required','string',
                Password::min(8)->letters()->numbers()->mixedCase()->symbols()
            ],
            //'con_password'=>'required|string|min:8|confirmed',
            'disImage'=>'required'
        ]);

        $query = DB::table('admin')->insert([
            'fullName'=>$request->input('fullName'),
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            //'role'=>$request->input('role'),
            'password'=>Crypt::encrypt($request->input('password')),
            //'con_password'=>$request->input('con_password'),
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

    public function show()
    {
        $data = Admin::all();
        $data1 = Admin_Privilege::all();
        return view('addAdmin',['admin'=>$data,'data1'=>$data1]);
    }

    public function addData(Request $req)
    {
        $query = DB::table('admin_has_admin_privileges')->insert([
            'admin_id'=>$req->input('id'),
            'admin_privileges_id'=>$req->input('role'),
        ]);

        if($query){
            return back()->with('success','Data have been successfully inserted');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
}
