<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($server,$username,$password,$database);

if($conn){
    echo "Sucess";
}
else{
    die("Error".mysqli_connect_error());
}

?>