<?php

namespace App\Http\Controllers;


use App\Models\order;


use Illuminate\Http\Request;     
use App\Models\IssueDelivery;      //this is for interact data by using model 
use Illuminate\Support\Facades\DB;//this is for interact data by using query builder
class IssueDeliveryController extends Controller
{
    //me function eka   //me $request eken ara form eken dena data allagnna puluwn
    public function Store(Request $request){
        $issue=new IssueDelivery;
      
        $issue->totalQty=$request->TotalQt;
        $issue->totalAmount=$request->TotalAmount;
        $issue->issueDate=$request->IssueDate;
        $issue->deliveredDate=$request->DeliveredDate;
        $issue->status=$request->Status;
        $issue->idOrder=$request->IdOrder;
        $issue->idCustomer=$request->IdCustomer;

        $issue->save();
        //return redirect()->back();  //apahu klin pituwatama enna me
        return redirect('viewallissueDelivery');
    }

    public function show(){
    // return view('viewallissueDelivery');                     view eka pennanawad blnna
    // return IssueDelivery::all();                               ok fetch all data 
    //now return key and value paires   below IssueDelivery is model name
           $data = IssueDelivery::all();
           return view('viewallissueDelivery',['members'=>$data]);  //here key and value  member and $data.now our data is passed to blade file.view ekt pss wenwa
    }

    function delete($id){
        $data =IssueDelivery::find($id);
        $data -> delete();
        return redirect('viewallissueDelivery');
    }

    function edit($id){
       
        $dataX =IssueDelivery::find($id);
        //model name       //get id form url

        return view('EditIssueDelivery',['data'=>$dataX]);
    }





   function StoreEditedData(Request $request){  //passing request type data to form to controller
    
    $EditedData= IssueDelivery::find($request->id);

     $EditedData->totalQty=$request->TotalQt;
     $EditedData->totalAmount=$request->TotalAmount;
     $EditedData->issueDate=$request->IssueDate;
     $EditedData->deliveredDate=$request->DeliveredDate;
     $EditedData->status=$request->Status;
     $EditedData->idOrder=$request->IdOrder;
     $EditedData->idCustomer=$request->IdCustomer;

     $EditedData->save();
         return redirect('viewallissueDelivery');  


   }

   /////////////////////////////////////////////////////////////////////////////

   //search eken passe krpu tika mn  //edit widihta data gththa order eken gththu data tika form ekaka pennanwa

   function issueDel($id){
    $row=DB::table('orders')->where('id',$id)->first();
    $data=['info'=>$row,
            'title'=>'ISSUE DELIVERY'
                     ];
 
    return view('IIIsueDelivery',$data);   ////------------------------methana wrddak tibboth 3.40 min blnna
    
}

//searched data form ekt ghn adupadu dala ita passe database ekt insert krnna
//  StoreDataFromSearchedResults



public function StoreDataFromSearchedResults(Request $request){
    $issue=new IssueDelivery;
  
    $issue->totalQty=$request->TotalQt;
    $issue->totalAmount=$request->TotalAmount;
    $issue->issueDate=$request->IssueDate;
    $issue->deliveredDate=$request->DeliveredDate;
    $issue->status=$request->Status;
    $issue->idOrder=$request->IdOrder;
    $issue->idCustomer=$request->IdCustomer;

    $issue->save();
    //return redirect()->back();  //apahu klin pituwatama enna me
    return redirect('/search');
}
//meka wge uda function eka hduwe me ordercontroller eke eka
/*function searchOrderX(Request $request){
    if(isset($_GET['QorderedDate'])){
       $searchText = $_GET['QorderedDate'];
       $data =DB::table('orders')->where('date','LIKE','%'.$searchText.'%')->paginate(100);
       return view('searchOrder',['members'=>$data]);
                    //key value
    }
    else{
    return view('searchOrder');
    }
}
*/



///////////////////////////////////////





public function pending(){

    // return view('viewallissueDelivery');                     view eka pennanawad blnna
   // return IssueDelivery::all();                               ok fetch all data 
//now return key and value paires   below IssueDelivery is model name
        $status='pending';
        $data = IssueDelivery::where('status','LIKE','%'.$status.'%')->get();
        return view('pendingDeliveries',['members'=>$data]);  //here key and value  member and $data.now our data is passed to blade file.view ekt pss wenwa
 }


         
function editpendingX($id){
    echo 'qqqqqqqqqqqqqqqqqqqqqq';   
    $dataX =IssueDelivery::find($id);
    //model name       //get id form url

    return view('EditPendingIssueDelivery',['data'=>$dataX]);
}





function StoreEditedPendingData(Request $request){  //passing request type data to form to controller

$EditedData= IssueDelivery::find($request->id);

 $EditedData->totalQty=$request->TotalQt;
 $EditedData->totalAmount=$request->TotalAmount;
 $EditedData->issueDate=$request->IssueDate;
 $EditedData->deliveredDate=$request->DeliveredDate;
 $EditedData->status=$request->Status;
 $EditedData->idOrder=$request->IdOrder;
 $EditedData->idCustomer=$request->IdCustomer;

 $EditedData->save();
 return redirect('/viewPendingDel'); 


}

}
