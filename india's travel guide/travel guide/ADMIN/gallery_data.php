<?php


require('config.php');


extract($_POST);


$sql = "INSERT into gallery VALUES('" . $id. "','" . $image . "','" . $name . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "image Added Successfully."; 
?>