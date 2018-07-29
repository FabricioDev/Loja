<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facedes\Redirect;
use App\Http\Requests\CategoryFormRequest;
use DB;

class CategoryController extends Controller
{
  public function __construct(){
    //
  }

  public function index(Request $request)
  {
    
      if($request)
      {
        $query=trim($request->get('searchText'));
        $categories=DB::table('categories')
              ->where('name','LIKE', '%'.$query.'%')
              ->where('condition', '=', '1')
              ->orderBy('id', 'desc')
              ->paginate(7);
              return view('estoque.categoria.index',[
                "categories"=>$categories,
                "searchText"=>$query
              ]);
      }
  }
  /*
  public function create()
  {
      return view("estoque.categoria.create");
  }
  public function store(CategoriaFormRequest $request)
  {
      $categoria = new Categoria;
      $categosria->nome=$request->get('nome');
      $categosria->descricao=$request->get('descricao');
      $categosria->condicao=1;
      $categoria->save();
      return Redirect::to('estoque/categoria');
  }
  public function show($id)
  {
      return view("estoque.categoria.show", ["categoria"=>Category::findOrFail($id)]);
  }
  public function edit($id)
  {
    return view("estoque.categoria.edit", [
      "categoria"=>Category::findOrFail($id)]);
  }
  public function update(CategoriaFormRequest $request, $id)
  {
      $categoria=Category::findOrFail($id);
      $categoria->nome=$request->get('nome');
      $categoria->descricao=$request->get('descricao');
      $categoria->update();
      return Redirect::to('estoque/categoria');
  }
  public function destroy($id)
  {
      $categoria=Category::findOrFail($id);
      $categoria->condicao='0';
      $categoria->update();
      return Redirect::to('estoque/categoria');
  }*/
}
