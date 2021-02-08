<?php


require('config.php');


extract($_POST);


$sql = "INSERT into places VALUES('" . $id. "','" . $name . "','" . $image . "','" .$sinfo. "','" .$dinfo. "','" .$history. "','" .$spec. "','" .$btime. "','" .$location. "','" .$ptype. "')";
#$sql ="INSERT INTO `contactus`(`name`, `email`, `feedback`, `date`) VALUES (['" . $name . "'],['" . $email . "'],['" . $feedb . "'],['" .date('Y-m-d')."'])";

$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Place Added Successfully."; 
?>
