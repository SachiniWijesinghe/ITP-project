<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartControllerX extends Controller
{
    
   public function PieChrt(Request $request){
    if(isset($_GET['date'])){
      
        $searchedvalue = $_GET['date'];
        $totalQuntity=order::where('date','LIKE','%'.$searchedvalue.'%')
        ->sum('totalQty');
        

        $givenDate =$searchedvalue ;
        $timestampForGivenDate = strtotime ( $givenDate );  //-----------------------------------------------------1
        $englishText = '-1 day';
        $requireDateFormat = "Y-m-d";

        $previousday1= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ;
        $totalQtPre1=order::where('date','LIKE','%'.$previousday1.'%')
        ->sum('totalQty');


        $givenDat =$previousday1;      //------------------------------------------------------------------------2
        $timestampForGivenDate = strtotime ( $givenDat );
        $previousday2= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $totalQtPre2=order::where('date','LIKE','%'.$previousday2.'%')
        ->sum('totalQty');

        $givenDa =$previousday2;  //-----------------------------------------------------------------------------3
        $timestampForGivenDate = strtotime ( $givenDa );
        $previousday3= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $totalQtPre3=order::where('date','LIKE','%'.$previousday3.'%')
        ->sum('totalQty');


        $givenD =$previousday3; //-------------------------------------------------------------------------------4
        $timestampForGivenDate = strtotime ( $givenD );
        $previousday4= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $totalQtPre4=order::where('date','LIKE','%'.$previousday4.'%')
        ->sum('totalQty');

        $given =$previousday4; //--------------------------------------------------------------------------------5
        $timestampForGivenDate = strtotime ( $given );
        $previousday5= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $totalQtPre5=order::where('date','LIKE','%'.$previousday5.'%')
        ->sum('totalQty');

        $give =$previousday5;//----------------------------------------------------------------------------------6
        $timestampForGivenDate = strtotime ( $give );
        $previousday6= date($requireDateFormat,strtotime ( $englishText , $timestampForGivenDate )) ; 
        $totalQtPre6=order::where('date','LIKE','%'.$previousday6.'%')
        ->sum('totalQty');


        //1st
        $result =DB::select(DB::raw("SELECT date,SUM(totalQty) as  'Qty'
        from orders
        WHERE date ='$searchedvalue' OR date ='$previousday1' OR date ='$previousday2' OR date ='$previousday3' OR date ='$previousday4' OR date ='$previousday5' OR date ='$previousday6'
        GROUP BY date"));
       



       //2nd
        // $data="";
         //foreach($result as $val){
           //  $data="['".$val->date."',      ".$val->Qty."],";
         //}
         //$chartData=$data;
        

       return view('pieChrtX',compact('$chartData'));
     }
   }
}
