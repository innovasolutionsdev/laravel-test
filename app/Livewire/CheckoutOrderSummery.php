<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CheckoutOrderSummery extends Component
{
    public function mount()
    {
        $this->cartItems = Cart::content()->map(function($item) {


            return [
                'rowId' => $item->rowId,
                'id' => $item->id,
                'name' => $item->name,
                'qty' => $item->qty,
                'price' => $item->price,
                'image' => $item->options->image,
                'total' => $item->price * $item->qty,
                'stock' => $item->options->stock
            ];

        })->toArray();
    }

    protected $listeners = ['cart_updated' => 'updateCart'];

    public function updateCart()
    {
        $this->mount();
        $this->render();
    }
    public function render()
    {
        return view('livewire.checkout-order-summery');
    }
}
