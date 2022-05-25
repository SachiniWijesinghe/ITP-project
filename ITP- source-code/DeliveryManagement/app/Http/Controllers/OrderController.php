<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{


 //i did this ussing query builder.and when issue this serched records we need to get these records in to form.then save.to get these



 function searchOrderX(Request $request){
    if(isset($_GET['QorderedDate'])){
       $searchText = $_GET['QorderedDate'];
       $data =DB::table('orderss')->where('date','LIKE','%'.$searchText.'%')->paginate(100);
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

        /*$CountOrdersToday = order::where('date','LIKE','%'.$searchedvalue.'%')->count();
        $totalQuntity=order::where('date','LIKE','%'.$searchedvalue.'%')->sum('totalQty');
        $totalAmount=order::where('date','LIKE','%'.$searchedvalue.'%')->sum('totalAmount');
        */
        
        $CountOrdersToday =DB::table('orderss')->where('date','LIKE','%'.$searchedvalue.'%')->count();
        $totalQuntity =DB::table('orderss')->where('date','LIKE','%'.$searchedvalue.'%')->sum('totalQty');
        $totalAmount= DB::table('orderss')->where('date','LIKE','%'.$searchedvalue.'%')->sum('total');



        //------------------getting previous 5 days----------------------------------------------------------------
        $givenDate =$searchedvalue ;
        $timestampForGivenDate = strtotime ( $givenDate );  //-----------------------------------------------------1
        $englishText = '-1 day';
        $requireDateFormat = "Y-m-d";

        $previousday1= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ;
       
       
       /* $CounntPre1 = order::where('date','LIKE','%'.$previousday1.'%')->count();
        $totalQtPre1=order::where('date','LIKE','%'.$previousday1.'%')->sum('totalQty');
        $AmountPre1=order::where('date','LIKE','%'.$previousday1.'%')->sum('totalAmount');
        */
        $CounntPre1 =DB::table('orderss')->where('date','LIKE','%'.$previousday1.'%')->count();
        $totalQtPre1 =DB::table('orderss')->where('date','LIKE','%'.$previousday1.'%')->sum('totalQty');
        $AmountPre1= DB::table('orderss')->where('date','LIKE','%'.$previousday1.'%')->sum('total');






        $givenDat =$previousday1;      //------------------------------------------------------------------------2
        $timestampForGivenDate = strtotime ( $givenDat );
        $previousday2= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        
        /*$CounntPre2 = order::where('date','LIKE','%'.$previousday2.'%')->count();
        $totalQtPre2=order::where('date','LIKE','%'.$previousday2.'%')->sum('totalQty');
        $AmountPre2=order::where('date','LIKE','%'.$previousday2.'%')->sum('totalAmount');
         */

        $CounntPre2 =DB::table('orderss')->where('date','LIKE','%'.$previousday2.'%')->count();
        $totalQtPre2 =DB::table('orderss')->where('date','LIKE','%'.$previousday2.'%')->sum('totalQty');
        $AmountPre2= DB::table('orderss')->where('date','LIKE','%'.$previousday2.'%')->sum('total');









        $givenDa =$previousday2;  //-----------------------------------------------------------------------------3
        $timestampForGivenDate = strtotime ( $givenDa );
        $previousday3= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        
        
        /*$CounntPre3 = order::where('date','LIKE','%'.$previousday3.'%')->count();
        $totalQtPre3=order::where('date','LIKE','%'.$previousday3.'%')->sum('totalQty');
        $AmountPre3=order::where('date','LIKE','%'.$previousday3.'%') ->sum('totalAmount');
        */

        $CounntPre3 =DB::table('orderss')->where('date','LIKE','%'.$previousday3.'%')->count();
        $totalQtPre3 =DB::table('orderss')->where('date','LIKE','%'.$previousday3.'%')->sum('totalQty');
        $AmountPre3= DB::table('orderss')->where('date','LIKE','%'.$previousday3.'%')->sum('total');




        $givenD =$previousday3; //-------------------------------------------------------------------------------4
        $timestampForGivenDate = strtotime ( $givenD );
        
        $previousday4= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        /*$CounntPre4 = order::where('date','LIKE','%'.$previousday4.'%')->count();
        $totalQtPre4=order::where('date','LIKE','%'.$previousday4.'%')->sum('totalQty');
        $AmountPre4=order::where('date','LIKE','%'.$previousday4.'%')->sum('totalAmount');
       */

        $CounntPre4 =DB::table('orderss')->where('date','LIKE','%'.$previousday4.'%')->count();
        $totalQtPre4 =DB::table('orderss')->where('date','LIKE','%'.$previousday4.'%')->sum('totalQty');
        $AmountPre4= DB::table('orderss')->where('date','LIKE','%'.$previousday4.'%')->sum('total');







        $given =$previousday4; //--------------------------------------------------------------------------------5
        $timestampForGivenDate = strtotime ( $given );
        $previousday5= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        
        
        /*$CounntPre5 = order::where('date','LIKE','%'.$previousday5.'%')->count();
        $totalQtPre5=order::where('date','LIKE','%'.$previousday5.'%')->sum('totalQty');
        $AmountPre5=order::where('date','LIKE','%'.$previousday5.'%')->sum('totalAmount');
        */

        $CounntPre5 =DB::table('orderss')->where('date','LIKE','%'.$previousday5.'%')->count();
        $totalQtPre5 =DB::table('orderss')->where('date','LIKE','%'.$previousday5.'%')->sum('totalQty');
        $AmountPre5= DB::table('orderss')->where('date','LIKE','%'.$previousday5.'%')->sum('total');


        


        $give =$previousday5;//----------------------------------------------------------------------------------6
        $timestampForGivenDate = strtotime ( $give );
        $previousday6= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 


       /* $CounntPre6 = order::where('date','LIKE','%'.$previousday6.'%')->count();
        $totalQtPre6=order::where('date','LIKE','%'.$previousday6.'%')->sum('totalQty');
        $AmountPre6=order::where('date','LIKE','%'.$previousday6.'%')->sum('totalAmount');
        */


        $CounntPre6 =DB::table('orderss')->where('date','LIKE','%'.$previousday6.'%')->count();
        $totalQtPre6 =DB::table('orderss')->where('date','LIKE','%'.$previousday6.'%')->sum('totalQty');
        $AmountPre6= DB::table('orderss')->where('date','LIKE','%'.$previousday6.'%')->sum('total');






        $T0tal7daysAllOrders=$CountOrdersToday+$CounntPre1+$CounntPre2+$CounntPre3+$CounntPre4+$CounntPre5+$CounntPre6;
        $T0tal7daystotalQty=$totalQuntity+$totalQtPre1+$totalQtPre2+$totalQtPre3+$totalQtPre4+$totalQtPre5+$totalQtPre6;
        $T0tal7daysAmount=$totalAmount+$AmountPre1+$AmountPre2+$AmountPre3+$AmountPre4+$AmountPre5+$AmountPre6;


        

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


