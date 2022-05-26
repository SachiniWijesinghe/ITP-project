<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Admin_Privilege;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchAdminController extends Controller
{
    public function show()
    {
        $data = Admin::all();
        //$data1 = Admin_has_admin_privilege::all();
        return view('searchAdmin',['admin'=>$data]);
    }

    public function delete($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect('searchAdmin');
    }

    // public function search(){
    //     $search_text = $_GET['query'];
    //     $admin = Admin::where('id','LIKE','%'.$search_text.'%')->with('admin')->get();
        
    //     return view('searchAdmin',compact('admin'));
    // }

    public function search(Request $request){
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $admin = DB::table('admin')->where('id','LIKE','%'.$search_text.'%')->paginate(2);
            return view('searchAdmin',['admin'=>$admin]);
        }else{
            return view('searchAdmin');
        }
        
    }
}
