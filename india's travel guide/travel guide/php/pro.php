<?php


require('config.php');


extract($_POST);


$sql = "INSERT into contactus VALUES('" . $name . "','" . $email . "','" . $feedb . "','" . date('Y-m-d') . "')";
#$sql ="INSERT INTO `contactus`(`name`, `email`, `feedback`, `date`) VALUES (['" . $name . "'],['" . $email . "'],['" . $feedb . "'],['" .date('Y-m-d')."'])";

$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";
?>