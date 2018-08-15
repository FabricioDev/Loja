<?php

$this->get('/', 'StoreController@index')->name('home');

$this->get('adicionar-carrinho/{id}', 'CartController@add')->name('add.cart');
$this->get('meu-perfil', 'UserController@profile')->name('user.profile');

$this->get('carrinho', 'CartController@index')->name('cart');


$this->resource('estoque/categoria', 'CategoriaController');
$this->resource('estoque/produto', 'ProdutoController');

// $this->resource('estoque/categoria', 'CategoryController');
