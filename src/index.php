<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link media="all" type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans:400,700">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/interface.css">
</head>
<body class="home">
    <header class="header">

        <nav class="navbar navbar-default navbar-loja navbar-static-top hidden-xs" role="navigation">
    <div class="container">
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <div class="col-sm-3 form">
            <form method="POST" action="https://www.dolcegusto.com.br/loja-virtual/localizar" accept-charset="UTF-8"><input name="_token" type="hidden" value="660rYH7TjULSmqJN4C1RGj8nFaIRS15ngiq5978K">
              <input type="hidden" name="_token" value="660rYH7TjULSmqJN4C1RGj8nFaIRS15ngiq5978K">
                <div class="input-group">
                  <input type="text" class="form-control" name="localizar" placeholder="Buscar">
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
          </div>
          <div class="col-sm-5 col-lg-6 links">
                              <ul>
                <li><a href="https://www.dolcegusto.com.br/loja-virtual/auth/login?form=only">Login</a></li>
                <li><a href="https://www.dolcegusto.com.br/loja-virtual/auth/register">Não sou cadastrado</a></li>
              </ul>
                          </div>
          <div class="col-md-3 col-sm-4 carrinho_superior">
            <ul class="nav navbar-nav navbar-nav-cart">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle carrinho-btn" data-toggle="dropdown" role="button" aria-expanded="false">
                  <div class="icon"><i class="fa fa-shopping-cart"></i><div class="cartQTD" id="cartQTD">0</div></div>
                  <div class="desc">
                   <div class="carrinho">Carrinho</div>
                   <div class="detalhes">Detalhes<span class="caret"></span></div>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-cart carrinho-refresh" role="menu">
                  <li>
<span>Total: R$ 0,00</span>
<a class="pull-right btn-finalizar" href="/loja-virtual/meu-carrinho">Finalizar Compra</a>
</li>
<li class="divider"></li>

<script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script>
document.getElementById('cartQTD').innerHTML='0';

