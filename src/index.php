<!doctype html>
<html lang="pt-br">
  <head>
    <link media="all" type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script|Open+Sans:400,700">

    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="initial-scale=1, width=device-width">
    <link media="all" type="text/css" rel="stylesheet" href="css/main.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/interface.css">

          <title>Tortas</title>

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
                <form method="POST" action="#" accept-charset="UTF-8"><input name="_token" type="hidden" value="UCMRZjxWxrXo7AfBX9jO6PK6Lfwy97SQcLxjkN0T">
                  <input type="hidden" name="_token" value="UCMRZjxWxrXo7AfBX9jO6PK6Lfwy97SQcLxjkN0T">
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
                    <li><a href="login.php">Login</a></li>
                    <li><a href="#">N&atilde;o sou cadastrado</a></li>
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
	<a class="pull-right btn-finalizar" href="#">Finalizar Compra</a>
</li>
<li class="divider"></li>

<script>
document.getElementById('cartQTD').innerHTML='0';

</script>                    
</ul>
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
                  <img class="img-responsive" src="" width="166">
                </a>
              </div>
            </div>
            <div class="collapse navbar-collapse">
              <div class="col-xs-12">
                <ul class="nav navbar-nav navbar-right nav-loja text-uppercase">
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
              <li><a href="/" >Site</a></li>
              <li><a class="ancora" href="/#contato" rel="62">Contato</a></li>
              <li><hr></li>
                                  <li><a href="#">Login</a></li>
                  <li><a href="#">N&atilde;o sou cadastrado</a></li>
                            </ul>
          </div>
        </div>
      </nav>

    </header>
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
	    				<li><a href="https://www.facebook.com/Delicias-Dona-Flor-2043568992395960" target="_blank"><i class="fa fa-facebook"></i></a></li>
	    			</ul>
	    			<div class="clearfix"></div>
	    			<h2 class="mt-10">Atendimento</h2>
	    			<div class="fone">
	    				<a href="tel:"></a>
    				</div>
	    			<a href="mailto:">Email test</a>
	    		</div>
	    		<div class="clearfix"></div>
	    		<div class="col-lg-12 text-center logo">
	    			<a href="/">
                        <img class="img-responsive" src="" width="100">
	    			</a>
	    		</div>
	    	</div>
	    </div>
    </div>
  </div>
</div>
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
