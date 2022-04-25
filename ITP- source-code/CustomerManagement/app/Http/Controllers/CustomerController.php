<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Candidate;
use Illuminate\Support\Facades\DB;
use View;

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




}
