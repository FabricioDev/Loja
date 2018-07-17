<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StoreController extends Controller
{
    public function index()
    {
        $title = 'Home - Plazza Pet';

        //$products = Product::orderBy('id', 'DESC')->get();

        return view('store.home.index', compact('title', 'products'));
    }
}
