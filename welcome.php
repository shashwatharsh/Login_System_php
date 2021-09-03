<?php
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    header('location: Login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require 'partials/nav.php' ?>
<!-- Have to print my name here -->
    <h1>Pranam <?php #echo $_SESSION['name'] ?></h1>
    <p>hi there, shashwat here, I am shashwat harsh and i am hrer to share some insights about my projects and about some programming languages</p>
    <p>You can logout via this <a href="logout.php">link</a></p>
</body>
</html>