</script>                    </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <nav class="navbar navbar-default hidden-xs" role="navigation">
    <div class="container">
      <div class="row">
        <div class="navbar-header" onclick="window.location='/loja-virtual';">
          <div class="navbar-brand navbar-brand-centered">
            <a href="/loja-virtual">
              <img class="img-responsive" src="https://www.dolcegusto.com.br/img/logo.svg" width="166">
            </a>
          </div>
        </div>
        <div class="collapse navbar-collapse">
          <div class="col-xs-12">
            <ul class="nav navbar-nav navbar-right nav-loja text-uppercase">
              <li><a href="https://www.dolcegusto.com.br/loja-virtual?#ancora">Produtos</a></li>
              <li><a href="https://www.dolcegusto.com.br/loja-virtual/calculadora?/#ancora">Calculadora</a></li>
              <li><a href="/">Site</a></li>
              <li><a href="/#contato">Contato</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!--
  MOBILE
  -->
  <nav class="visible-xs navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-navbar-collapse-mobile">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars"></i>
        </button>
        <a href="/loja-virtual/meu-carrinho" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <div class="icon"><i class="fa fa-shopping-cart"></i></div>
        </a>
        <div class="navbar-brand navbar-brand-centered">
          <a class="ancora" href="/#home-mobile" rel="0">
              <img class="img-responsive" src="https://www.dolcegusto.com.br/img/logo.svg" width="66">
          </a>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="menu-navbar-collapse-mobile">
        <ul class="nav navbar-nav">
          <li><a class="ancora" href="/loja-virtual" rel="62">Produtos</a></li>
          <li><a href="/loja-virtual/calculadora">Calculadora</a></li>
          <li><a href="/">Site</a></li>
          <li><a class="ancora" href="/#contato" rel="62">Contato</a></li>
          <li><hr></li>
                              <li><a href="https://www.dolcegusto.com.br/loja-virtual/auth/login?form=only">Login</a></li>
              <li><a href="https://www.dolcegusto.com.br/loja-virtual/auth/register">Não sou cadastrado</a></li>
                        </ul>
      </div>
    </div>
  </nav>
  <main class="content">

    <style>
    
    .produto h3 span {
        display: block;
        margin-top: 10px;
        font-size: 80%;
        color: #545454;
    }
    </style>
    
    <div class="visible-xs" id="home-mobile" style="">
        <div class="banner-mobile" style="overflow: hidden; width: 100%; height: 400px;">
            <ul style="width: 300%; position: relative;">
                <li class="carousel-home-banner-1" style="background: url(&quot;/img/loja/banners/calcular_xs.jpg&quot;) right center; width: 33.3333%;">
                    <a class="a-full" href="/loja-virtual/calculadora#ancora"></a>
                </li>
                <li class="carousel-home-banner-3" style="background: url(&quot;/img/loja/banners/tortas-doces_xs.jpg&quot;) right center; width: 33.3333%;">
                    <a class="a-full" href="/loja-virtual/produto/tortas-doces/torta-morango-chocolate"></a>
                </li>
                <li class="carousel-home-banner-4" style="background: url(&quot;/img/loja/banners/compre-pela-loja_xs.jpg&quot;) right center; width: 33.3333%;"></li>
            </ul>
            <a href="#" class="unslider-arrow prev"><i class="fa fa-chevron-left"></i></a>
            <a href="#" class="unslider-arrow next"><i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
    
    <div class="visible-sm" id="home-mobile" style="">
        <div class="banner-mobile" style="overflow: hidden; width: 100%; height: 400px;">
            <ul style="width: 300%; position: relative;">
                <li class="carousel-home-banner-1" style="background: url(&quot;/img/loja/banners/calcular_sm.jpg&quot;) right center; width: 33.3333%;">
                    <a class="a-full" href="/loja-virtual/calculadora#ancora"></a>
                </li>
                <li class="carousel-home-banner-3" style="background: url(&quot;/img/loja/banners/tortas-doces_sm.jpg&quot;) right center; width: 33.3333%;">
                    <a class="a-full" href="/loja-virtual/produto/tortas-doces/torta-morango-chocolate"></a>
                </li>
                <li class="carousel-home-banner-4" style="background: url(&quot;/img/loja/banners/compre-pela-loja_sm.jpg&quot;) right center; width: 33.3333%;"></li>
            </ul>
            <a href="#" class="unslider-arrow prev"><i class="fa fa-chevron-left"></i></a>
            <a href="#" class="unslider-arrow next"><i class="fa fa-chevron-right"></i></a>
        </div>
    </div>
    
    <!-- banners desktop -->
    <div class="hidden-xs hidden-sm">
        <div class="carousel slide carousel_loja" data-ride="carousel" id="myCarousel">
            <div class="t3">
            <h2 style="    color: #fff;
        position: absolute;
        text-align: center;
        bottom: 0;
        z-index: 9999;
        margin: 0 auto;
        left: 18%;
        top: 75%;
        background: #000;
        transform: translate(-50%, -50%);
        height: fit-content;
        padding: 15px 15px 15px 160px;">
                    Pague em até 3 vezes s/ juros no cartão
                </h2>
            </div>
            <ol class="carousel-indicators">
                            <li class="" data-slide-to="0" data-target="#myCarousel">
                    <span class="sr-only">Banner 0</span>
                </li>
                            <li class="" data-slide-to="1" data-target="#myCarousel">
                    <span class="sr-only">Banner 1</span>
                </li>
                            <li class="active" data-slide-to="2" data-target="#myCarousel">
                    <span class="sr-only">Banner 2</span>
                </li>
                        </ol>
            <div class="carousel-inner" role="listbox">
                            <li class="item b1" style="background-image: url(https://www.dolcegusto.com.br/img/loja/banners/calcular.jpg)">
                                    <a class="link-banner" href="https://www.dolcegusto.com.br/loja-virtual/calculadora#ancora"></a>
                                </li>
                            <li class="item b2" style="background-image: url(https://www.dolcegusto.com.br/img/loja/banners/tortas-doces.jpg)">
                                    <a class="link-banner" href="https://www.dolcegusto.com.br/loja-virtual/produtos/mini-doces#ancora"></a>
                                </li>
                            <li class="item b3 active" style="background-image: url(https://www.dolcegusto.com.br/img/loja/banners/compre-pela-loja.jpg)">
                                </li>
                        </div>
        </div>
    </div>
    
    
    
    
    
    <div class="listrado" id="ancora" rel="0">
        <h1>
            <div class="t2">Monte sua festa</div>
            <div class="t1">Frete grátis nas compras acima de R$ 350,00</div>
            <div class="t3">Pague em até 3 vezes s/ juros no cartão</div>
        </h1>
    </div>
    
    <div class="container">
        <div class="col-md-3 menu">
            <h1>Produtos</h1>
            <ul>
                            <li class=""><a href="/loja-virtual/produtos/tortas-salgadas#ancora">Tortas Salgadas</a></li>
                            <li class="active"><a href="/loja-virtual/produtos/tortas-doces#ancora">Tortas Doces</a></li>
                            <li class=""><a href="/loja-virtual/produtos/mini-doces#ancora">Mini Doces</a></li>
                            <li class=""><a href="/loja-virtual/produtos/mini-salgados#ancora">Mini Salgados</a></li>
                            <li class=""><a href="/loja-virtual/produtos/bebidas#ancora">Bebidas</a></li>
                            <li class=""><a href="/loja-virtual/produtos/complementos#ancora">Complementos</a></li>
                        </ul>
        </div>
        <div class="col-md-9 produtos">
            <div class="row">
                                        <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-banoffee">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/402/tb_dscn2748jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Banoffee .</h2>
                                                    <h3>R$ 50,00
                    </h3>
                                        <span>3x de R$ <strong>16,67</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-banoffee" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-cheesecake-de-amora">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/447/tb_tortacheesecakeamoracomchantily.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Cheesecake de Amora .</h2>
                                                    <h3>R$ 74,00
                    </h3>
                                        <span>3x de R$ <strong>24,67</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-cheesecake-de-amora" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-cheesecake-de-frutas-vermelhas">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/446/tb_tortacheesecakefrutasvermelhas.jpeg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Cheesecake de Frutas vermelhas .</h2>
                                                    <h3>R$ 74,00
                    </h3>
                                        <span>3x de R$ <strong>24,67</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-cheesecake-de-frutas-vermelhas" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-chocolate-com-nozes">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/29/tb_torta_de_chocolate_e_nozes.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Chocolate com Nozes .</h2>
                                                    <h3>
                    R$ 58,50</h3>
                                            <span>3x de R$ <strong>19,50</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-chocolate-com-nozes" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-coco-e-amendoas-2">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/454/tb_whatsappimage2020-11-20at15.28.281.jpeg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Coco e Amêndoas . </h2>
                                                    <h3>R$ 74,00
                    </h3>
                                        <span>3x de R$ <strong>24,67</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-coco-e-amendoas-2" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-coco-e-nozes">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/98/tb_torta_mista_fatia.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Coco e Nozes .</h2>
                                                    <h3>
                    R$ 46,00</h3>
                                            <span>3x de R$ <strong>15,33</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-coco-e-nozes" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-de-bombom">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/6/tb_torta_de_bombom.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta de Bombom .</h2>
                                                    <h3>
                    R$ 46,50</h3>
                                            <span>3x de R$ <strong>15,50</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-de-bombom" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-de-brigadeiro">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/22/tb_torta_de_brigadeiro.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta de Brigadeiro .</h2>
                                                    <h3>
                    R$ 42,00</h3>
                                            <span>3x de R$ <strong>14,00</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-de-brigadeiro" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-de-maca">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/54/tb_torta_de_ma__.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta de Maçã .</h2>
                                                    <h3>
                    R$ 30,00</h3>
                                            <span>3x de R$ <strong>10,00</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-de-maca" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-de-trufas">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/443/tb_tortatrufasnova.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta de Trufas .</h2>
                                                    <h3>
                    R$ 49,00</h3>
                                            <span>3x de R$ <strong>16,33</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-de-trufas" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-dolce-gusto">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/440/tb_tortadolcegustonova.jpeg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Dolce Gusto .</h2>
                                                    <h3>
                    R$ 50,00</h3>
                                            <span>3x de R$ <strong>16,67</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-dolce-gusto" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-marta-rocha">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/82/tb_torta_marta_rocha.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Marta Rocha .</h2>
                                                    <h3>
                    R$ 81,00</h3>
                                            <span>3x de R$ <strong>27,00</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-marta-rocha" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-morango-chocolate">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/100/tb_torta_de_morango_e_chocolate.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Morango Chocolate .</h2>
                                                    <h3>
                    R$ 76,00</h3>
                                            <span>3x de R$ <strong>25,33</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-morango-chocolate" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-morango-e-mousse-branco">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/115/tb_torta_de_morango_e_mousse_branco.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Morango e Mousse Branco .</h2>
                                                    <h3>
                    R$ 72,00</h3>
                                            <span>3x de R$ <strong>24,00</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-morango-e-mousse-branco" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-nozes">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/57/tb_torta_de_nozes.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Nozes .</h2>
                                                    <h3>R$ 79,00
                    </h3>
                                        <span>3x de R$ <strong>26,33</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-nozes" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-prestigio">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/72/tb_torta_prest_gio.jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Prestígio .</h2>
                                                    <h3>
                    R$ 46,00</h3>
                                            <span>3x de R$ <strong>15,33</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-prestigio" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-princesa">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/441/tb_tortaprincesanovo.jpeg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Princesa .</h2>
                                                    <h3>
                    R$ 44,00</h3>
                                            <span>3x de R$ <strong>14,67</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-princesa" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/torta-red-frutas-vermelhas">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/406/tb_dscn2789jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>. Torta Red Frutas Vermelhas .</h2>
                                                    <h3>
                    R$ 42,00</h3>
                                            <span>3x de R$ <strong>14,00</strong> no cartão</span>
                                                        
                                    <a href="/loja-virtual/produto/tortas-doces/torta-red-frutas-vermelhas" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-01">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/377/tb_1jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 01</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-01" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-02">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/378/tb_2jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 02</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-02" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-03">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/379/tb_3jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 03</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-03" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-04">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/380/tb_4jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 04</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-04" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-05">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/381/tb_5jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 05</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-05" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-06">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/382/tb_6jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 06</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-06" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-07">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/383/tb_7jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 07</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-07" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-08">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/384/tb_8jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 08</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-08" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-09">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/388/tb_img-20180522-wa0011jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 09</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-09" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-10">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/396/tb_dscn2386jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 10</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-10" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-25">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/418/tb_tortadecorao25jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 25</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-25" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-28">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/417/tb_tortadecorao28jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 28</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-28" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                            <div class="col-sm-4 produto">
                    <a href="/loja-virtual/produto/tortas-doces/decoracao-29">
                        <div class="thumbnail">
                            <div class="caption hidden-xs hidden-sm" style="display: none;">
                                <p>Comprar</p>
                            </div>
                            <img src="//www.pidia.com.br/imgs/dolcegusto/produtos/416/tb_tortadecorao29jpg" alt="" class="img-responsive">
                        </div>
                    </a>
                    <h2>Decoração 29</h2>
                                                    <h3>R$ 10,00
                    </h3>
                                                    
                                    <a href="/loja-virtual/produto/tortas-doces/decoracao-29" class="btn btn-default btn-comprar">Comprar</a>
                </div>
                                    </div>
        </div>
    </div>
    </main>
    <div class="loja-rodape">
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <h2>Minha Conta</h2>
                                    <ul>
                    <li><a href="https://www.dolcegusto.com.br/loja-virtual/auth/login?form=only">Login</a></li>
                    <li><a href="https://www.dolcegusto.com.br/loja-virtual/auth/register">Não sou cadastrado</a></li>
                </ul>
                                </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xs-12">
                <ul>
                    <li><a href="https://www.dolcegusto.com.br/loja-virtual/politica-de-privacidade">Política de Privacidade</a></li>
                    <li><a href="https://www.dolcegusto.com.br/loja-virtual/formas-de-pagamento">Formas de Pagamento</a></li>
                    <li><a href="https://www.dolcegusto.com.br/loja-virtual/compra-segura">Compra Segura</a></li>
                    <li><a href="https://www.dolcegusto.com.br/loja-virtual/politica-de-troca">Política de Troca</a></li>
                    <li><a href="https://www.dolcegusto.com.br/loja-virtual/prazo-de-entrega">Prazo de Entrega</a></li>
                    <li><a href="/#contato">Contato</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <h2>Formas de pagamento</h2>
                <img src="/img/loja/cielo.png" class="img-responsive espaco-cielo">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 redes-sociais">
                <h2>Redes Sociais</h2>
                <ul>
                    <li><a href="https://www.facebook.com/dolcegustobg" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" data-toggle="modal" data-target="#tripadvisor"><i class="fa fa-tripadvisor"></i></a></li>
                    <li><a href="https://www.instagram.com/dolcegustoconfeitaria/" target="_blank"><i class="fa fa-instagram"></i></a></li>



                </ul>
                <div class="clearfix"></div>
                <h2 class="mt-10">CNPJ</h2>
                <div class="cnpj">91.807.826/0002-01</div>
                <h2 class="mt-10">Atendimento</h2>
                <div class="fone">(54) 3055-3366</div>
                <a href="mailto:vendas@dolcegusto.com.br">vendas@dolcegusto.com.br</a>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center logo">
                <a href="/">
                    <img class="img-responsive" src="https://www.dolcegusto.com.br/img/logo.svg" width="100">
                </a>
            </div>
        </div>
    </div>
</header>
</body>
</html>