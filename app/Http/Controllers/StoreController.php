<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProdutoFormRequest;
use App\Http\Requests\CategoriaFormRequest;
use App\Models\Categoria;
use App\Models\Produto;

class StoreController extends Controller
{
    public function index()
    {
        $title = 'Home - Plazza Pet';

        $categorias = Categoria::orderBy('nome', 'ASC')->get();

        $produtos = Produto::all();

        //$products = Product::orderBy('id', 'DESC')->get();

        return view('store.home.index', compact('title', 'categorias', 'produtos'));
    }
}
