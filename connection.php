<?php

$con=new mysqli('localhost', 'root', '', 'excercisecrud');
if(!$con){
    die(mysqli_error($con));
}
?>