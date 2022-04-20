<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class productController extends Controller
{
    public function getIndex(request $request){
//        $request->session()->forget('cart');
//        session()->flush();
        $product = product::all();
        return view('shop.index', ['product' => $product]);
    }



    public function getAddToCart(request $request, $id){
        $products=DB::select("select * from product where id='$id'");
        $oldCart=Session::has('cart') ? Session::get('cart'): null;
        $cart=new Cart($oldCart);
        foreach ($products as $item){
            $cart->add($item,$item->id,$item->price);
        }
        $request->session()->put('cart',$cart);
//dd($cart->items);
        $tot_amount=$cart->totalPrice;
        return view('shop.cart', ['product' => $cart->items,'Tot_amount'=>$tot_amount]);

    }

    public function removeFromCart(request $request, $id){
        $products=DB::select("select * from product where id='$id'");
        $oldCart=Session::has('cart') ? Session::get('cart'): null;
        $cart=new Cart($oldCart);
        foreach ($products as $item){
            $cart->minus($item,$item->id,$item->price);
        }
        $request->session()->put('cart',$cart);
//dd($cart->items);
        $tot_amount=$cart->totalPrice;
        return view('shop.cart', ['product' => $cart->items,'Tot_amount'=>$tot_amount]);

    }
}
