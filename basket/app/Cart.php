<?php

namespace App;

class Cart 
{
   public $items = null;
   public $totalQty = 0;
   public $totalPrice = 0;

   public function __construct($oldCart)
   {
   	 if ($oldCart) {
   	 	$this->items = $oldCart->items;
   	 	$this->totalQty = $oldCart->totalQty;
   	 	$this->totalPrice = $oldCart->totalPrice;
   	 }
   }

   public function add($item, $id)
   {
   	 $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item, 'imagePath' => $item->imagePath];

     if ($this->items ) {

         	if (array_key_exists($id, $this->items)) {
	   	     	 $storedItem = $this->items[$id];
	   	     }
         }
         $storedItem['qty']++;
         $storedItem['price'] = $item->price * $storedItem['qty'];
         $storedItem['imagePath'] = $item->imagePath;
         $this->items[$id] = $storedItem;
         $this->totalQty++;
         $this->totalPrice += $item->price;
    }

    public function delete($id) {

        if(!$this->items || !isset($this->items[$id])) {
            return false;  // maybe throw an exception here?
        }

        // keep those totals in sync...... 
        // todo: instead of having this info in variables and keeping them in sync with the real data of $this->items, create a method to calculate the totals when needed.
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -=  $this->items[$id]['price'] * $this->items[$id]['qty'];

        // and remove the item
        unset($this->items[$id]);
    }
}

