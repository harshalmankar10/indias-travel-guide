<!doctype html>
<html lang="en">

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
            <li><a href="admin.php">Home</a></li>
            <li class="active"><a href="addplace.php">ADD PLACE</a></li>
            <li><a href="update_place.php">UPDATE PLACE</a></li>
            <li><a href="#">DELETE PLACE</a></li>
            <li><a href="#">ADD GALLERY IMAGE</a></li>
            <li><a href="#">DELETE GALLERY IMAGE</a></li>
            <li><a href="admincontact.php">CONTACT FORM(USER FEEDBACK)</a></li>
        </ul>
        <br>

    </div>

    <div class="form" action="update_place.php" method="post">
        <label for="i1">enter place name:</label>
        <input type="text" id="i1" >
        <input type="submit" value="submit">
    </div>

    <?PHP
     
   

    $con = mysqli_connect('sql113.unaux.com', 'unaux_27475705', 'blfh5qvuc');
    mysqli_select_db($con, 'unaux_27475705_travel_guide');

    



    $query = "SELECT `id`, `name`, `image`, `info`, `dinfo`, `history`, `speciality`, `tbtime`, `location` ,`type` FROM `places` WHERE `id`=1  LIMIT 1 ";
    $queryfire = mysqli_query($con, $query);
    $num = mysqli_num_rows($queryfire);


    if ($num > 0) {
        while ($place = mysqli_fetch_array($queryfire)) {
    ?>

            <div class="container-fluid bg-light  ">
                <center>
                    <h2>Update PLACE</h2>
                </center>
                <form class="form-horizontal" action="place_data.php" method="POST" style="padding: 10px;">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="id">ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="id"  name="id" value="<?php echo $place['id']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Place Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $place['name'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="image">image:</label>
                        <img  src="..\places/<?php echo $place['image']; ?>">
                        <div class="col-sm-10">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sinfo">short info:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="sinfo"  cols="30" rows="10" name="sinfo"><?php echo $place['info']; ?></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="dinfo">detailed info:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="dinfo"  cols="30" rows="10" name="dinfo" > <?php echo $place['dinfo']; ?></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="history">History of Place:</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="history"  cols="30" rows="10" name="history" required><?php echo $place['history']; ?></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="spec">Speciality :</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="spec"   cols="30" rows="10" name="speciality" required><?php echo $place['speciality']; ?></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="btime">Best time</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="btime"  cols="30" rows="10" name="btime" ><?php echo $place['tbtime']; ?></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="location">Location</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="location" cols="30" rows="10" name="location"  ><?php echo $place['location']; ?></textarea>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ptype">place Type:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ptype" name="ptype"  value="<?php echo $place['type']; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">update</button>
                            
                        </div>
                    </div>

                </form>
        <?php

        }
    }
        ?>
            </div>





</body>

</html>