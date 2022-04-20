<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Items;


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

        $items->save();
        $data=Items::all();

        return redirect()->back();
    }

    public function deleteitem($id){
        $items=Items::find($id);
        $items->delete();
        return redirect()->back();
    }

    public function updateitem($id){
        $items=Items::find($id);

        return view('itemupdate')->with('itemdata', $items);
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

        $item=Items::find($id);

        $item->code=$code;
        $item->name=$itemName;
        $item->cost_amount=$cAmount;
        $item->real_price=$realPrice; 
        $item->selling_price=$sellPrice;
        $item->hot_discount=$hotDiscount;
        $item->description=$description;

        $item->save();
        $data=Items::all();
        return view('viewitems')->with('viewitems' , $data);
    }
}
