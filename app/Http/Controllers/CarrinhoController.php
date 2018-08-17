<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Carrinho;
use Session;

class CarrinhoController extends Controller
{
    public function index()
    {
        
        $title = "Meu Carrinho - Plazza Pet";

        /*
        $cart = Session::get('cart');
        dd($cart->getItems());
        */

        return view('store.cart.index', compact('title'));
    }

    public function add($id)
    {

        return "Adicionando o produto {$id} no carrinho";
        /*
        $product = Product::find($id);

        if(!$product)
            return redirect()->route('home');

        $cart = new Cart;
        $cart->add($product);

        $request->session()->put('cart', $cart);

        return redirect()->route('cart');

        */
    }
}
