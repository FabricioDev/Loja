<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;
use Session;

class CarrinhoController extends Controller
{
    public function index()
    {
        
        $title = "Meu Carrinho - Plazza Pet";

        $carrinho = Session::get('carrinho');
        $produtos = $carrinho->getItems();
        

        return view('store.cart.index', compact('title', 'produtos'));
    }

    public function add(Request $request, $id)
    {

        $produto = Produto::find($id);
        if(!$produto)
            return redirect()->route('home');

        $carrinho = new Carrinho;
        $carrinho->add($produto);

        $request->session()->put('carrinho', $carrinho);

        return redirect()->route('cart');
        
    }

    public function decrement(Request $request, $id)
    {
        $produto = Produto::find($id);
        if(!$produto)
            return redirect()->route('home');

        $carrinho = new Carrinho;
        $carrinho->decrement($produto);

        $request->session()->put('carrinho', $carrinho);

        return redirect()->route('cart');
    }
}
