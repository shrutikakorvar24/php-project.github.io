<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "studentregistration";

$con = mysqli_connect($server, $user, $password, $db);

if($con){
    echo "Connection Successful";
}else{
    echo "No connection";
}

?>