<?php

$server ="localhost";
$username ="root";
$password ="";
$database ="zalego";

$conn =mysqli_connect($server ,$username,$password ,$database);
if($conn){
    echo "database connection established";
}
else{
    echo "could not connect to the database";
}





?>