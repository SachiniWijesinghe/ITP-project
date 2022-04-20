<?php

namespace App\Models;

class cart
{
    public $items;
    public $totalQty = 0;
    public $totalPrice = 0;


    public function __construct($oldCart)
    {
        if($oldCart){
           $this->items = $oldCart->items;
           $this->totalQty = $oldCart->totalQty;
           $this->totalPrice = $oldCart->totalPrice;

        }
    }


    public function add($item, $id,$price){
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item,'item_id'=>$id,'cost'=>$price];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }

    public function minus($item, $id,$price){
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item,'item_id'=>$id,'cost'=>$price];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }


        if ($storedItem['qty']===1){
            $storedItem['qty']=1;
            $storedItem['price'] = $item->price;
        }else{
            $storedItem['qty']--;
            $storedItem['price'] = $item->price * $storedItem['qty'];
        }


        $this->items[$id] = $storedItem;
        $this->totalQty--;
        $this->totalPrice -= $item->price;
    }

}
