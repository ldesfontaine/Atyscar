<header>
<a class="header"><img src="/Atyscar/m/car.jpg"> Loctawatur </a>
<a class="header"><img src="/Atyscar/m/tel.jpg" width="100"> +687 379009&nbsp;</a>
<?php 
if(isset($_SESSION['username'])){

    echo "<a href='/Atyscar/registration/logout.php'><button class='header2'>LOGOUT</button></a>";
}
else{
    echo "<a href='/Atyscar/registration/login.php'><button class='header2'>LOGIN</button></a>";
}
?>
</header>