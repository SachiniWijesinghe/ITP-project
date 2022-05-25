<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReturnOrder;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function store(Request $request)
    {
      //validation rules
         $request->validate([
           'Code' => 'required|max:3',
           'Name' => 'required|max:100',
           'Reason' => 'required|max:100',
           'Quntity' => 'required|numeric|max:10',
           'Price' => 'required',
         ]);

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




    //search return items from table

  /*   public function search()
    {
      $search_text = $_GET['query'];
        $RtOrder = ReturnOrder::where('ReturnId','LIKE', '%'.$search_text.'%')->with('Quntity')->get();

        return view('search' ,compact('RtOrder'));

   */


   function show(Request $request)
   {
     $search=$request['query']??"";
     if($search !=null){
       $Data=ReturnOrder::where('ReturnId','LIKE',"$search")->with('Quntity')->get();
     }
     else{
       $Data=ReturnOrder::all();
     }

    // return view('returnordertable',['RtOrder'=>$Data]);

    return view('search' ,compact('Data'));
     //return view('search')->with('RtOrder', $Data);

   }
     
     

//search end




    







    

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




