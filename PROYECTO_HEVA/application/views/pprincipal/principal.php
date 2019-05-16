<body style="width:100%;height:100px;overflow:auto;">
  
  <div class="jumbotron">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="http://localhost:8080/PROYECTO_HEVA/img/fb2.jpg" alt="pastel">
          </div>
          <div class="carousel-item">
           <center><img class="d-block w-75" src="http://localhost:8080/PROYECTO_HEVA/img/baner1.jpg" alt="pastel"></center>
          </div>
          <!--<div class="carousel-item">
            <img class="d-block w-100" src="http://localhost:8080/PROYECTO_HEVA/img/carrusel03.jpg" alt="pastel">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://localhost:8080/PROYECTO_HEVA/img/carrusel04.jpg" alt="pastel">
          </div>-->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>
  <main role="main">
      <div class="container">
        <div class="row featurette">
          <div class="col-md-9">
            <h2 class="featurette-heading text-danger">Rosca <span class="text-muted"></span></h2>
            <p class="lead">Pastel de chocolate con relleno sabor cajeta, cobertura de chantilly con la decoración con nuez y fruta fresca.</p>
          </div>
          <div class="col-md-3">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 230px; height: 250px;" src="<?=base_url()?>img/5.jpg" data-holder-rendered="true">
          </div>
        </div>
        <hr>
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading text-danger">Pastel de chocoretas <span class="text-muted"></span></h2>
            <p class="lead">Pastel de chocolate, relleno y cubierto por un “frosting” sabor menta y como decoración chocoretas.</p>
          </div>
          <div class="col-md-3 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x300/auto" alt="500x300" src="<?=base_url()?>img/4.jpg" data-holder-rendered="true" style="width: 250px; height: 280px;">
          </div>
        </div>
        <hr>
        <div class="row featurette">  
          <div class="col-md-9">
            <h2 class="featurette-heading text-danger">Ombre cake<span class="text-muted"></span></h2>
            <p class="lead">Pan sabor vainilla con relleno de cajeta, cobertura de chantilly de colores decorada con perlitas.</p>
          </div>
          <div class="col-md-3" style="margin-bottom: 10px">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" src="<?=base_url()?>img/1.jpg" data-holder-rendered="true" style="width: 250px; height: 250px;">
          </div>
        </div>        
        <hr>
        <div class="row featurette">
          <div class="col-md-8 order-md-2">
            <h2 class="featurette-heading text-danger">Pastel natural <span class="text-muted"></span></h2>
            <p class="lead"> Pan sabor a cereza, cobertura de chantilly con decoración sencilla con cerezas </p>
          </div>
          <div class="col-md-4 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x300/auto" alt="500x300" src="<?=base_url()?>img/2.jpg" data-holder-rendered="true" style="width: 300px; height: 180px;">
          </div>
        </div>
        <hr>
        
      </div> <!-- /container -->
    </main>
</body>
