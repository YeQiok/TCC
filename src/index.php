
<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="initial-scale=1, width=device-width">

          <title>Torta DonaFlor</title>

          <link media="all" type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans:400,700">
          <link rel="stylesheet" href="main.css">
          <link rel="stylesheet" href="interface.css">

          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

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
                <form method="POST" action="#" accept-charset="UTF-8"><input name="_token" type="hidden" value="r92UGcU5voXqwdcoTy1kszL8B6u9V4k6ixdX0DFD">
                  <input type="hidden" name="_token" value="r92UGcU5voXqwdcoTy1kszL8B6u9V4k6ixdX0DFD">
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
                    <li><a href="php/login.php">Login</a></li>
                    <li><a href="php/register.php">N&atilde;o sou cadastrado</a></li>
                  </ul>
                              </div>
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
                  <img class="img-responsive" src="#" width="166">
                </a>
              </div>
            </div>
            <div class="collapse navbar-collapse">
              <div class="col-xs-12">
                <ul class="nav navbar-nav navbar-right nav-loja text-uppercase">
                  <li><a href="#">Produtos</a></li>
                  <li><a href="#">Calculadora</a></li>
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
                  <img class="img-responsive" src="#" width="66">
              </a>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="menu-navbar-collapse-mobile">
            <ul class="nav navbar-nav">
              <li><a class="ancora" href="/loja-virtual" rel="62">Produtos</a></li>
              <li><a href="/loja-virtual/calculadora">Calculadora</a></li>
              <li><a href="/" >Site</a></li>
              <li><a class="ancora" href="/#contato" rel="62">Contato</a></li>
              <li><hr></li>
                                  <li><a href="php/login.php">Login</a></li>
                  <li><a href="php/register.php">N&atilde;o sou cadastrado</a></li>
                            </ul>
          </div>
        </div>
      </nav>

    </header>

    <main class="content">


<div class="visible-xs" id="home-mobile">
    <div class="banner-mobile">
        <ul>
            <li class="carousel-home-banner-1" style="background:url('/img/loja/banners/calcular_xs.jpg') right;">
                <a class="a-full" href="/loja-virtual/calculadora#ancora"></a>
            </li>
            <li class="carousel-home-banner-3" style="background:url('/img/loja/banners/tortas-doces_xs.jpg') right;">
                <a class="a-full" href="/loja-virtual/produto/tortas-doces/torta-morango-chocolate"></a>
            </li>
            <li class="carousel-home-banner-4" style="background:url('/img/loja/banners/compre-pela-loja_xs.jpg') right;"></li>
        </ul>
        <a href="#" class="unslider-arrow prev"><i class="fa fa-chevron-left"></i></a>
        <a href="#" class="unslider-arrow next"><i class="fa fa-chevron-right"></i></a>
    </div>
</div>

