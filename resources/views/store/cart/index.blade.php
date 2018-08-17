@extends('store.templates.master')

@section('content')

<h1 class="title">Meu Carrinho de Compras:</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Item</th>
            <th>Preço</th>
            <th>Qtd.</th>
            <th>Sub. Total</th>
        </tr>
    </thead>
    <tbody>
        @forelse($produtos as $produto)
        
        <tr>
            <td>
                <div class="">
                    <img data-src="holder.js/80x80?random=yes&text=Aqui vai a imagem do produto" alt="" class="product-item-img-cart">
                    <p class="cart-name-item">{{ $produto['item']->nome }}</p>
                </div>
            </td>
            <td>R$ 30,00</td>
            <td>
                <a href="#" class="item-add-remove">-</a>
              2
                <a href="#" class="item-add-remove">+</a>
            </td>
            <td>R$ 60,00</td>
        </tr>
        @empty
        <tr>
            <td colspan="20">Carrinho Vazio!</td>
        </tr>
        @endforelse
    </tbody>
</table>

<div class="total-cart">
      <p><strong>Total: </strong> R$ 600,00</p
</div>

<div class="cart-finish">
      <a href="" class="btn btn-finish">Finalizar Compras</a>
</div>


@endsection
