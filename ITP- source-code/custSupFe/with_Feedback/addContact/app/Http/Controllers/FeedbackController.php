<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedback;
class FeedbackController extends Controller
{

    public function index()
    {
        $Feedbacks = Feedback::all();
        return view ('Feedbacks.index')->with('Feedbacks', $Feedbacks);
    }

  
    public function create()
    {
        return view('Feedbacks.create');
    }

   
    public function store(Request $request)
    {
       
      
         $input = $request->all();
         Feedback::create($input);
        return redirect('Feedbacks')->with('flash_message', 'Feedback Addedd!');  
    }

  
    public function show($id)
    {
        //
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
  
    }
}
