
<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="initial-scale=1, width=device-width">

          <title>Tortas Doces - Loja Virtual Dolce Gusto</title>
    
          <meta name="description" content="Compre agora Tortas Salgadas, Tortas Doces, Mini Doces, Mini Salgados, Bebidas, Complementos." />
      <meta property="og:description" content="Compre agora Tortas Salgadas, Tortas Doces, Mini Doces, Mini Salgados, Bebidas, Complementos." />
      <meta name="twitter:description" content="Compre agora Tortas Salgadas, Tortas Doces, Mini Doces, Mini Salgados, Bebidas, Complementos." />
        
        <link rel="apple-touch-icon" sizes="180x180" href="https://www.dolcegusto.com.br/apple-touch-icon.png?v=rM3kLnzbgX">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.dolcegusto.com.br/favicon-32x32.png?v=rM3kLnzbgX">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.dolcegusto.com.br/favicon-16x16.png?v=rM3kLnzbgX">
    <link rel="manifest" href="https://www.dolcegusto.com.br/manifest.json?v=rM3kLnzbgX">
    <link rel="mask-icon" href="https://www.dolcegusto.com.br/safari-pinned-tab.svg?v=rM3kLnzbgX" color="#333333">
    <link rel="shortcut icon" href="https://www.dolcegusto.com.br/favicon.ico?v=rM3kLnzbgX">
    <meta name="apple-mobile-web-app-title" content="Dolce Gusto">
    <meta name="application-name" content="Dolce Gusto">
    <meta name="theme-color" content="#000000">

        <link media="all" type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans:400,700">

    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="https://www.dolcegusto.com.br/css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="https://www.dolcegusto.com.br/css/bootstrap-select.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="https://www.dolcegusto.com.br/css/bootstrap-datetimepicker.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="https://www.dolcegusto.com.br/build/css/main-19f5978c25.css">

    <link media="all" type="text/css" rel="stylesheet" href="https://www.dolcegusto.com.br/build/css/loja-virtual-4088763c98.css">

    <style>
      .radio label::before {
        border-color: #191919 !important;
      }
      .radio label::after {
          background-color: #191919 !important;
      }
    </style>
  </head>

  <body class="home">
    <header class="header">
      <nav class="navbar navbar-default hidden-xs" role="navigation">
        <div class="container">
          <div class="row">
            <div class="navbar-header" onclick="window.location='/loja-virtual';">
              <div class="navbar-brand navbar-brand-centered">
                <a href="#">
                  <img class="img-responsive" src="#" width="166">
                </a>
              </div>
            </div>
            <div class="collapse navbar-collapse">
              <div class="col-xs-12">
                <ul class="nav navbar-nav navbar-right nav-loja text-uppercase">
                  <li><a href="/#produto">Produtos</a></li>
                  <li><a href="/">Site</a></li>
                  <li><a href="/#contato">Contato</a></li>
                  <div class="col-md-3 col-sm-4 carrinho_superior">
                <ul class="nav navbar-nav navbar-nav-cart">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle carrinho-btn" data-toggle="dropdown" role="button" aria-expanded="false">
                      <div class="icon"><i class="fa fa-shopping-cart" style="height: 100px;"></i><div class="cartQTD" id="cartQTD"></div></div>
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

<script>
document.getElementById('cartQTD').innerHTML='0';

</script>                    </ul>
                  </li>
                </ul>
              </div>
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
                  <img class="img-responsive" src="#" width="66">
              </a>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="menu-navbar-collapse-mobile">
            <ul class="nav navbar-nav">
              <li><a class="ancora" href="/#produtos" rel="62">Produtos</a></li>
              <li><a href="/" >Site</a></li>
              <li><a class="ancora" href="/#contato" rel="62">Contato</a></li>
              <div class="col-md-3 col-sm-4 carrinho_superior">
                <ul class="nav navbar-nav navbar-nav-cart">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle carrinho-btn" data-toggle="dropdown" role="button" aria-expanded="false">
                      <div class="icon"><i class="fa fa-shopping-cart"></i><div class="cartQTD" id="cartQTD"></div></div>
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

<script>
document.getElementById('cartQTD').innerHTML='0';

</script>                    </ul>
                  </li>
                </ul>
              </div>
              <li><hr></li>
                                  <li><a href="../../login.php">Login</a></li>
                  <li><a href="../../register.php">N&atilde;o sou cadastrado</a></li>
                            </ul>
          </div>
        </div>
      </nav>

    </header>

    <main class="content">


