<?php

$server ="localhost";
$username ="root";
$password ="";
$database ="web2";

$conn =mysqli_connect($server ,$username,$password ,$database);
if($conn){
    echo "database connection established";
}
else{
    echo "could not connect to the database";
}





?>