<!-- nav bar of website  -->
<style>
    <?php require 'static/css/nav.css' ?>
</style>
<?php 
#session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true){
    $loggedin = false;
}
else{
    $loggedin = true;
}

echo 
'<nav id="navbar" class="site-handler">
    <div class="nav-container"> 
        <ul class="nav-list">
            <li class="element"><a href="/programs/Php_Projects/Login_System">Home</a></li>
            <li class="element"><a href="">Events</a></li>
            <li class="element"><a href="">Services</a></li>
            <li class="element"><a href="">Contact us</a></li>
            <li class="element"><a href="">About</a></li>
        </ul>
        <ul class="nav-list log">';
            if (!$loggedin) {
            echo '<li class="element"><a href="/programs/Php_Projects/Login_System/login.php">Login</a></li>
            <li class="element"><a href="/programs/Php_Projects/Login_System/signup.php">Sign up</a></li>';
            }
            if ($loggedin) {
            echo '<li class="element"><a href="/programs/Php_Projects/Login_System/logout.php">Logout</a></li>';
            }

       echo '</ul>
    </div>
</nav>';

?>