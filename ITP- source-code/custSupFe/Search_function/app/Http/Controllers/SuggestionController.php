<?php

namespace App\Http\Controllers;
use App\Models\Suggestion;
use App\Models\Contact;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function index()
    {
      return view('contacts.show');
    }

    
   function addS(Request $request){

    return $request->input();

   }
}
