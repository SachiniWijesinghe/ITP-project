<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReturnOrder;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $rorder=new ReturnOrder;

        $rorder->ReturnId=$request->Code;
        $rorder->ItemName=$request->Name;
        $rorder->Reason=$request->Reason;
        $rorder->Quntity=$request->Quntity;
        $rorder->Price=$request->Price;
        

        $rorder->save();
        
        $data=ReturnOrder::all();
        //dd($data);
        return view('returnordertable')->with('RtOrder', $data);
          



        //  dd($request->all());
    }



    

    public function remove($id)
    {
      //DB::delete('delete from return_orders where id = ?',[$id]);
      
      
      
      
        $data=ReturnOrder::find($id);
        $data->delete();
       return redirect()->back();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
        //return view('returnordertable');
    }



//update................



public function showData($id){
 

  $data= ReturnOrder::find($id);
 return view('uptable',['data'=>$data]);

 //return view('uptable')->with('returndata',$data);

   
}


 public function update(Request $req)
{
 // $data=new ReturnOrder;

  $data=ReturnOrder::find($req->id);
  $data-> ReturnId=$req->ReturnId;
  $data->ItemName=$req->ItemName;
  $data->Reason=$req->Reason;
  $data->Quntity=$req->Quntity;
  $data->Price=$req->Price;
  $data->save();
  return redirect()->back(); 

}


}




