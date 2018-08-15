@extends('store.templates.master')

@section('content')

<div id="content" role="main">
  <article>
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="figure element-top-30 element-bottom-20 image-effect-scroll-right os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
              <a class="figure-image" href="#" target="_self">
                <img alt="woman-sales" src="holder.js/846x500?random=yes&text=Produto em Destaque 1">
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="figure element-top-30 element-bottom-0 image-effect-scroll-left os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
              <a class="figure-image" href="#" target="_self">
                <img alt="kids-sales" src="holder.js/800x800?random=yes&text=Produto em Destaque 2">
              </a>
            </div>
            <div class="figure element-top-30 element-bottom-20 image-effect-scroll-left os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.4s">
              <a class="figure-image" href="#" target="_self">
                <img alt="mans-sales" src="holder.js/800x800?random=yes&text=Produto em Destaque 3">
              </a>
            </div>
          </div>
        </div><!-- Fim Row -->
      </div><!-- Fim Container -->
    </section><!-- Fim section -->
    <section class="section">
      <div class="container container-vertical-middle">
        <div class="row vertical-middle">
          <div class="col-md-3">
            <h2 class="text-left element-top-20 element-bottom-20 text-normal os-animation normal default" data-os-animation="fadeIn" data-os-animation-delay="0s">NOSSAS OFERTAS</h2>
          </div>
          <div class="col-md-9">
            <hr class="element-top-0 element-bottom-0 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
          </div>
        </div>
      </div>
    </section>
    <section class="section">
        <div class="row">
          <div class="col-md-12">
            <div class="divider-wrapper">
              <div class="visible-xs element-height-30"></div>
              <div class="visible-sm element-height-30"></div>
              <div class="visible-md element-height-30"></div>
              <div class="visible-lg element-height-30"></div>
            </div>
            <div class="columns-4">
              <div class="row">
                <ul class="products"> 
                   @for( $i = 0; $i < 4; $i++ )                
                  <li class="product col-md-3">
                    <a href="#" class="btn btn-buy">
                      <span class="onsale">- 30%</span>
                      <div class="product-image">
                        <div class="product-image-front">
                          <img alt="skirt4-1" height="893" data-src="holder.js/800x800?random=yes&text=Aqui vai a imagem do produto" width="700">
                        </div>
                        <div class="product-image-back">
                          <img alt="skirt4-1" data-src="holder.js/800x800?random=yes&text=Essa é uma outra imagem do Produto">
                        </div>
                        <div class="product-image-overlay">
                          <h4>Produto <?=rand(1, 10);?></h4>
                        </div>
                      </div>
                    </a>
                  </li>
                  @endfor
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="figure element-top-30 element-bottom-30 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
              <a class="figure-image" href="#" target="_self">
                <img alt="womans-full" src="holder.js/1140x249?random=yes&text=Foto Banner Promoção">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="container container-vertical-middle">
        <div class="row vertical-middle">
          <div class="col-md-3">
            <h2 class="text-left element-top-20 element-bottom-20 text-normal os-animation normal" data-os-animation="fadeIn" data-os-animation-delay="0s">NOSSOS PRODUTOS</h2>
          </div>
          <div class="col-md-9">
            <hr class="element-top-0 element-bottom-0 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s"> </div>
          </div>
      </div>
    </section>
    <section class="section">
                    <div class="row">
        <div class="container">
                        <div class="col-md-12">
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-30"></div>
                                <div class="visible-sm element-height-30"></div>
                                <div class="visible-md element-height-30"></div>
                                <div class="visible-lg element-height-30"></div>
                            </div>
                            <div class="woocommerce columns-5">
                                <div class="row">
                                    <ul class="products">
                                        @for( $i = 0; $i < 5; $i++ )
                                        <li class="product col-md-2-4"> 
                                          <a href="#">
                                            <span class="onsale">- <?=rand(1, 5);?>0%</span>
                                          </a>

                                        <div class="product-image">
                                            <div class="product-image-front">
                                                <img alt="skirt1-1" height="893" data-src="holder.js/800x800?random=yes&text=Foto Produto Frente" width="700">
                                            </div>

                                            <div class="product-image-back">
                                              <img alt="skirt1-2" data-src="holder.js/800x800?random=yes&text=Foto Produto 2">
                                            </div>

                                            <div class="product-image-overlay">
                                                <h4>Detalhe do Produto</h4>
                                                <div class="star-rating" title="Rated 5.00 out of 5">
                                                    <span style="width:100%"><strong class="rating">5.00</strong> sai por 5</span>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="product-info">
                                                <h3 class="product-title"> 
                                                  <a href="#">
                                                    Produto <?=rand(1, 10);?>
                                                  </a> 
                                                </h3> 
                                                <span class="product-categories">
                                                  <a href="#" rel="tag">ração</a>,
                                                  <a href="#" rel="tag">coleira</a>
                                                </span>
                                                <h3 class="price"> <del>
                                                <span class="amount">R&#36; 30,00</span>
                                            </del> <ins>
                                                <span class="amount">R&#36; 20,00
                                                </span>
                                            </ins> </h3>
                                                <a class="add-to-cart-button" href="#" rel="nofollow"> <i class="icon-bag"></i> </a>
                                            </div>
                                        </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>              
            </section>
            <section class="section">
                <div class="container">
                    <div class="row">
                        @for( $i = 0; $i < 3; $i++ )
                        <div class="col-md-4 text-center">
                            <div class="figure element-top-20 element-bottom-20 image-effect-zoom-in os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
                                <a class="figure-image" href="#" target="_self">
                                  <img alt="" data-src="holder.js/800x800?random=yes&text=Produto Destaque">
                                </a>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </section>
  </article>
</div>

@endsection
