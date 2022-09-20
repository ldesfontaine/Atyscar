<?php
  session_start();
  require('registration/config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="ATYSCAR.css">
  <link rel="shortcut icon" href="m/car.jpg"/>
  <title></title>
</head>
  <?php
    require_once('header.php');
    require_once('navbar.php');
  ?>
  <body>

<?php
  if (isset($_REQUEST['prenom'], $_REQUEST['email'], $_REQUEST['tel'], $_REQUEST['Message'])){
  $prenom =stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($conn, $prenom);

  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);

  $tel = stripslashes($_REQUEST['tel']);
  $tel = mysqli_real_escape_string($conn, $tel);

  $Message = stripslashes($_REQUEST['Message']);
  $Message = mysqli_real_escape_string($conn, $Message);

  $query = "INSERT into `contact` (prenom, email, tel, Message) VALUES (?,?,?,?)";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ssss", $prenom, $email, $tel, $Message);
  $res = $stmt->execute();
  if($res){
    echo "<div class='sucess'>
          <h3>Votre message a été envoyé avec succès.</h3>
          <p>Cliquez ici pour vous <a href='contact.php'>retourner</a></p>
    </div>";
  }}
  else{
?>
    <div class="body">
    <form>
      <h1>Contactez-nous</h1>
      <div class="separation"></div> <!-- Barre bleu de séparation-->

      <div class="corps-formulaire">
        <div class="gauche">
          <div class="groupe">
            <label>Votre Prénom</label>
            <input type="text" name="prenom" id="prenom" required>
          </div>

          <div class="groupe">
            <label>Votre adresse e-mail</label>
            <input type="text" autocomplete="off" name="email" id="email" required>
          </div>

          <div class="groupe">
            <label>Votre téléphone</label>
            <input type="text" name="tel" id="tel">
          </div>
          
        </div>
        <div class="droite">
          <div class="groupe">
            <label>Message</label>
            <textarea placeholder="Saisissez ici..." name="Message" id="Message" required></textarea>
          </div>
        </div>
      </div>
      <div class="pied-formulaire" align="center">
        <button>Envoyer le message</button>
      </div>
    </form>
    </div>

<?php
  }
?>
</body>
</html>
