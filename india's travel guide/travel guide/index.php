<!doctype html>
<html>

<head>

  <title>Mere Bharat - India's Travel Guide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>

<body>
  <header>


    <nav>
      <div class="logo">
        <h2>Mera Bharat</h2>
        <h6 class="text-light">-india's travel guide</h6>

      </div>
      <div class="menu">

        <a href="index.php" class="middle">Home</a>

        <div class="dropdown">
          <button class="dropbtn" style="font-weight:bold;">DESTINATION</button>
          <div class="dropdown-content">
            <a href="php/popular.php">Popular </a>
            <a href="php/historical.php">Historical</a>
            <a href="php/museum.php">Museum</a>
            <a href="php/DESTINATION.php">All Destinations</a>
          </div>
        </div>

        <a href="php/gallery.php" class="middle"> Gallery </a>
        <a href="aboutindia.htm" class="middle"> About </a>
        <a href="php/contact.php" class="middle"> Contact us </a>


      </div>

    </nav>



    <main>
      <section>
        <h3>Welcome To India</h3>
        <h1>DO COME &amp; VISIT <span class="change_content"></span></h1>
        <p>"India once is not enough"</p>
       
      </section>
    </main>
  </header>
  <p class="container-fluid info ">
    <span style="font-size: 35px;">India</span> is One of the oldest civilisations in the world, India is a mosaic of multicultural experiences. With a rich
    Historical and myriad attractions, the country is among the most popular tourist destinations in the world. It
    covers an area of 32, 87,263 sq. km, extending from the snow-covered Himalayan heights to the tropical rain
    forests of the south. As the 7th largest country in the world, India stands apart from the rest of Asia, marked
    off as it is by mountains and the sea, which give the country a distinct geographical entity.

    Fringed by the Great Himalayas in the north, it stretches southwards and at the Tropic of Cancer, tapers off
    into the Indian Ocean between the Bay of Bengal on the east and the Arabian Sea on the west. As you travel the
    expanse of the country, you are greeted by diverse nuances of cuisines, faiths, arts, crafts, music, nature,
    lands, tribes, history and adventure sports. India has a mesmeric conflation of the old and the new. As the
    bustling old bazaars rub shoulders with swanky shopping malls, and majestic monuments accompany luxurious
    Historical hotels, the quintessential traveller can get the best of both worlds. Head to the mountains, enjoy a
    beach retreat or cruise through the golden Thar, India has options galore for all.
    <a class="bg-light" href="aboutindia.htm"> know more</a>
  </p>
  
  <center>
    <h1>Popular in India</h1>
  </center>
  <div id="carouselExampleIndicators" class="carousel slide m-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="curousal images/pi1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>TAJ MAHAL</h5>
          <p>AGRA</p>
        </div>
      </div>
      <div class="carousel-item ">
        <img class="d-block w-100" src="curousal images/pi2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>GATE WAY OF INDIA </h5>
          <p>MUMBAI</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="curousal images/pi3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>COLA BEACH </h5>
          <p>GOA </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="curousal images/pi4.jpg" alt="FORTH slide">
        <div class="carousel-caption d-none d-md-block">

          <h5>GOLDEN TEMPLE </h5>
          <p>AMRISTER </p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="curousal images/pi5.jpg" alt="FIFTH slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>STATUE OF UNITY </h5>
          <p>GUJRAT</p>
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
  <center>
    <h1>Must vist destinations</h1>
  </center>
  <div class="row p-1 m-1 bg-dark">

    <?PHP

    $con = mysqli_connect('sql113.unaux.com', 'unaux_27475705', 'blfh5qvuc');
    mysqli_select_db($con, 'unaux_27475705_travel_guide');
    

    $query = "SELECT `id`, `name`, `image`, `info` ,`type` FROM `places` WHERE `type`='popular' limit 4";
    $queryfire = mysqli_query($con, $query);
    $num = mysqli_num_rows($queryfire);
    if ($num > 0) {
      while ($place = mysqli_fetch_array($queryfire)) {
        $id = $place['id'];
        $type = $place['type'];
    ?>

        <div class="col-lg-3 col-md-3 col-sm-12">

          <div class="card ca">


            <div class="card-body" style="border: 3px solid yellow;">
              <a href="php/p.php?id1=<?php echo $id; ?>&type=<?php echo $type; ?>">
                <img src="places/<?php echo $place['image']; ?>" alt="image" style="height: 300px;width:400px" class="img-fluid">
              </a>
              <center>
                <h6 class="card-title  bg-info p-2 text-white"> <?php echo $place['name']; ?></h6>
              </center>
              <p class="p " style="height: 145px;"><?php echo $place['info']; ?></p>
              
            </div>

          </div>




        </div>

    <?php

      }
    }
    ?>


  </div>
  <a style="float: right;" href="php/popular.php">VIEW MORE</a>
  <br>
  







 
  <!-- Footer -->
<footer class="page-footer font-small  pt-4" style="background:linear-gradient( orange 25%, white 50%, green 75%,white 1%);">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase text-white">Mera Bharat</h5>
      <p>Here you can Explore India Virtually.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase ">Links</h5>

      <ul class="list-unstyled ">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="aboutindia.htm">About India</a>
        </li>
        <li>
          <a href="php/gallery.php">Gallery</a>
        </li>
        <li>
          <a href="php/contact.php">Contact us</a>
        </li>
      </ul>

    </div>
    
   

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="index.php"> MERA BHARAT</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->



</body>

</html>