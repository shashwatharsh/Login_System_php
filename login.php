<?php
$login =false;
$showerr = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    
        // $sql = "SELECT * FROM users WHERE email ='$email' AND password = '$password'";
        $sql = "SELECT * FROM users WHERE email ='$email'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            while($row=mysqli_fetch_assoc($result)){
                if (password_verify($password,$row['password'])) {
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;
                    header("location: welcome.php");
                }
                else{
                    $showerr = true;
                }
            }
            // $sqln = "SELECT 'name' FROM users WHERE email='$email' AND  password = '$password'";
            // $name = mysqli_fetch_array($sqln);
        
        }else{
            $showerr = true;
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
    <title>Login page</title>
</head>
<body style="margin:0px;">
<?php require 'partials/nav.php' ?>
<div class="container" style=" margin: auto;width: 100%;text-align: center;">
    <h1 style="justify-content:center;">Please Login! </h1>
    <form action="login.php" method="post" class="form-c">
        <div class="form-grp">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-elem" id="in2">
        </div>
        <div class="form-grp">
            <label for="password">Password</label>
            <input type="password" name="password" id="in3" class="form-elem">
        </div>
       
        <div class="form-grp">
            <!-- <label for="submitb">Submit</label> -->
            <input type="submit" value="Submit" style="margin-right: 120px;">
        </div>
    </form>
    </div>
    <?php
    if ($login==true) {
        echo "<script>
        alert('Success! You are logged in.');
        console.log('Success');
        </script>";
    } 
    if ($showerr==true) {
        echo "<script>
        alert('Error! Password does not match.');
        console.log('Error, check your password.');
        </script>";
    } 
     ?>
</body>
</html>