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


    <nav class="h-nav bg-info">
        <div class="logo">
            <h2 class="animated infinite heartbeat">Mera Bhrat</h2>
            <h6 class="text-light">-india's travel guide</h6>


        </div>
        <div class="menu v-class">

            <a href="../index.php" class="middle">Home</a>

            <div class="dropdown">
                <button class="dropbtn" style="font-weight:bold;font-size: 20px;">DESTINATION</button>
                <div class="dropdown-content">
                    <a href="places/popular.php">Popular </a>
                    <a href="places/historical.php">Historical</a>
                    <a href="places/museum.php">Museum</a>
                    <a href="places/DESTINATION.php">All Destinations</a>
                </div>
            </div>

            <a href="gallery.php" class="middle"> Gallery </a>
            <a href="../aboutindia.htm" class="middle"> About </a>
            <a href="contact.php" class="middle"> Contact us </a>


        </div>


    </nav>

    <div class="container-fluid bg-light p-3 m-2">
        <center><h2>CONTACT US FORM</h2></center>
        <form class="form-horizontal" action="pro.php" method="POST">
        <div class="form-group">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="feedb">Feedback:</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="feedb" placeholder="Write Feedback/Suggesstions"  cols="30" rows="10" name="feedb" required></textarea>
                    
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-success">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <br>
<br>
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

      <ul class="list-unstyled  ">
        <li>
          <a href="../index.php">Home</a>
        </li>
        <li>
          <a href="../aboutindia.htm">About India</a>
        </li>
        <li>
          <a href="gallery.php">Gallery</a>
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
<div class="footer-copyright text-center py-3 bg-dark text-light">© 2020 Copyright:
  <a href="index.php"> MERA BHARAT</a>
</div>

<!-- Copyright -->

</footer>
<!-- Footer -->

</body>