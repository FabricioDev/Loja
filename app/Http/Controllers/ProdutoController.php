<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProdutoFormRequest;
use DB;

class ProdutoController extends Controller
{
    public function __construct(){
    	//
    }

    public function index(Request $request){

    	if($request){
    		$query=trim($request->get('searchText'));
    		$produtos=DB::table('produto as p')
    		->join('categoria as c', 'p.idcategoria', '=',
    			'c.idcategoria')
    		->select('p.idproduto', 'p.nome', 'p.codigo',
    		 'p.estoque', 'c.nome as categoria', 'p.descricao',
             'p.preco', 'p.imagem', 'p.imagem_sec', 'p.estado')
    		->where('p.nome', 'LIKE', '%'.$query.'%')
    		->where('estado', '=', 'Ativo')
    		->orderBy('idproduto', 'desc')
    		->paginate(7);
    		return view('estoque.produto.index', [
    			"produtos"=>$produtos, "searchText"=>$query
    			]);
    	}
    }

    public function create(){

    	$categorias=DB::table('categoria')
    	->where('condicao', '=', '1')
    	->get();
    	return view("estoque.produto.create", ["categorias"=>
    		$categorias]);
    }

    public function store(ProdutoFormRequest $request){
    	$produto = new Produto;
    	$produto->idcategoria=$request->get('idcategoria');
    	$produto->codigo=$request->get('codigo');
    	$produto->nome=$request->get('nome');
    	$produto->estoque=$request->get('estoque');
    	$produto->descricao=$request->get('descricao');
        $produto->preco=$request->get('preco');
    	$produto->estado='Ativo';

    	if(Input::hasFile('imagem')){
    		$file=Input::file('imagem');
    		$file->move(public_path().'/imagens/produtos/',
    			$file->getClientOriginalName());
    		$produto->imagem=$file->getClientOriginalName();
    	}

        if(Input::hasFile('imagem_sec')){
            $file=Input::file('imagem_sec');
            $file->move(public_path().'/imagens/produtos/',
                $file->getClientOriginalName());
            $produto->imagem_sec=$file->getClientOriginalName();
        }

    	$produto->save();
    	return Redirect::to('estoque/produto');
    }

    public function show($id){
    	return view("estoque.produto.show",
    		["produto"=>Produto::findOrFail($id)]);
    }

    public function edit($id){

    	$produto = Produto::findOrFail($id);
    	$categorias = DB::table('categoria')
    	->where('condicao', '=','1')->get();

    	return view("estoque.produto.edit",
    		["produto"=>$produto, "categorias"=>$categorias]);
    }

    public function update(ProdutoFormRequest $request, $id){
    	$produto=Produto::findOrFail($id);

    	$produto->idcategoria=$request->get('idcategoria');
    	$produto->codigo=$request->get('codigo');
    	$produto->nome=$request->get('nome');
        $produto->estoque=$request->get('estoque');
        $produto->descricao=$request->get('descricao');
        $produto->preco=$request->get('preco');


    	if(Input::hasFile('imagem')){
    		$file=Input::file('imagem');
    		$file->move(public_path().'/imagens/produtos/',
    			$file->getClientOriginalName());
    		$produto->imagem=$file->getClientOriginalName();
    	}

        if(Input::hasFile('imagem_sec')){
            $file=Input::file('imagem_sec');
            $file->move(public_path().'/imagens/produtos/',
                $file->getClientOriginalName());
            $produto->imagem_sec=$file->getClientOriginalName();
        }

    	$produto->update();
    	return Redirect::to('estoque/produto');
    }

    public function destroy($id){
    	$produto=Produto::findOrFail($id);
    	$produto->estado='Inativo';
    	$produto->update();
    	return Redirect::to('estoque/produto');
    }
}
