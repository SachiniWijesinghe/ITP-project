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

 //i did this usising query builder not models.and when issue this serched records we need to get these records in to form.then save.to get these
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

function searchOrderReport(Request $request){
    if(isset($_GET['date'])){
        $searchedvalue = $_GET['date'];

        $CountOrdersToday = order::where('date','LIKE','%'.$searchedvalue.'%')
                 ->count();
        $totalQuntity=order::where('date','LIKE','%'.$searchedvalue.'%')
        ->sum('totalQty');
         

        $totalAmount=order::where('date','LIKE','%'.$searchedvalue.'%')
        ->sum('totalAmount');
        
        //------------------getting previous 5 days-------------------------
        $givenDate =$searchedvalue ;
        $timestampForGivenDate = strtotime ( $givenDate );  //-----------------------------------------------------1
        $englishText = '-1 day';
        $requireDateFormat = "Y-m-d";

        $previousday1= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ;
        $CounntPre1 = order::where('date','LIKE','%'.$previousday1.'%')
                 ->count();
        $totalQtPre1=order::where('date','LIKE','%'.$previousday1.'%')
        ->sum('totalQty');
        $AmountPre1=order::where('date','LIKE','%'.$previousday1.'%')
        ->sum('totalAmount');
        
        $givenDat =$previousday1;      //------------------------------------------------------------------------2
        $timestampForGivenDate = strtotime ( $givenDat );
        $previousday2= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $CounntPre2 = order::where('date','LIKE','%'.$previousday2.'%')
                 ->count();
        $totalQtPre2=order::where('date','LIKE','%'.$previousday2.'%')
        ->sum('totalQty');
        $AmountPre2=order::where('date','LIKE','%'.$previousday2.'%')
        ->sum('totalAmount');

        $givenDa =$previousday2;  //-----------------------------------------------------------------------------3
        $timestampForGivenDate = strtotime ( $givenDa );
        $previousday3= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $CounntPre3 = order::where('date','LIKE','%'.$previousday3.'%')
        ->count();
        $totalQtPre3=order::where('date','LIKE','%'.$previousday3.'%')
        ->sum('totalQty');
        $AmountPre3=order::where('date','LIKE','%'.$previousday3.'%')
        ->sum('totalAmount');

        $givenD =$previousday3; //-------------------------------------------------------------------------------4
        $timestampForGivenDate = strtotime ( $givenD );
        $previousday4= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $CounntPre4 = order::where('date','LIKE','%'.$previousday4.'%')
        ->count();
        $totalQtPre4=order::where('date','LIKE','%'.$previousday4.'%')
        ->sum('totalQty');
        $AmountPre4=order::where('date','LIKE','%'.$previousday4.'%')
        ->sum('totalAmount');
       
        $given =$previousday4; //--------------------------------------------------------------------------------5
        $timestampForGivenDate = strtotime ( $given );
        $previousday5= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $CounntPre5 = order::where('date','LIKE','%'.$previousday5.'%')
                 ->count();
        $totalQtPre5=order::where('date','LIKE','%'.$previousday5.'%')
        ->sum('totalQty');
        $AmountPre5=order::where('date','LIKE','%'.$previousday5.'%')
        ->sum('totalAmount');
        
        $give =$previousday5;//----------------------------------------------------------------------------------6
        $timestampForGivenDate = strtotime ( $give );
        $previousday6= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $CounntPre6 = order::where('date','LIKE','%'.$previousday6.'%')
        ->count();
        $totalQtPre6=order::where('date','LIKE','%'.$previousday6.'%')
        ->sum('totalQty');
        $AmountPre6=order::where('date','LIKE','%'.$previousday6.'%')
        ->sum('totalAmount');
        $T0tal7daysAllOrders=$CountOrdersToday+$CounntPre1+$CounntPre2+$CounntPre3+$CounntPre4+$CounntPre5+$CounntPre6;
        $T0tal7daystotalQty=$totalQuntity+$totalQtPre1+$totalQtPre2+$totalQtPre3+$totalQtPre4+$totalQtPre5+$totalQtPre6;
        $T0tal7daysAmount=$totalAmount+$AmountPre1+$AmountPre2+$AmountPre3+$AmountPre4+$AmountPre5+$AmountPre6;


        //for the pid chart----------------------------------------------------------------
        


        /*   example 
        DB::select(DB::raw(" SELECT * , (SELECT min(date) FROM Subproducts 
        WHERE Products.id = Subproducts.productid AND date >= ' $minUpcomingDate. %' ) as minDate 
        FROM Products WHERE status = 1 
        AND upcoming = 1 
        ORDER BY minDate "));
        */

        /*   1st
         $result =DB::select(DB::raw("SELECT date,SUM(totalQty) as  'Qty'
         from orders
         WHERE date>='$searchedvalue' OR date>='$previousday1' OR date>='$previousday2' OR date>='$previousday3' OR date>='$previousday4' OR date>='$previousday5' OR date>='$previousday6'
         GROUP BY date"));
        */
            
         /*  2nd
         $data="";
         foreach($result as $val){
             $data="['".$val->date."',      ".$val->Qty."],";
         }
         $chartData=$data;

         */
        

        //---------------------------------------------------------------------------------

        return view('ReportAboutOrdersForADay',['searchedvalue'=>$searchedvalue,'values'=> $CountOrdersToday,'totalQTy'=>$totalQuntity,'totalAmount'=>$totalAmount,
        'YESTERDAYIS'=>$previousday1,'CounntPre1'=>$CounntPre1,'totalQtPre1'=>$totalQtPre1, 'AmountPre1'=> $AmountPre1,
        'previousday2'=>$previousday2,'CounntPre2'=>$CounntPre2,'totalQtPre2'=>$totalQtPre2, 'AmountPre2'=> $AmountPre2,
        'previousday3'=>$previousday3,'CounntPre3'=>$CounntPre3,'totalQtPre3'=>$totalQtPre3, 'AmountPre3'=> $AmountPre3,
        'previousday4'=>$previousday4,'CounntPre4'=>$CounntPre4,'totalQtPre4'=>$totalQtPre4, 'AmountPre4'=> $AmountPre4,
        'previousday5'=>$previousday5,'CounntPre5'=>$CounntPre5,'totalQtPre5'=>$totalQtPre5, 'AmountPre5'=> $AmountPre5,
        'previousday6'=>$previousday6 ,'CounntPre6'=>$CounntPre6,'totalQtPre6'=>$totalQtPre6, 'AmountPre6'=> $AmountPre6,
        'T0tal7daysAllOrders'=>$T0tal7daysAllOrders,'T0tal7daystotalQty'=>$T0tal7daystotalQty,'T0tal7daysAmount'=>  $T0tal7daysAmount  /*,compact('chartData')*/]);
        }
    else{
        return view('ReportAboutOrdersForADay');
           }

}



//--------------//for testing purpose
function Test(){
    echo 'hi';

    $date='2022-02-01';
    echo $date;
    echo  date('2022-02-01',strtotime("yesterday"));

    $givenDate = "2021-09-01";
$timestampForGivenDate = strtotime ( $givenDate );
$englishText = '-1 day';
$requireDateFormat = "Y-m-d";
echo date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ;
   
}

}


