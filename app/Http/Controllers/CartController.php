<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function add(Product $product)
    {
        //dd($product);

        \Cart::session(auth()->id())->add(array(
            'id' =>$product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
        //$product=Product::find($productId);
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index',compact('cartItems'));
    }

    public function destroy($itemid)
    {
       \Cart::session(auth()->id())->remove($itemid);
        return back();
    }

    public function update($rowId)
    {
       \Cart::session(auth()->id())->update($rowId,[
           'quantity' => array(
            'relative' => false,
            'value' => request('quantity')
        ),
       ]);
        return back();
    }

    public function checkout()
    {
       return view('cart.checkout');
    }
}
