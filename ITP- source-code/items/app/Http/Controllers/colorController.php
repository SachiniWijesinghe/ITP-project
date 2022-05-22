<?php

namespace App\Http\Controllers;

use App\Models\Colors;
use Illuminate\Http\Request;

class colorController extends Controller
{
    public function store(Request $request){
        $color = new Colors;

        $color->name=$request->name;
        $color->code=$request->code;

        $color->save();
        $colordata = Colors::all();

        return redirect()->back()->with('color',$colordata);
    }

    
    public function deletecolor($id){
        $color = Colors::find($id);

        $color->delete();
        return redirect()->back();

    }
}
