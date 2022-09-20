<?php
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../ATYSCAR.css">
  <link rel="shortcut icon" href="../m/car.jpg"/>
  <title>S'enregistrer</title>
</head>
<?php
  require_once('../header.php');
  require_once('../navbar.php');
?>
<body>

<?php

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);
  $password = hash('sha256',mysqli_real_escape_string($conn, $password));
  
  //requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (username, email, password) VALUES (?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $email, $password);
  // Exécuter la requête sur la base de données
    $res = $stmt->execute();
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{

?>


<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header" >Inscription</h2>

  <form class="login-container" action="" method="POST">
    <p><input type="text"  placeholder="Nom d'utilisateur" name="username" required ></p>
    <p><input type="email" placeholder="Email" name="email" required></p>
    <p><input type="password" placeholder="Password" name="password" required></p>
    <p><input type="submit" value="S'enregistrer"></p>
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
  </form>
</div>


</form>
<?php } ?>













</body>
</html>