<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}
	public function add($item, $id){
		$cart = ['qty' => 0, 'price' => $item->unit_price, 'item' => $item];
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$cart = $this->items[$id];
			}
		}
		$cart['qty']++;
        $cart['price'] = $item->unit_price * $cart['qty'];
		$this->items[$id] = $cart;
		$this->totalQty++;
		$this->totalPrice += $item->unit_price;
	}
	//Increase One
	public function increaseByOne($id){
		$this->items[$id]['qty']++;
	    $this->items[$id]['price'] += $this->items[$id]['item']['price'];
	    $this->totalQty++;
	    $this->totalPrice += $this->items[$id]['item']['price'];
	}
	//One Delete
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//Multi Delete
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
}
