<?php

namespace App\Http\Controllers;

use App\Models\Sizes;
use Illuminate\Http\Request;

class sizeController extends Controller
{
    public function store(Request $request){
        $size = new Sizes;

        $size->size=$request->size;

        $size->save();
        $sizedata = Sizes::all();

        return redirect()->back()->with('size',$sizedata);
    }

    public function deletesize($id){
        $size = Sizes::find($id);

        $size->delete();
        return redirect()->back();

    }
}
