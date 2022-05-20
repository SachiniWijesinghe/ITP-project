<?php

namespace App\Http\Controllers;
use App\Models\Feedback;

use Illuminate\Http\Request;


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
