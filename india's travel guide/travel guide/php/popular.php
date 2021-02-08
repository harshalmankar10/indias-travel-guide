<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="..\css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <title>Destination</title>
</head>

<body>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  <header class="img-fluid">
    <nav>
      <div class="logo">
        <h1 class="animated infinite heartbeat ">Mera Bharat</h1>
        <h6 class="text-light">-india's travel guide</h6>
      </div>
      <div class="menu">
        <a href="../index.php" class="middle">Home</a>

        <div class="dropdown">
          <button class="dropbtn" style="font-weight:bold;">DESTINATION</button>
          <div class="dropdown-content">
            <a href="popular.php">Popular </a>
            <a href="historical.php">Historical</a>
            <a href="museum.php">Museum</a>
            <a href="DESTINATION.php">All Destinations</a>
          </div>
        </div>

        <a href="gallery.php" class="middle">Gallery</a>
        <a href="../aboutindia.htm" class="middle">About</a>
        <a href="contact.php" class="middle">Contact us</a>
      </div>
    </nav>
    <main>
      <section>
        <h1>Popular Destination</h1>

      </section>
    </main>
  </header>



  <div class="row  jumbotron">

    <?PHP

    $con = mysqli_connect('sql113.unaux.com', 'unaux_27475705', 'blfh5qvuc');
    mysqli_select_db($con, 'unaux_27475705_travel_guide');
   


    $query = "SELECT `id`, `name`, `image`, `info`,`type` FROM `places` WHERE `type`='popular'";
    $queryfire = mysqli_query($con, $query);
    $num = mysqli_num_rows($queryfire);
    if ($num > 0) {
      while ($place = mysqli_fetch_array($queryfire)) {
        $id = $place['id'];
        $type = $place['type'];
    ?>

        <div class="col-lg-3 col-md-3 col-sm-12 bg-light">

          <div class="card">


            <div class="card-body bg-dark text-white">
              <a href="p.php?id1=<?php echo $id; ?>&type=<?php echo $type; ?>">
                <img src="../places/<?php echo $place['image']; ?>" alt="image" style="height: 300px;width:400px" class="img-fluid">
              </a>
              <center>
                <h6 class="card-title  bg-info p-2 text-white"> <?php echo $place['name']; ?></h6>
              </center>
              <p class="container " style="height: 150px;"><?php echo $place['info']; ?></p>
              
            </div>

          </div>




        </div>

    <?php

      }
    }
    ?>


  </div>
  <!-- Footer -->
<footer class="page-footer font-small bg-light  pt-4" style="background:linear-gradient( orange 25%, white 50%, green 75%,white 1%);">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase text-success">Mera Bharat</h5>
      <p>Here you can Explore India Virtually.</p>

    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase ">Links</h5>

      <ul class="list-unstyled  ">
        <li>
          <a href="../index.php">Home</a>
        </li>
        <li>
          <a href="../aboutindia.htm">About India</a>
        </li>
        <li>
          <a href="gallery.php">GALLERY</a>
        </li>
        <li>
          <a href="contact.php">Contact us</a>
        </li>
      </ul>

    </div>
    
   

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3 text-dark">© 2020 Copyright:
  <a href="index.php"> MERA BHARAT</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->




</body>

</html>