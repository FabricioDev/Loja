<nav class="navbar navbar-default NavTop">
  <div class="container">
    <h4 class="BoasVindas">Bem-vindo a loja do seu Pet!</h4>
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
     <div class="menutopo collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
<div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-3">
      <a class="navbar-brand" href="{{route('home')}}">
        <img src="{{url('assets/images/logoplaza.png')}}" alt="Plazza Pet" class="logo">
      </a>
    </div>
    <div class="col-md-6 col-sm-8">
      <div class="input-group">
          <input type="text" class="form-control inputBuscaProduto" placeholder="O que você procura em nossa loja?">
          <button type="submit"><p>Buscar</p></button>
      </div>
    </div>

    <div class="col-md-3 col-sm-1 ">

   <div class="meucarrinho" id="bs-example-navbar-collapse-1">
      <ul class="">
        <li>
          <a href="{{route('cart')}}">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span class="display-none">Meu Carrinho</span>
            <span class="badge">0</span>
          </a>
        </li>
        <li class="dropdown display-none">
          <a href="#" class="dropdown-toggle display-none" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
    </div><!-- /.navbar-collapse-->
    </div>
  </div>
</div>

    <div class="menu navbar navbar-static-top header-logo-center-menu-below oxy-mega-menu text-caps" id="masthead">
       
        <div class="container">
            <div class="nav-container clearfix">
                <nav class="collapse navbar-collapse main-navbar">
                    <div class="menu-container">
                        <ul class="nav navbar-nav" id="menu-main">
                            <li class="menu-item dropdown active "> <a href="/shop-index.html">Home</a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li class="menu-item"> <a href="/shop-flexslider.html">Flexslider</a> </li>
                                    <li class="menu-item"> <a href="/shop-right-sidebar.html">Right Sidebar</a> </li>
                                    <li class="menu-item"> <a href="/shop-left-sidebar.html">Left Sidebar</a> </li>
                                    <li class="menu-item"> <a href="/shop-fullwidth.html">Full Width</a> </li>
                                </ul>
                            </li>
                            <li class="menu-item dropdown  menu-item-object-oxy_mega_menu"> <a href="/shop-womens-category.html">RAÇÕES</a>
                                <ul class="dropdown-menu dropdown-menu-left row" style=&#39;background-image: url(assets/images/shop/womens_menu.jpg); background-size: cover;&#39;>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Shop Womens</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"> <a href="/shop-womens-category.html">Skirts
                                                    
                                                        <span class="label menu-label label-danger">On Sale!</span>
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-womens-category.html">Jeans
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-womens-category.html">Tops
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-womens-category.html">Bags
                                                    
                                                </a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Features</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"> <a href="/shop-womens-category.html">New In
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-womens-category.html">Sale
                                                    
                                                </a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Best Sellers</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"> <a href="/shop-womens-category.html">Top 10
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-womens-category.html">Recommended
                                                    
                                                </a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item dropdown  menu-item-object-oxy_mega_menu"> <a href="/shop-mens-category.html">REMÉDIOS</a>
                                <ul class="dropdown-menu dropdown-menu-left row" style=&#39;background-image: url(assets/images/shop/mans_menu.jpg); background-size: cover;&#39;>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Shop Mens</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"> <a href="/shop-mens-category.html">Hoodies
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-mens-category.html">Shirts
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-mens-category.html">Tops
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-mens-category.html">Jackets
                                                    
                                                        <span class="label menu-label label-success">Sold Out</span>
                                                    
                                                </a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Features</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"> <a href="/shop-mens-category.html">Premium
                                                    
                                                        <span class="label menu-label label-success">20% Off</span>
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-mens-category.html">Casual
                                                    
                                                </a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Best Sellers</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"> <a href="/shop-mens-category.html">Top 5
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-mens-category.html">Selected Homme
                                                    
                                                </a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item dropdown  menu-item-object-oxy_mega_menu"> <a href="/shop-kids-category.html">PET SHOP</a>
                                <ul class="dropdown-menu dropdown-menu-left row" style=&#39;background-image: url(assets/images/shop/kids_menu.jpg); background-size: cover;&#39;>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Shop Kids</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"> <a href="/shop-kids-category.html">Young girls
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-kids-category.html">Young Boys
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-kids-category.html">Jeans
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-kids-category.html">Skirts
                                                    
                                                </a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Features</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"> <a href="/shop-kids-category.html">Basics
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-kids-category.html">School
                                                    
                                                        <span class="label menu-label label-primary">New!</span>
                                                    
                                                </a> </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3"> <strong>Best Sellers</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"> <a href="/shop-kids-category.html">On Sale
                                                    
                                                </a> </li>
                                            <li class="menu-item"> <a href="/shop-kids-category.html">Fashion
                                                    
                                                </a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item dropdown  "> <a class="dropdown-toggle" data-toggle="dropdown" href="/#">UTENSÍLIOS</a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li class="menu-item"> <a href="/shop-mens-category.html">Simple Category</a> </li>
                                    <li class="menu-item"> <a href="/shop-video-category.html">Video Category</a> </li>
                                    <li class="menu-item"> <a href="/shop-simple-product.html">Single Product</a> </li>
                                    <li class="menu-item"> <a href="/shop-cart.html">Cart</a> </li>
                                    <li class="menu-item"> <a href="/shop-checkout.html">Checkout</a> </li>
                                </ul>
                            </li>
                            <li class="menu-item dropdown  "> <a href="#">LIMPEZA</a> </li>
                        </ul>
                    </div>
                    
                </nav>
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
   
    <!--
  </div><!-- /.container-fluid --><!--
</nav>-->
