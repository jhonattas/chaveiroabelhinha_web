<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Chaveiro Abelhinha</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/scrolling-nav.css'); ?>" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<style>
		.mapouter {
			text-align: right;
			height: 190px;
			width:100%;
		}
		.gmap_canvas {
			overflow: hidden;
			background: none !important;
			height: 180px;
			width: 100%;
		}

		.navbar a {
			color: #444444;
			font-weight: 800;
			-moz-transition: all .2s ease-in;
			-o-transition: all .2s ease-in;
			-webkit-transition: all .2s ease-in;
			transition: all .2s ease-in;
		}

		.navbar a:hover {
			color: #000000;
			font-weight: 800;
			-moz-transition: all .2s ease-in;
			-o-transition: all .2s ease-in;
			-webkit-transition: all .2s ease-in;
			transition: all .2s ease-in;
		}
	</style>
</head>
<body id="page-top">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2&appId=2240715949497138&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

    <!-- Navigation -->
	<nav 
		class="navbar navbar-expand-lg navbar-light fixed-top" 
		id="mainNav"
		style="background-color: #ffeb3b;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img src="<?php echo base_url('assets/images/logo_topo.png');?>">
		</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Serviços</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	<header 
		class="bg-primary text-white" 
		style="
		margin-top: 155px;
		min-height: 500px;
		background-image: url('<?php echo base_url('assets/images/banner_topo.jpg');?>');
		background-size: cover;">
      <div class="container text-center">
        <h1>&nbsp;</h1>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
			<div class="col-lg-6 mx-auto">
				<img 
					src="<?php echo base_url('assets/images/quem_somos.jpg');?>"
					style="width: 100%;">
			</div>
			<div class="col-lg-6 mx-auto">
				<h2>Quem Somos</h2>
				<p class="lead">O Chaveiro Abelhinha possui uma equipe qualificada e especializada com mais de 3 anos de experiência no mercado. Especialistas de prontidão para o serviço de chaveiro, abertura de fechaduras de residências e abertura de automóveis. Trabalhamos também com o serviço chaveiro para instalação de travas de segurança, fechaduras de todos os modelos, molas aéreas, olho mágico, cadeados de portas de aço. Chaveiro Abelhinha Plantão 24h está na cidade de Campinas, no Jd. Flamboyant. (Prox. Ao Shopping Iguatemi):</p>
				<ul>
				<li>Aberturas em GERAL</li>
				<li>Instalação de Fechaduras, Travas auxiliares e Acessórios</li>
				<li>Confecção de Chave Residencial e Automotiva</li>
				<li>Programação de Transponder e Telecomando</li>
				<li>Fechadura Simples, Eletrônica, Digital</li>
				<li>Travas auxiliares, Acessórios de segurança</li>
				<li>Plantão 24 horas</li>
				</ul>
			</div>
        </div>
      </div>
    </section>

    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h2>Serviços que Oferecemos</h2><br/>
            <div class="row">
              <div class="col">
                <div class="card" style="">
                  <img class="card-img-top" src="<?php echo base_url('assets/images/linha_automotiva.jpg');?>" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Linha Automotiva</h4>
                    <p class="card-text">Conheça as chaves codificadas automotivas que imobilizam a partida.</p>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card" style="">
                  <img class="card-img-top" src="<?php echo base_url('assets/images/linha_residencial.jpg');?>" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Linha Residencial</h4>
                    <p class="card-text">Conheça as chaves codificadas automotivas que imobilizam a partida.</p>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-top: 1em;">
                <div class="card" style="">
                  <img class="card-img-top" src="<?php echo base_url('assets/images/cofres.jpg');?>" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Linha Automotiva</h4>
                    <p class="card-text">Conheça as chaves codificadas automotivas que imobilizam a partida.</p>
                  </div>
                </div>
              </div>

              <div class="col" style="margin-top: 1em;">
                <div class="card" style="">
                  <img class="card-img-top" src="<?php echo base_url('assets/images/fechaduras.jpg');?>" alt="Card image">
                  <div class="card-body">
                    <h4 class="card-title">Linha Automotiva</h4>
                    <p class="card-text">Conheça as chaves codificadas automotivas que imobilizam a partida.</p>
                  </div>
                </div>
              </div>
		        </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <center><h2>Entre em Contato Conosco!</h2></center>
            <br>
            <p class="lead" style="text-align: center;">
            <a 
                href="https://api.whatsapp.com/send?phone=5519995530476" 
                target="_new"
                class="btn" 
                style="background-color: #26d367; color: #ffffff;"><b><i class="fab fa-whatsapp"></i></b> (19) 995-530-476</a><br/>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5" style="background-color: #ffeb3b; color: #000000;">
      <div class="container">
		  <div class="row">
			<div class="col-md-4">
				<b>CONTATO</b><br/><br/>
				<p style="font-size: 0.9em;">
				<b>Endereço</b><br/>
				Avenida Palmital, 148 - Flamboyant - Campinas - SP CEP: 13091-133<br/>
				<b>WhatsApp</b>: (19) 99553-0476
				<b>E-mail</b>: contato@chaveiroabelhinha.com.br
				</p>
			</div>
			
			<div class="col-md-4">
				<b>NOSSA LOCALIZAÇÃO</b><br/><br/>
				<div class="mapouter">
					<div class="gmap_canvas">
						<iframe 
							width="100%"
							height="190" 
							id="gmap_canvas" 
							src="https://maps.google.com/maps?q=chaveiro%20abelhinha&t=&z=13&ie=UTF8&iwloc=&output=embed" 
							frameborder="0" 
							scrolling="no" 
							marginheight="0" 
							marginwidth="0"></iframe>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<b>NOSSAS REDES</b><br/><br/>
				<div 
					class="fb-page" 
					data-href="https://www.facebook.com/chaveiroabelhinha/" 
					data-height="180" 
					data-small-header="false" 
					data-adapt-container-width="true" 
					data-hide-cover="false" 
					data-show-facepile="true">
					<blockquote cite="https://www.facebook.com/chaveiroabelhinha/" 
					class="fb-xfbml-parse-ignore">
					<a href="https://www.facebook.com/chaveiroabelhinha/">Chaveiro Abelhinha</a></blockquote></div>

		  	</div>
		  </div>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="<?php echo base_url('assets/js/scrolling-nav.js');?>"></script>

  </body>

</body>
</html>
