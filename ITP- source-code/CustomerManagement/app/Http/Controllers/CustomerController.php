<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    function show()
    {
        $data= Candidate::all();
        return view('customers',['candidates'=>$data]);
    }

    //aluthem damnne serch ekata
    function searchC(Request $request)
    {
        if(isset($_GET['query']))
        {
            $search_text=$_GET['query'];
            $data=DB::table('candidates')->where('Fname','LIKE','%'.$search_text.'%')->paginate(100);
            return view('search',['candidates'=>$data]);

        }
        else{
            return view('search');
        }
    }





}
