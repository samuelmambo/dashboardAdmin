<?php

$server ="localhost";
$username ="root";
$password ="";
<<<<<<< HEAD
$database ="web2";
=======
$database ="zalego";
>>>>>>> 682c45d6ca5487293d8cd277fd972891fa1ac256

$conn =mysqli_connect($server ,$username,$password ,$database);
if($conn){
    echo "database connection established";
}
else{
    echo "could not connect to the database";
}





?>