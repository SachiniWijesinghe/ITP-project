<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
   public function generatePDF()
   {
       $data = [
           'title' => 'bbhjjhjh',
           'date' => date('m/d/y')
       ];
       $pdf = PDF::loadView('myPDF', $data);
       return $pdf->download('report.pdf');
   }
}
