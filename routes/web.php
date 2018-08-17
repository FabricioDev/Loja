<?php


$this->get('/', 'StoreController@index')->name('home');

$this->get('adicionar-carrinho/{id}', 'CarrinhoController@add')->name('add.cart');
$this->get('carrinho', 'CarrinhoController@index')->name('cart');

$this->get('meu-perfil', 'UserController@profile')->name('user.profile');




$this->resource('estoque/categoria', 'CategoriaController');
$this->resource('estoque/produto', 'ProdutoController');

// $this->resource('estoque/categoria', 'CategoryController');
