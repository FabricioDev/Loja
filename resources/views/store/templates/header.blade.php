<nav class="navbar navbar-default NavTop">
  <h3 class="BoasVindas">Seja Bem vindo a loja do seu Pet!</h3>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav pull-right">
         <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
         <li>
           <a class="nav-link" href="#">Minha conta</a>
         </li>
         <li>
           <a class="nav-link" href="#">Termos</a>
         </li>
         <li>
           <a class="nav-link" href="#">FAQ</a>
         </li>
         <li>
           <a class="nav-link" href="#">Contato</a>
         </li>
       </ul>
     </div>


     <!--

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Menu</span>
  </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col">
        Bem vindo a loja do seu Pet!
      </div>
    <ul class="navbar-nav mr-auto pull-right">

      <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>-->
</nav>
<div class="row">
  <div class="container">
    <div class="col">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{url('assets/images/logoplaza.png')}}" style="width:25%; margin-top:-5.5px;" alt="Plazza Pet" class="logo">
      </a>
    </div>
    <div class="col-6">
      <div class="input-group">
          <input type="text" class="form-control inputBuscaProduto" placeholder="O que você procura em nossa loja?">
      </div>
    </div>
  </div>
</div>



<!--
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
  <!--  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  <!--  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{route('cart')}}">
            Meu Carrinho
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span class="badge">0</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Fabrício Damasceno<span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{route('user.profile')}}">Perfil</a></li>
            <li><a href="#">Alterar Senha</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    <!--
  </div><!-- /.container-fluid --><!--
</nav>-->
