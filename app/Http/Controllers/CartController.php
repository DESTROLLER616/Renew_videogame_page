<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Videogame;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Videogame::all();
       dd($products);
        return view('products')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = Order::getContent();
        //dd($cartCollection);
        return view('cart')->with(['cartCollection' => $cartCollection]);;
    }
    public function remove(Request $request){
        Order::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Order::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Order::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }

}
