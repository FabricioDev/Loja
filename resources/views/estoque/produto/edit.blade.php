@extends('layouts.admin')
@section('conteudo')
<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Produto: {{ $produto->nome }}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
</div>

			{!!Form::model($produto, ['method'=>'PATCH', 'route'=>['produto.update', $produto->idproduto], 'files'=>'true'])!!}
			{{Form::token()}}

           <div class="row">
            	
            	<div class="col-lg-6 col-sm-6 col-xs-12">
	            	<div class="form-group">
	            	<label for="nome">Nome</label>
	            	<input type="text" name="nome" required value="{{$produto->nome}}" class="form-control" placeholder="Nome...">
	            	</div>
            	</div>

            	

            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            		<label>Categoria</label>
            		<select name="idcategoria" class="form-control">
	            		@foreach($categorias as $cat)
	            			@if($cat->idcategoria==$produto->idcategoria)
	            			<option value="{{$cat->idcategoria}}" selected>
	            			{{$cat->nome}}
	            			</option>
	            			@else
	            			<option value="{{$cat->idcategoria}}">
	            			{{$cat->nome}}
	            			</option>
	            			@endif
	            		@endforeach
            		</select>
            		</div>
            		
            	</div>

            		
            	
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="codigo">Código</label>
	            	<input type="text" name="codigo" required value="{{$produto->codigo}}" class="form-control" placeholder="Código do Produto...">
	            	</div>
            		
            	</div>
            		
            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		<div class="form-group">
	            	<label for="estoque">Estoque</label>
	            	<input type="text" name="estoque" required value="{{$produto->estoque}}" class="form-control" placeholder="Estoque...">
	            	</div>	
            		
            	</div>

            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		 <div class="form-group">
            	<label for="descricao">Descrição</label>
            	<input type="text" value="{{$produto->descricao}}" name="descricao" class="form-control" placeholder="Descrição...">
            		</div>
            		
            	</div>

                  <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label for="preco">Preço</label>
                        <input type="text" name="preco" required value="{{$produto->preco}}" class="form-control" placeholder="Preço...">
                        </div>      
                        
                  </div>

            	<div class="col-lg-6 col-sm-6 col-xs-12">
            		 <div class="form-group">
            	<label for="imagem1">Imagem 1</label>
            	<input type="file" name="imagem1" 
            	class="form-control">
	            	@if(($produto->imagem)!="")
	            		<img src="{{asset('imagens/produtos/'.$produto->imagem)}}" width="200px">
	            	@endif
            		</div>
            		
            	</div>

                  <div class="col-lg-6 col-sm-6 col-xs-12">
                         <div class="form-group">
                  <label for="imagem_sec">Imagem 2</label>
                  <input type="file" name="imagem_sec" 
                  class="form-control">
                        @if(($produto->imagem_sec)!="")
                              <img src="{{asset('imagens/produtos/'.$produto->imagem_sec)}}" width="200px">
                        @endif
                        </div>
                        
                  </div>
                  

            </div>

            
           
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Salvar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
	
@stop