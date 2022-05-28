<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\About;
//use League\Flysystem\File;
use Illuminate\Support\Facades\File;
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

    //insert data
    public function store(Request $request)
    {
        $request->validate([
             //validation
            'Name' => 'required|max:20|string',
            'Email' => 'required|email|unique:users,email',
            'Photo' => 'required'
        ]);

         $requestData = $request->all();
         $fileName = time().$request->file('Photo')->getClientOriginalName();
         $path = $request->file('Photo')->storeAs('images', $fileName, 'public');
         $requestData["Photo"] = '/storage/'.$path;
         About::create($requestData);
         return redirect('about')->with('status', ' Added Successfully!');
    }

    //retrieve about details
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

 //update about details
    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about ->Name = $request->input('Name');
        $about ->Email = $request->input('Email');
        
     $about->update();
     return redirect('about')->with('statusU', ' Updated Successfully!');//alert messege

    }

   // delete about details
    public function destroy($id)
    {
        About::destroy($id);
        return redirect('about')->with('statusD', ' Deleted Successfully!');
    }
}
