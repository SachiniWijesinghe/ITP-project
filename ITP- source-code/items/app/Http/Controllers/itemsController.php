<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Items;
use Illuminate\Support\Facades\File;


class itemsController extends Controller
{
    public function store(Request $request) {
        //dd($request->all());
        $items=new Items;
        

        $this->validate($request, [
            'code'=>'required|min:4|max:6',
            'itemName'=>'required|min:4',
            'cAmount'=>'required|numeric|min:1',
            'realPrice'=>'required|numeric|min:1',
            'sellPrice'=>'required|numeric|min:1',
            'hotDiscount'=>'required|numeric|max:100',
            'description'=> 'required|min:4|max:255'
        ]);


        $items->code=$request->code;
        $items->name=$request->itemName;
        $items->cost_amount=$request->cAmount;
        $items->real_price=$request->realPrice;
        //$items->show_real=$request->realcheck;
        $items->selling_price=$request->sellPrice;
        $items->hot_discount=$request->hotDiscount;
        //$items->show_hot=$request->hotcheck;
        //$items->show_newarrivels=$request->newcheck;
        $items->description=$request->description;

        if ($request->hasFile('image1')){
            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file -> move('upload/items/', $filename);
            $items->image1 = $filename;

        }

        if ($request->hasFile('image2')){
            $file = $request->file('image2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file -> move('upload/items/', $filename);
            $items->image2 = $filename;

        }

        $items->save();
        $data=Items::all();

        return redirect()->back()->with('status','Item Added Successfully !');
    }

    public function deleteitem($id){
        $items=Items::find($id);

        $destination = 'upload/items/'.$items->image1;

            if (File :: exists($destination)){
                File :: delete($destination);
            }

        $destination = 'upload/items/'.$items->image2;

            if (File :: exists($destination)){
                File :: delete($destination);
            }
        


        $items->delete();
        return redirect()->back();
    }

    public function updateitem($id){
        $items=Items::find($id);

        return view('test-update')->with('itemdata', $items);
    }

    
    public function itemsupdate(Request $request){
        $id=$request->id;
        $code=$request->code;
        $itemName=$request->itemName;
        $cAmount=$request->cAmount;
        $realPrice=$request->realPrice;
        $sellPrice=$request->sellPrice;
        $hotDiscount=$request->hotDiscount;
        $description=$request->description;

        $items=Items::find($id);

        $items->code=$code;
        $items->name=$itemName;
        $items->cost_amount=$cAmount;
        $items->real_price=$realPrice; 
        $items->selling_price=$sellPrice;
        $items->hot_discount=$hotDiscount;
        $items->description=$description;
        if ($request->hasFile('image1')){

            $destination = 'upload/items/'.$items->image1;

            if (File :: exists($destination)){
                File :: delete($destination);
            }

            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file -> move('upload/items/', $filename);
            $items->image1 = $filename;

        }

        if ($request->hasFile('image2')){

            $destination = 'upload/items/'.$items->image2;

            if (File :: exists($destination)){
                File :: delete($destination);
            }

            $file = $request->file('image2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file -> move('upload/items/', $filename);
            $items->image2 = $filename;

        }

        $items->save();

        $item=Items::all();
        return view('viewitems')->with('items' , $item);
    }

    public function itemdetails($id){
        $items=Items::find($id);

        return view('itemdetailpage')->with('itemdata', $items);
    }
}
