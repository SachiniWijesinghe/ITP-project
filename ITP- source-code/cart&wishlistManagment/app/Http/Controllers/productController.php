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

    public function getAddToWishlist($id){
        $username="chathini@gmail.com";

        if (DB::table('wishlist')->where('Customer_idCustomer',$username)->exists()) {
            if (DB::table('wishlist')->where('Item_idItem',$id)->exists()) {

            }else{
                DB::insert('insert into wishlist (Customer_idCustomer,Item_idItem) values(?,?)',[$username,$id]);
            }
        }else{
            DB::insert('insert into wishlist (Customer_idCustomer,Item_idItem) values(?,?)',[$username,$id]);
        }
        $products=DB::select("select * from wishlist where Customer_idCustomer='$username'");
        return view('shop.wishlist', ['product' => $products]);
    }

    public function removeFromWishlist($id){
        $username="chathini@gmail.com";
        DB::delete('delete from wishlist where Item_idItem = ? and Customer_idCustomer=?', [$id,$username]);
        $products=DB::select("select * from wishlist where Customer_idCustomer='$username'");
        return view('shop.wishlist', ['product' => $products]);
    }
}
