<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Carrinho extends Model
{
	private $items = [];

	public function __construct()
	{
		if( Session::has('carrinho') )
			{	
				$carrinho = Session::get('carrinho');
				$this->items = $carrinho->items;
			}
	}

    public function add(Produto $produto)
    {
    	if( isset($this->items[$produto->idproduto]) )
    	{
    		$this->items[$produto->idproduto] = [
            'item'  => $produto,
            'qtd'   => $this->items[$produto->idproduto]['qtd'] + 1,
        ];
    	}else
    	{
    		$this->items[$produto->idproduto] = [
            'item'  => $produto,
            'qtd'   => 1,
        ];
    	}
    	
    }

    public function decrement(Produto $produto)
    {
    	if( isset($this->items[$produto->idproduto]) )
    	{
    		if( $this->items[$produto->idproduto]['qtd'] == 1 ){
    			unset( $this->items[$produto->idproduto]);
    		}else{
    			$this->items[$produto->idproduto] = [
	            'item'  => $produto,
	            'qtd'   => $this->items[$produto->idproduto]['qtd'] - 1,
	        ];
    		}
    	}

    }

    public function getItems()
    {
        return $this->items;
    }
}
