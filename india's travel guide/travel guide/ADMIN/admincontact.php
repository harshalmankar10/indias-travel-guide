<html>

<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    
</head>

<body>

   
<div class="container">
  <h3>ADMIN PANEL</h3>
  <ul class="nav nav-tabs">
    <li ><a href="admin.php">Home</a></li>
    <li><a href="addplace.php">ADD PLACE</a></li>
    <li><a href="update_place.php">UPDATE PLACE</a></li>
    <li><a href="#">DELETE PLACE</a></li>
    <li><a href="galleryadd.php">ADD GALLERY IMAGE</a></li>
    <li><a href="#">DELETE GALLERY IMAGE</a></li>
    <li class="active"><a href="admincontact.php">CONTACT FORM(USER FEEDBACK)</a></li>
  </ul>
  <br>
  
</div>
    
       
        
    




    <div class="container p-5 jumbotron scrollable">
    <table class="table table-dark table-hover table-bordered">
                <thead>
                  <tr>
                  <th>Name</th>
                  <th>Email id</th>
                  <th>feedback</th>
                  <th>Date</th>
                  </tr>
                </thead>
        


        <?PHP

$con = mysqli_connect('sql113.unaux.com', 'unaux_27475705', 'blfh5qvuc');
mysqli_select_db($con, 'unaux_27475705_travel_guide');


        $query = "SELECT `name`, `email`, `feedback`, `date` FROM `contactus` WHERE 1 ";
        $queryfire = mysqli_query($con, $query);
        $num = mysqli_num_rows($queryfire);




        if ($num > 0) {
            while ($place = mysqli_fetch_array($queryfire)) {



        ?>
          
            
            
                <tbody>
                   <tr>
                   <td><?php echo $place['name']; ?></td>
                   <td><?php echo $place['email']; ?></td>
                   <td><?php echo $place['feedback']; ?></td>
                   <td><?php echo $place['date']; ?></td>
                   </tr>
                </tbody>
            
            
         



        <?php

            }
        }
        ?>

    </table>
    </div>
    



</body>

</html>