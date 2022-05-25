<?php

namespace App\Http\Controllers;

use App\Models\Colors;
use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Sizes;
use Illuminate\Support\Facades\DB;
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
        $items->selling_price=$request->sellPrice;
        $items->hot_discount=$request->hotDiscount;
        $items->description=$request->description;
        $items->size=$request->size;
        $items->color=$request->color;
        $items->quntity=$request->quntity;

        if ($request->hasFile('image1')){
            $file = $request->file('image1');
            $iname = $file->getClientOriginalName();
            $extention = $file->getClientOriginalExtension();
            $filename = $iname.time().'.'.$extention;
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
        $size=Sizes::all();
        $color=Colors::all();
        return view('item-update')->with('itemdata', $items)->with('size', $size)->with('color', $color);
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
        $size=$request->size;
        $color=$request->color;
        $quntity=$request->quntity;

        $items=Items::find($id);

        $items->code=$code;
        $items->name=$itemName;
        $items->cost_amount=$cAmount;
        $items->real_price=$realPrice; 
        $items->selling_price=$sellPrice;
        $items->hot_discount=$hotDiscount;
        $items->description=$description;
        $items->size=$size;
        $items->color=$color;
        $items->quntity=$quntity;

        if ($request->hasFile('image1')){

            $destination = 'upload/items/'.$items->image1;

            if (File :: exists($destination)){
                File :: delete($destination);
            }

            $file = $request->file('image1');
            $extention = $file->getClientOriginalExtension();
            $iname = $file->getClientOriginalName();
            $filename = $iname.time().'.'.$extention;
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

    public function search(Request $request){

       //$date=$request->date;
        $date = $_GET['date'];
        //$data = DB::table('items')->where('created_at','LIKE','%'.$date.'%');
        $data = DB::select("SELECT * FROM items WHERE updated_at BETWEEN '$date 00:00:00' AND '$date 23:59:59'");
        return view('viewitems',['items'=>$data]);

    }
}
