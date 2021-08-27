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
<div class="container" style=" margin: auto;width: 100%;text-align: center;">
    <h1 style="justify-content:center;">Signup Page</h1>
    <form action="" method="post">
        <div class="form-grp"></div>
        <label for="uname">Name</label>
        <input type="text" name="uname" class="form-elem" id="in1">
        </div>
        <div class="form-grp">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-elem id="in2">
        </div>
        <div class="from-grp">
            <label for="password">Password</label>
            <input type="password" name="password" id="in3" class="form-elem">
        </div>
        <div class="from-grp">
            <label for="cpassword">Conform Password</label>
            <input type="password" name="cpassword" id="in3" class="form-elem">
        </div>
    </form>
    </div>
</body>
</html>