<div class="visible-xs" id="home-mobile">
    <div class="banner-mobile">
        <ul>
            <li class="carousel-home-banner-1" style="background:url('#') right;">
                <a class="a-full" href="#"></a>
            </li>
            <li class="carousel-home-banner-3" style="background:url('#') right;">
                <a class="a-full" href="#"></a>
            </li>
            <li class="carousel-home-banner-4" style="background:url('#') right;"></li>
        </ul>
        <a href="#" class="unslider-arrow prev"><i class="fa fa-chevron-left"></i></a>
        <a href="#" class="unslider-arrow next"><i class="fa fa-chevron-right"></i></a>
    </div>
</div>

<div class="visible-sm" id="home-mobile">
    <div class="banner-mobile">
        <ul>
            <li class="carousel-home-banner-1" style="background:url('#') right;">
                <a class="a-full" href="#"></a>
            </li>
            <li class="carousel-home-banner-3" style="background:url('#') right;">
                <a class="a-full" href="#"></a>
            </li>
            <li class="carousel-home-banner-4" style="background:url('#') right;"></li>
        </ul>
        <a href="#" class="unslider-arrow prev"><i class="fa fa-chevron-left"></i></a>
        <a href="#" class="unslider-arrow next"><i class="fa fa-chevron-right"></i></a>
    </div>
</div>

<!-- banners desktop -->
<div class="hidden-xs hidden-sm">
    <div class="carousel slide carousel_loja" data-ride="carousel" id="myCarousel">
        <!-- <div class="t3">
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
        </div> -->
        <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#myCarousel">
                <span class="sr-only">Banner 0</span>
            </li>
                        <li class="" data-slide-to="1" data-target="#myCarousel">
                <span class="sr-only">Banner 1</span>
            </li>
                        <li class="" data-slide-to="2" data-target="#myCarousel">
                <span class="sr-only">Banner 2</span>
            </li>
                    </ol>
        <div class="carousel-inner" role="listbox">
                        <li class="item b1 active" style="background-image: url(#)">
                                <a class="link-banner" href="#"></a>
                            </li>
                        <li class="item b2" style="background-image: url(#)">
                                <a class="link-banner" href="#"></a>
                            </li>
                        <li class="item b3" style="background-image: url(#)">
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
                        <li class=""><a href="#">Tortas Salgadas</a></li>
                        <li class="active"><a href="#">Tortas Doces</a></li>
                        <li class=""><a href="#">Mini Doces</a></li>
                        <li class=""><a href="#">Mini Salgados</a></li>
                        <li class=""><a href="#">Bebidas</a></li>
                        <li class=""><a href="#">Complementos</a></li>
                    </ul>
    </div>
    <div class="col-md-9 produtos">
        <div class="row">
                                    <div class="col-sm-4 produto">
                <a href="#">
                    <div class="thumbnail">
                        <div class="caption hidden-xs hidden-sm" style="display: none;">
                            <p>Comprar</p>
                        </div>
                        <img src="#" alt="" class="img-responsive"/>
                    </div>
                </a>
                <h2>Decora&ccedil;&atilde;o 01</h2>
                                                <h3>R$ 10,00</h3>
                                                <a href="#" class="btn btn-default btn-comprar">Comprar</a>
            </div>
</main>
	    <div class="loja-rodape">
	    	<div class="container">
	    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	    			<h2>Minha Conta</h2>
	    				    			<ul>
	    				<li><a href="../../login.php">Login</a></li>
	    				<li><a href="../../register.php">N&atilde;o sou cadastrado</a></li>
	    			</ul>
	    				    		</div>
	    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xs-12">
	    			<ul>
	    				<li><a href="/#contato">Contato</a></li>
	    			</ul>
	    		</div>
	    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	    			<h2>Formas de pagamento</h2>
	    			<img src="/img/cielo.png" class="img-responsive espaco-cielo" />
	    		</div>
	    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 redes-sociais">
	    			<h2>Redes Sociais</h2>
	    			<ul>
	    				<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
	    			<div class="clearfix"></div>
	    			<h2 class="mt-10">Atendimento</h2>
	    			<div class="fone">
	    				<a href="tel:+5515997940537">15 997940537</a>
    				</div>
	    			<a href="mailto:vendas@dolcegusto.com.br">vendas@dolcegusto.com.br</a>
	    		</div>
	    		<div class="clearfix"></div>
	    	</div>
	    </div>
	</body>
</html>
