<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class productController extends Controller
{
    public function getIndex(){

        $product = product::all();
        return view('shop.index', ['product' => $product]);
    }



    public function getAddToCart(request $request, $id){
        $products=DB::select("select * from product where id='$id'");
        $oldCart=Session::has('cart') ? Session::get('cart'): null;
        $cart=new Cart($oldCart);
        foreach ($products as $item){
            $cart->add($item,$item->id);
        }
        $request->session()->put('cart',$cart);

        $product = product::all();
        return view('shop.index', ['product' => $product]);

    }
}
