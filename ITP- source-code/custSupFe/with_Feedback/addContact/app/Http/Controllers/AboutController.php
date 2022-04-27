<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
 
    public function index()
    {
        $abouts = About::all();
        return view ('abouts.index')->with('about', $abouts);
    }

   
    public function create()
    {
        return view('abouts.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
             
            'Name' => 'required|max:20|string',
            'Email' => 'required',
            'Photo' => 'required'
        ]);

         $requestData = $request->all();
         $fileName = time().$request->file('Photo')->getClientOriginalName();
         $path = $request->file('Photo')->storeAs('images', $fileName, 'public');
         $requestData["Photo"] = '/storage/'.$path;
         About::create($requestData);
         return redirect('about')->with('flash_message', 'About Addedd!');  
    }

    
    public function show($id)
    {
        $about = About::find($id);
        return view('abouts.show')->with('abouts', $about);
    }

   
    public function edit($id)
    {
        $about = About::find($id);
        return view('abouts.edit')->with('abouts', $about);
    }

 
    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $input = $request->all();
        $about->update($input);
        return redirect('about')->with('flash_message', 'Contact Updated!');  
    }

  
    public function destroy($id)
    {
        About::destroy($id);
        return redirect('about')->with('message', 'Data Deleted Successfully!');
    }
}
