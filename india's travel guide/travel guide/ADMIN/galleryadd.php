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
            <li ><a href="addplace.php">ADD PLACE</a></li>
            <li><a href="#">UPDATE PLACE</a></li>
            <li><a href="#">DELETE PLACE</a></li>
            <li class="active"><a href="galleryadd.php">ADD GALLERY IMAGE</a></li>
            <li><a href="#">DELETE GALLERY IMAGE</a></li>
            <li><a href="admincontact.php">CONTACT FORM(USER FEEDBACK)</a></li>
        </ul>
        <br>

    </div>

    <div class="container-fluid bg-light  ">
        <center>
            <h2>ADD image into gallery</h2>
        </center>
        <form class="form-horizontal" action="gallery_data.php" method="POST" style="padding: 10px;">
            <div class="form-group">
                <label class="control-label col-sm-2" for="id">ID:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" placeholder="Enter ID" name="id" required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="image">select image:</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="name">Place Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                </div>
            </div>
           

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">ADD</button>
                    <button type="RESET" class="btn btn-success">RESET</button>
                </div>
            </div>

        </form>
    </div>





</body>

</html>