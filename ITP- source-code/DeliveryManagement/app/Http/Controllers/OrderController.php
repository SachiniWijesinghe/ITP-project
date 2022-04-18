<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
   /* function searchOrder(Request $request){
       if($request->isMethod('post'))
       {
           $datee=$request->get('orderedDate');
           $datax=orders::where('date','LIKE','%'.$datee.'%')->get();

       }
       // return view('searchOrder',compact('datax'));  meka vedio eke tibba eka
        return view('searchOrder',['members'=>$dataX]);
    }
*/

 //i did this udising query builder not models.and when issue this serched records we need to get these records in to form.then save.to get these
//values i useed uery builder.the using model i insert them in to data base
function searchOrderX(Request $request){
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
}

