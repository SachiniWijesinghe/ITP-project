<?php

namespace App\Http\Controllers;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
   //Retrieve data
    public function index()
    {
        $suggestions = Suggestion::all();
        return view ('contacts.suggestion')->with('suggestions', $suggestions);
    }
    
    public function create(Request $request)
    {
     
        return view('contacts.show');
    }

//insert data
    public function store(Request $request)
    {
     
         $requestData = $request->all();
         Suggestion::create($requestData);
        return redirect('contact/91')->with('status', '***Sent Your Suggestion & Comment!***');
    }

//delete suggestion
    public function destroy($id)
    {
        Suggestion::destroy($id);
        return redirect('suggestion')->with('statusD', ' Deleted Successfully!');
    }
}
