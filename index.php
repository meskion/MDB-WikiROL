<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>rol wiki</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/3gems.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include 'phpFragments/header.php'; ?>
  <!-- Start your project here-->
  <div class=" container-fluid ">

    <div class="row my-0">
      <!-- Jumbotron destacando una pagina de la wiki-->
      <div class="col-sm-12 col-md-12 col-lg-12 jumbotron" id="mainJumbo">
        <div class="jumboWrap">
          <h1 class="display-4">La ciudad Estrella</h1>
          <p class="lead"><em> Campaña destacada</em></p>
          <hr class="my-2">
          <p>Al este del bosque real, se encuentra esta curiosa ciudad llena de misterios</p>
          <p class="lead">
            <a class="btn btn-red btn-lg" href="pages/campaign_starCity.php" role="button">Saber mas</a>
          </p>
        </div>
      </div>
    </div>
    <hr>
    <div class="row mt-0">
      <!--row con tarjetitas de contenido-->


      <div class="col-lg-4 col-sm-10 col-md-10 offset-md-1 offset-lg-0 ">
        <div class="cardWrap">
          <!--video de una partida de rol-->

          <div class=" embed-responsive embed-responsive-16by9">

            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZeLPOzsONFk" allowfullscreen></iframe>


          </div>
          <h3 class="card-title p-3">Partida de DnD Destacada</h3>
        </div>

      </div>
      <hr class="hidden-lg">
      <div class="col-lg-4 col-sm-10 col-md-5 offset-md-1 offset-lg-0">
        <!--Carousel de bichos-->
        <div class="cardWrap">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="pages/place_holder.php">
                  <img class="d-block  w-100" src="img/characters/golem.png" alt="First slide">
                </a>
                <div class="carousel-caption">
                  <h5>Golem</h5>
                </div>
              </div>
              <div class="carousel-item">
                <a href="pages/bichos/clerigo.php">
                  <img class="d-block w-100" src="img/characters/clerigo1.png" alt="Second slide">
                </a>
                <div class="carousel-caption">
                  <h5>Clerigo</h5>
                </div>
              </div>
              <div class="carousel-item">

                <a href="pages/place_holder.php">
                  <img class="d-block w-100" src="img/characters/Shoosuva.png" alt="Third slide">
                </a>
                <div class="carousel-caption">
                  <h5>Shoosuva</h5>
                </div>
              </div>
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
          <h3 class=" card-title p-3">Entradas populares de la semana</h3>
        </div>
      </div>
      <!--Novedades, un par de cards de rolup y rol20, la primera campaña, etc-->
      <div class="col-lg-4 col-sm-10 col-md-5 my-3">
        <!-- roll20 Card -->
        <div class="card">

          <!-- Card image -->
          <div class="view overlay">
            <img class="card-img-top" src="https://roll20.net/v3/assets/img/screens/hero-vtt@2x.png" alt="Card image cap">
            <a href="https://roll20.net/">
              <div class="mask rgba-grey-strong"></div>

            </a>
          </div>

          <!-- Card content -->
          <div class="card-body">

            <!-- Title -->
            <h3 class="card-title">Roll20</h3>
            <!-- Text -->
            <p class="card-text">motor donde poder jugar partidas de rol desde la comodidad de tu casa</p>
            <!-- Button -->
            <a href="https://roll20.net/" class="btn btn-red">ir</a>


          </div>

        </div>
        <!-- Card -->

      </div>
    </div>



    <?php include 'phpFragments/footer.php'; ?>

    <!-- Grid row-->

  </div>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>

</html>