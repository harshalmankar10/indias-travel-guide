<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="cardslider.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="..\css/style.css">
    <link rel="stylesheet" type="text/css" href="..\css/styled.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>Destination</title>


</head>

<body >

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    
    <nav class="h-nav bg-dark">
      <div class="logo">
        <h2 class="animated infinite heartbeat">Mera Bhrat</h2> 
        <h6 class="text-light">-india's travel guide</h6>
       

      </div>
      <div class="menu v-class">
        
        <a href="../index.php" class="middle">Home</a>

        <div class="dropdown">
          <button class="dropbtn" style="font-weight:bold;font-size: 20px;">DESTINATION</button>
          <div class="dropdown-content">
            <a href="popular.php">Popular </a>
            <a href="#">Heritage</a>
            <a href="#">Museum</a>
            <a href="DESTINATION.php">All Destinations</a>
          </div>
        </div>

        <a href="gallery.php" class="middle"> Gallery </a>
        <a href="#" class="middle"> About </a>
        <a href="#" class="middle"> Contact us </a>


      </div>
      <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>

    </nav>
   
  

    <div class="container-fluid m-3 jumbotron   " id="d1">

        <?PHP
        $t = $_GET['id1'];
        $type=$_GET['type'];
        

        $con = mysqli_connect('sql113.unaux.com', 'unaux_27475705', 'blfh5qvuc');
        mysqli_select_db($con, 'unaux_27475705_travel_guide');


        

        $query = "SELECT `id`, `name`, `image`, `info`, `dinfo`, `history`, `speciality`, `tbtime`, `location` ,`type` FROM `places` WHERE `id`=$t and `type`='$type' LIMIT 1 ";
        $queryfire = mysqli_query($con, $query);
        $num = mysqli_num_rows($queryfire);


        if ($num > 0) {
            while ($place = mysqli_fetch_array($queryfire)) {
        ?>

                <div class="para bg-light">


                    <h1 class="col-lg-10 col-md-8 col-sm-3 h1 p-3 bg-info text-white  text-center "><?php echo $place['name']; ?></h1>
                    <img id="i1" src="../places/<?php echo $place['image']; ?>" height="60%" width="83.5%" class="img-fluid" alt="Responsive image"><br>



                      
                    
                    <p class="p1 col-lg-10 p-4"><?php echo $place['dinfo']; ?></p>
                    
                    <h1 class=" h1 p-4 font-weight-bold text-info">History</h1>
                     <p class="p1 col-lg-10"><?php echo $place['history']; ?></p>

                 
                    <h1 class=" h1 p-4 font-weight-bold text-info" >Speciality</h1>
                    <p class="p1 col-lg-10"><?php echo $place['speciality']; ?></p>

                    <h1 class="h1 p-4 font-weight-bold text-info">Best time to visit </h1>
                    <p class=" p1 col-lg-10"><?php echo $place['tbtime']; ?></p>

                    <h1 class="  h1 p-4 font-weight-bold text-info">Location</h1>
                    <p class="p1 col-lg-10"><?php echo $place['location']; ?></p>






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
      <h5 class="text-uppercase text-white">Mera Bharat</h5>
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
<div class="footer-copyright text-center py-3  text-dark">© 2020 Copyright:
  <a href="index.php"> MERA BHARAT</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

    


</body>

</html>