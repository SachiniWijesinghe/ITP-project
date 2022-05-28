<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        $contacts = Contact::all();
        return view ('contacts.index')->with('contacts', $contacts);
    }

  
    public function create()
    {
        return view('contacts.create');
    }

   //insert details
    public function store(Request $request)
    {
       //validation
        $request->validate([
             
            'Title' => 'required|max:50|string',
            'Address' => 'required',
            'Telephone' => 'required|min:10|max:10',
            'Email' => 'required|email|unique:users,email'

        ]);

         $input = $request->all();
        Contact::create($input);
        return redirect('contact')->with('status', 'Contact Addedd Successfully!!');  
    }

   //retrive contact details
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show')->with('contacts', $contact);
    }

   
    public function edit($id)
    {
        
        
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contacts', $contact);
    }

 //update contact details
    public function update(Request $request, $id)
    {
      
    
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('statusU', 'Contact Updated Successfully!!');  
    }

  //delete contact details
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('statusD', ' Deleted Successfully!');
    }
}
