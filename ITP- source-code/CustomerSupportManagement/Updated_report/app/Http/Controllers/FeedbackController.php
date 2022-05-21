<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use PDF;

class FeedbackController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search !=""){
            $feedbacks = Feedback::where('Name', 'LIKE', "%$search%")->orwhere('Email', 'LIKE', "%$search%")->get();

        }else{
            $feedbacks = Feedback::all();
        }

        $data = compact('feedbacks', 'search');
        return view ('feedbacks.index')->with($data);
    }
    
    
    public function create()
    {
        return view('feedbacks.create');
    }



    public function store(Request $request)
    {
     
         $input = $request->all();
         Feedback::create($input);
        return redirect('feedback');
    }


    public function destroy($id)
    {
        Feedback::destroy($id);
        return redirect('feedback')->with('status', ' Deleted Successfully!');
    }

    public function exportpdf()
    {
        $data = Feedback::all();

        view()->share('data', $data);
        $pdf = FacadePdf::loadview('feedback-report');
        return $pdf->download('feedback Report.pdf');
    }


}
