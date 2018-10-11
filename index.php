<!DOCTYPE html>
<html lang="pt">
<head>
  <!-- Configurações do site -->
  <title>Redes Comunitárias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link href="fonts/Montserrat" rel="stylesheet" type="text/css">
  <link href="fonts/Lato" rel="stylesheet" type="text/css">
  <script src="js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
    /* mudar cor de onde tá o nome grande */
  .jumbotron {
    background-image: url(/img/baner2.png);
    background-position: 0% 120%;
    background-size: cover;
    background-repeat: no-repeat; 
       background-color: #0d6770;
      color: #b2d4c7;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #0d6770;
      font-size: 50px;
  }
  .logo {
      color: #0d6770;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #0d6770;
  }
  .carousel-indicators li {
      border-color: #0d6770;
  }
  .carousel-indicators li.active {
      background-color: #0d6770;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #0d6770; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #0d6770;
      background-color: #fff !important;
      color: #0d6770;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #0d6770 !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #0d6770;
      color: #fff;
  }

     /* configurações do primeiro painel la em cima (header) */ 
  .navbar {
      margin-bottom: 0;
     /*background-image: url(/img/fundo2b.jpg);
      background-position: 10% 70%;
    background-size: cover;
    background-repeat: no-repeat; */
      /* background-image: linear-gradient(to bottom right, #428ade, #2057a1); */
      background-color: #112c22;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }

  /* cor da fonte no header */
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #0d6770 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #0d6770;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"> <span ></span> </a>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">REDES MESH</a></li>
        <li><a href="#services">SERVIDORES LOCAIS</a></li>
        <li><a href="#portfolio">MEUS PROJETOS</a></li>
        <li><a href="#contact">CONTATO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>REDES COMUNITÁRIAS</h1> 
  <p><strong>Criando infraestruturas de Comunicação Autônomas</strong></p> 
  <!--  
  <form>
    <div class="input-group">git clone https://github.com/letsencrypt/letsencrypt
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
  -->
</div>

<!-- Container (Sobre) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <h2>APROPRIAÇÃO TECNOLÓGICA</h2><br>
      <h4>A idéia é fazer um debate tecnopolítico da construção de <em>Redes Comunitárias</em> 
      com o objetivo de democratizar o acesso a comunicação com a apropriação tecnológica no processo</h4><br>
      <h4> Nesse sentido temos tentado, por exemplo, criar material didático <a href="basico.html">acessível</a>.<h4>
    </div>

        <div class="col-md-4">
        
          <div class="thumbnail">
            <a href="/img/apropria.png">
            <img src="/img/apropria.png" alt="apropria" style="width:100%">
            <div class="caption"></div>
            </a>
          </div>
        
        </div>
  </div>
</div>

<!-- Container (Libremesh) -->
<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
    
    <!-- <div class="col-md-4"> -->
        
        <div>
          <a href="/img/meshnetwork.png">
          <img src="/img/meshnetwork.png" alt="mesh" style="width:100%">
            <div class="caption">
            </div>
            </a>
        </div>
    
    
        <!-- <img class="img-rounded" src="/img/mesh.png" alt="apropria" width="394" height="195"> -->
    
    </div>
    <div class="col-sm-4">

       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Configurar uma rede em malha</button>
      <div id="demo" class="collapse">
      <h4>Utilizar roteadores domésticos com sofisticados protocolos para viabilizar uma topologia mesh. Fazemos isso modificando os roteadores e colocando um novo firmware criado através do Libremesh. 
      Consulte na nossa wiki um <a href="https://amlogic.lan/wiki/doku.php?id=redes_mesh" target=“_blank” class="alert-link">tutorial completo.</a> <h4>
      </div>
    </div>
    <div class="col-sm-4">

       <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Configurar um mini servidor local</button>
      <div id="demo2" class="collapse">
      <h4>Podemos usar embarcados como raspberry ou até 
      os "TvBox" (com armbian) muito utilizados na falta de smartTvs.
      Que também tem um <a href="https://amlogic.lan/wiki/doku.php?id=servidor_local" target=“_blank” class="alert-lnik">tutorial completo.</a><h4>
      </div>
      
    </div>
  </div>
</div>

<!-- Container (Libremesh) -->
<div id="libremesh" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>COMO FUNCIONA O LIBREMESH</h2><br>
      <p>Libremesh é uma estrutura modular para criação de firmwares baseados em LEDE/OpenWrt para criar redes em malha sem fio</p><br>
      <ul>
      <li>BATMAN - Nuvem de camada 2</li>
      <li>BMX - Rede de camada 3</li>   
      </ul>
      <p><a href="/pdf/libremesh.pdf" target=“_blank” class="alert-link">saiba mais.</a><p>
      
    
   
    </div>
        <div class="col-sm-4">
         
         <img src="network1.png" class="img-rounded" alt="mesh" width="304" height="236">

        <!-- <span class="glyphicon glyphicon-cloud logo"></span> -->
        </div>
  </div>


</div>

<!-- Container (Apps Locais) -->
<div id="services" class="container-fluid text-center bg-grey">
  <h2>SERVIÇOS LOCAIS</h2>
  <h4>Podemos ter diferentes Serviços Locais</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-book logo-small"></span>
      <h4>BIBLIOTECA</h4>
      <p>Biblioteca para compartilhamento de material Virtual</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tasks logo-small"></span>
      <h4>ORGANIZADOR DE TAREFAS</h4>
      <p>Podemos ter apps de ortanização dos projetos desenvolvidos</p>
      <p><a href="https://amlogic.lan/notas" target=“_blank” class="alert-link">Notas.</a> <p> 
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-send logo-small"></span>
      <h4>DIVERSÂO</h4>
      <p>Aplicativos para se divertir</p>
      <p><a href="https://amlogic.lan/tetris" target=“_blank” class="alert-link">Jogos.</a> <p> 

    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>REDE SOCIAL</h4>
      <p>Rede social local com layout "facebook" com contéudo didático</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo-small"></span>
      <h4>WIKI</h4>
      <p>Serviço de layout do tipo wiki para temas e diciplinas</p>
      <p><a href="https://amlogic.lan/wiki" target=“_blank” class="alert-link">wiki.</a> <p> 

    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-calendar logo-small"></span>
      <h4 style="color:#303030;">CALENDÁRIO</h4>
      <p>Calendário coletivo pra que todos tenham as datas ao seu alcance</p>
    </div>
  </div>
</div>

<!-- Container (Sobre os Projetos) -->
<div id="portfolio" class="container-fluid text-center">
  <h2>Meus Projetos</h2><br>
  <h4>Parceiros</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sitio.png" alt="Paris" width="400" height="300">
        <p><strong>Sitio Do Astronauta</strong></p>
        <p> Facebook e Instagram</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="pandavas.png" alt="Pandavas" width="400" height="300">
        <p><strong>Instituto Pandavas</strong></p>
        <p>institutopandavas.org</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="coolab.png" alt="Coolab" width="400" height="300">
        <p><strong>Coolab</strong></p>
        <p>coolab.org</p>
      </div>
    </div>
  </div><br>
  
  <h2>Histórias para Contar</h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>Uma emocionante Visita Técnica aos povos Wapichan na Guiana.
        <p><a href="blog/#wapichan" target=“_blank” class="alert-lnik"> saiba mais.</a></h4></p>
      </div>
      <div class="item">
        <h4>Participamos da primeira Cúpula Latino América de Redes Comunitárias
        <p><a href="blog/#cupula" target=“_blank” class="alert-lnik"> saiba mais.</a></p></h4>
      </div>
      <div class="item">
        <h4>Visita da última turma
        <p><a href="galeria.html" target=“_blank” class="alert-lnik"> confira.</a></p>
        </h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- Container (Contato) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTATO</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Entre em contato.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Monteiro Lobato, SP</p>
      <p><span class="glyphicon glyphicon-phone"></span> 15 996617952</p>
      <p><span class="glyphicon glyphicon-envelope"></span> hiure@riseup.net</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
