<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    
    public function index()
    {
        $feedbacks = Feedback::all();
        return view ('feedbacks.index')->with('feedbacks', $feedbacks);
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

   
    public function show($id)
    {
      
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Feedback::destroy($id);
        return redirect('feedback')->with('status', ' Deleted Successfully!');
    }
}
