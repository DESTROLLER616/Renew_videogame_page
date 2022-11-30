<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Videogame;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function shop()
    {
        $products = DB::table('videogames')
        -> join('classifications', 'videogames.id_clasificacion', '=', 'classifications.id')
        -> join('regions', 'videogames.id_region', '=', 'regions.id')
        -> join('genders', 'videogames.id_genero', '=', 'genders.id')
        -> join('consoles', 'videogames.id_consola', '=', 'consoles.id')
        -> select('videogames.*', 'classifications.nombre_clasificacion', 'regions.nombre_region', 'genders.nombre_genero', 'consoles.nombre_consola') -> get();

        return view('shop') -> withTitle('Tienda de videojuegos') -> with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->with(['cartCollection' => $cartCollection]);;
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
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
                'slug' => $request->slug,
                'console' => $request -> nombre_consola
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }

}