<div class="visible-sm" id="home-mobile">
    <div class="banner-mobile">
        <ul>
            <li class="carousel-home-banner-1" style="background:url('/img/loja/banners/calcular_sm.jpg') right;">
                <a class="a-full" href="/loja-virtual/calculadora#ancora"></a>
            </li>
            <li class="carousel-home-banner-3" style="background:url('/img/loja/banners/tortas-doces_sm.jpg') right;">
                <a class="a-full" href="/loja-virtual/produto/tortas-doces/torta-morango-chocolate"></a>
            </li>
            <li class="carousel-home-banner-4" style="background:url('/img/loja/banners/compre-pela-loja_sm.jpg') right;"></li>
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
                        <li class="item b1 active" >
                                <a class="link-banner" href="#"></a>
                            </li>
                        <li class="item b2" >
                                <a class="link-banner" href="#"></a>
                            </li>
                        <li class="item b3">
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
                <a href="/loja-virtual/produto/tortas-doces/decoracao-01">
                    <div class="thumbnail">
                        <div class="caption hidden-xs hidden-sm" style="display: none;">
                            <p>Comprar</p>
                        </div>
                        <img src="#" alt="" class="img-responsive"/>
                    </div>
                </a>
                <h2>Decora&ccedil;&atilde;o 01</h2>
                                                <h3>R$ 10,00</h3>
                                                <a href="/loja-virtual/produto/tortas-doces/decoracao-01" class="btn btn-default btn-comprar">Comprar</a>
            </div>
                        <div class="col-sm-4 produto">
                <a href="/loja-virtual/produto/tortas-doces/decoracao-02">
                    <div class="thumbnail">
                        <div class="caption hidden-xs hidden-sm" style="display: none;">
                            <p>Comprar</p>
                        </div>
                        <img src="#" alt="" class="img-responsive"/>
                    </div>
                </a>
                <h2>Decora&ccedil;&atilde;o 02</h2>
                                                <h3>R$ 10,00</h3>
                                                <a href="/loja-virtual/produto/tortas-doces/decoracao-02" class="btn btn-default btn-comprar">Comprar</a>
            </div>
                        <div class="col-sm-4 produto">
                <a href="/loja-virtual/produto/tortas-doces/decoracao-03">
                    <div class="thumbnail">
                        <div class="caption hidden-xs hidden-sm" style="display: none;">
                            <p>Comprar</p>
                        </div>
                        <img src="#" alt="" class="img-responsive"/>
                    </div>
                </a>
                <h2>Decora&ccedil;&atilde;o 03</h2>
                                                <h3>R$ 10,00</h3>
                                                <a href="/loja-virtual/produto/tortas-doces/decoracao-03" class="btn btn-default btn-comprar">Comprar</a>
            </div>
                        <div class="col-sm-4 produto">
                <a href="/loja-virtual/produto/tortas-doces/decoracao-04">
                    <div class="thumbnail">
                        <div class="caption hidden-xs hidden-sm" style="display: none;">
                            <p>Comprar</p>
                        </div>
                        <img src="#" alt="" class="img-responsive"/>
                    </div>
                </a>
                <h2>Decora&ccedil;&atilde;o 04</h2>
                                                <h3>R$ 10,00</h3>
                                                <a href="/loja-virtual/produto/tortas-doces/decoracao-04" class="btn btn-default btn-comprar">Comprar</a>
            </div>
                        <div class="col-sm-4 produto">
                <a href="/loja-virtual/produto/tortas-doces/decoracao-05">
                    <div class="thumbnail">
                        <div class="caption hidden-xs hidden-sm" style="display: none;">
                            <p>Comprar</p>
                        </div>
                        <img src="#" alt="" class="img-responsive"/>
                    </div>
                </a>
                <h2>Decora&ccedil;&atilde;o 05</h2>
                                                <h3>R$ 10,00</h3>
                                                <a href="/loja-virtual/produto/tortas-doces/decoracao-05" class="btn btn-default btn-comprar">Comprar</a>
            </div>
                        <div class="col-sm-4 produto">
                <a href="/loja-virtual/produto/tortas-doces/decoracao-06">
                    <div class="thumbnail">
                        <div class="caption hidden-xs hidden-sm" style="display: none;">
                            <p>Comprar</p>
                        </div>
                        <img src="#" alt="" class="img-responsive"/>
                    </div>
                </a>
                <h2>Decora&ccedil;&atilde;o 06</h2>
                                                <h3>R$ 10,00</h3>
                                                <a href="/loja-virtual/produto/tortas-doces/decoracao-06" class="btn btn-default btn-comprar">Comprar</a>
            </div>
                        <div class="col-sm-4 produto">
                <a href="/loja-virtual/produto/tortas-doces/decoracao-07">
                    <div class="thumbnail">
                        <div class="caption hidden-xs hidden-sm" style="display: none;">
                            <p>Comprar</p>
                        </div>
                        <img src="#" alt="" class="img-responsive"/>
                    </div>
                </a>
                <h2>Decora&ccedil;&atilde;o 07</h2>
                                                <h3>R$ 10,00</h3>
                                                <a href="/loja-virtual/produto/tortas-doces/decoracao-07" class="btn btn-default btn-comprar">Comprar</a>
            </div>
                        <div class="col-sm-4 produto">
                <a href="/loja-virtual/produto/tortas-doces/decoracao-08">
                    <div class="thumbnail">
                        <div class="caption hidden-xs hidden-sm" style="display: none;">
                            <p>Comprar</p>
                        </div>
                        <img src="#" alt="" class="img-responsive"/>
                    </div>
                </a>
                <h2>Decora&ccedil;&atilde;o 08</h2>
                                                <h3>R$ 10,00</h3>
                                                <a href="/loja-virtual/produto/tortas-doces/decoracao-08" class="btn btn-default btn-comprar">Comprar</a>
            </div>
	    <div class="loja-rodape">
	    	<div class="container">
	    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	    			<h2>Minha Conta</h2>
	    				    			<ul>
	    				<li><a href="#">Login</a></li>
	    				<li><a href="#">N&atilde;o sou cadastrado</a></li>
	    			</ul>
	    				    		</div>
	    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xs-12">
	    			<ul>
	    				<li><a href="#">Pol&iacute;tica de Privacidade</a></li>
	    				<li><a href="#">Formas de Pagamento</a></li>
	    				<li><a href="#">Compra Segura</a></li>
	    				<li><a href="#">Pol&iacute;tica de Troca</a></li>
	    				<li><a href="#">Prazo de Entrega</a></li>
	    				<li><a href="/#contato">Contato</a></li>
	    			</ul>
	    		</div>
	    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	    			<h2>Formas de pagamento</h2>
	    			<img src="/img/loja/cielo.png" class="img-responsive espaco-cielo" />
	    		</div>
	    		<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 redes-sociais">
	    			<h2>Redes Sociais</h2>
	    			<ul>
	    				<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
	    				<li><a href="#" data-toggle="modal" data-target="#tripadvisor"><i class="fa fa-tripadvisor"></i></a></li>
	    				<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>



	    			</ul>
	    			<div class="clearfix"></div>
	    			<h2 class="mt-10">CNPJ</h2>
	    			<div class="cnpj"></div>
	    			<h2 class="mt-10">Atendimento</h2>
	    			<div class="fone">
	    				<a href="#"></a>
    				</div>
	    		</div>
	    		<div class="clearfix"></div>
	    		<div class="col-lg-12 text-center logo">
	    			<a href="/">
                        <img class="img-responsive" src="#" width="100">
	    			</a>
	    		</div>
	    	</div>
	    </div>

		<style type="text/css" media="screen">
	.atria{
	text-align: center;
	background-color: #000;
	color: #FFF;
	padding: 10px 0px;
}
.atria img{
	margin: 0 auto;
	height: 40px;
}
.c--anim-btn span {
	color: white;
	text-decoration: none;
	text-align: center;
	display: block;
}
.c--anim-btn, .c-anim-btn {
	transition: 0.3s;     
}
.c--anim-btn {
	height: 42px;
	font: normal normal 700 1em/4em Arial,sans-serif;
	overflow: hidden;
	width: 100%;
	margin: 0 auto;
	background-color: #000000;
}
.c-anim-btn{
	margin-top: 0em;   
}
.c--anim-btn:hover .c-anim-btn{
	margin-top: -4em;
}
.span-2{
	padding-top: 10px;
}
		
	</style>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


        <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1626959264262794');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1626959264262794&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


	</body>
</html>
