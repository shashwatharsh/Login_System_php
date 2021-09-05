<?php
$showalert =false;
$showerr = false;
$exist = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $exist = false;
    $existsql = "SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($conn,$existsql);
    $noOfRow = mysqli_num_rows($result);
    if ($noOfRow > 0) {
        $exist = true;
    }
    else{
        $exist = false;
    if (($password==$cpassword)) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` ( `name`, `email`, `password`, `datetime`) VALUES ( '{$uname}', '$email', '$hash', current_timestamp())";
        $result = mysqli_query($conn,$sql);
        if ($result) {
            $showalert = true;
        }else{
            $showerr = true;
        }
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/sign.css">
    <title>Signup page</title>
</head>
<body style="margin:0px;">
<?php require 'partials/nav.php' ?>
<div class="container" style=" margin: auto;width: 100%;text-align: center;">
    <h1 style="justify-content:center;">Signup Page</h1>
    <form action="signup.php" method="post" class="form-c">
        <div class="form-grp">
        <label for="uname">Name</label>
        <input type="text" name="uname" class="form-elem" id="in1">
        </div>
        <div class="form-grp">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-elem" id="in2">
        </div>
        <div class="form-grp">
            <label for="password">Password</label>
            <input type="password" name="password" id="in3" class="form-elem">
        </div>
        <div class="form-grp">
            <label for="cpassword">Conform Password</label>
            <input type="password" name="cpassword" id="in4" class="form-elem">
        </div>
        <div class="form-grp">
            <!-- <label for="submitb">Submit</label> -->
            <input type="submit" value="Submit" style="margin-right: 120px;">
        </div>
    </form>
    </div>
    <?php
    if ($showalert==true) {
        echo "<script>
        alert('Success!');
        console.log('Success');
        </script>";
    } 
    if ($showerr==true) {
        echo "<script>
        alert('Error! Password does not match.');
        console.log('Error, check your password.');
        </script>";
    } 
    if ($exist==true) {
        echo "<script>
        alert('You are already registered with this email try different mail.');
        console.log('Email already exists');
        </script>";
    } 
     ?>
</body>
</html>