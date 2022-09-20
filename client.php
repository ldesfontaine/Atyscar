<?php
session_start();
if ($_SESSION['admin'] != 1) {
    header("Location: index.php");
    exit();
}
require_once("registration/config.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="ATYSCAR.css">
    <link rel="stylesheet" type="text/css" href="client.css">
    <link rel="shortcut icon" href="m/car.jpg"/>
    <title>Admin Panel - Fiche Client - Atyscar</title>
</head>
<?php
    require_once("header.php");
    require_once("navbar.php");
?>

<body>

<?php

    if (
    isset($_REQUEST['NumC']) &&
    isset($_REQUEST['NomC']) &&
    isset($_REQUEST['PrenomC']) &&
    isset($_REQUEST['DatNaisC']) &&
    isset($_REQUEST['LieuNaisC']) &&
    isset($_REQUEST['NationaliteC']) &&
    isset($_REQUEST['AdrRueC']) &&
    isset($_REQUEST['AdrVilC']) &&
    isset($_REQUEST['CodPosC']) &&
    isset($_REQUEST['TelC']) &&
    isset($_REQUEST['NumPasC']) &&
    isset($_REQUEST['DatDelPasC']) &&
    isset($_REQUEST['LieuDelPasC']) &&
    isset($_REQUEST['PaysDelPasC']) &&
    isset($_REQUEST['NumPermisC']) &&
    isset($_REQUEST['DatDelPermiC']) &&
    isset($_REQUEST['LieuDelPermisC']) &&
    isset($_REQUEST['CodTypC']) &&
    isset($_REQUEST['AutreAdr']) &&
    isset($_REQUEST['Remarques'])
    ) {

    

    $NumC = stripslashes($_REQUEST['NumC']);
    $NumC = mysqli_real_escape_string($conn, $NumC);

    $NomC = stripslashes($_REQUEST['NomC']);
    $NomC = mysqli_real_escape_string($conn, $NomC);

    $PrenomC = stripslashes($_REQUEST['PrenomC']);
    $PrenomC = mysqli_real_escape_string($conn, $PrenomC);

    $DatNaisC = stripslashes($_REQUEST['DatNaisC']);
    $DatNaisC = mysqli_real_escape_string($conn, $DatNaisC);

    $LieuNaisC = stripslashes($_REQUEST['LieuNaisC']);
    $LieuNaisC = mysqli_real_escape_string($conn, $LieuNaisC);

    $NationaliteC = stripslashes($_REQUEST['NationaliteC']);
    $NationaliteC = mysqli_real_escape_string($conn, $NationaliteC);

    $AdrRueC = stripslashes($_REQUEST['AdrRueC']);
    $AdrRueC = mysqli_real_escape_string($conn, $AdrRueC);

    $AdrVilC = stripslashes($_REQUEST['AdrVilC']);
    $AdrVilC = mysqli_real_escape_string($conn, $AdrVilC);

    $CodPosC = stripslashes($_REQUEST['CodPosC']);
    $CodPosC = mysqli_real_escape_string($conn, $CodPosC);

    $TelC = stripslashes($_REQUEST['TelC']);
    $TelC = mysqli_real_escape_string($conn, $TelC);

    $NumPasC = stripslashes($_REQUEST['NumPasC']);
    $NumPasC = mysqli_real_escape_string($conn, $NumPasC);

    $DatDelPasC = stripslashes($_REQUEST['DatDelPasC']);
    $DatDelPasC = mysqli_real_escape_string($conn, $DatDelPasC);

    $LieuDelPasC = stripslashes($_REQUEST['LieuDelPasC']);
    $LieuDelPasC = mysqli_real_escape_string($conn, $LieuDelPasC);

    $PaysDelPasC = stripslashes($_REQUEST['PaysDelPasC']);
    $PaysDelPasC = mysqli_real_escape_string($conn, $PaysDelPasC);


    $NumPermisC = stripslashes($_REQUEST['NumPermisC']);
    $NumPermisC = mysqli_real_escape_string($conn, $NumPermisC);

    $DatDelPermiC = stripslashes($_REQUEST['DatDelPermiC']);
    $DatDelPermiC = mysqli_real_escape_string($conn, $DatDelPermiC);

    $LieuDelPermisC = stripslashes($_REQUEST['LieuDelPermisC']);
    $LieuDelPermisC = mysqli_real_escape_string($conn, $LieuDelPermisC);

    $CodTypC = stripslashes($_REQUEST['CodTypC']);
    $CodTypC = mysqli_real_escape_string($conn, $CodTypC);

    $AutreAdr = stripslashes($_REQUEST['AutreAdr']);
    $AutreAdr = mysqli_real_escape_string($conn,$AutreAdr);

    $Remarques = stripslashes($_REQUEST['Remarques']);
    $Remarques = mysqli_real_escape_string($conn,$Remarques);

    $query = "INSERT into `client` (NumC, NomC, PrenomC, DatNaisC, LieuNaisC, NationaliteC, AdrRueC, AdrVilC, CodPosC, TelC, NumPasC, DatDelPasC, LieuDelPasC, PaysDelPasC, NumPermisC, DatDelPermiC, LieuDelPermisC, CodTypC ,AutreAdr,Remarques ) Values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("sssssssssssssssssiss", $NumC, $NomC, $PrenomC, $DatNaisC, $LieuNaisC, $NationaliteC, $AdrRueC, $AdrVilC, $CodPosC, $TelC, $NumPasC, $DatDelPasC, $LieuDelPasC, $PaysDelPasC, $NumPermisC, $DatDelPermiC, $LieuDelPermisC, $CodTypC,$AutreAdr,$Remarques);
        $res = $stmt->execute();
        if($res){
            echo "<div class='form'>
            <h2>Inscription effectuée</h2>
            <label>Vous aller etre redirigé vers le formulaire client   </label>";
            header ("Refresh: 6;URL=client.php");;
        }
    }
    }
    else{ ?>
 

<form action="" method="post">
<span>
    <h2 align="center">Infromation Client</h2> 
    <div class="container">
        <input type="text" class="child" autocomplete="on" placeholder="Num Client" name="NumC" required >
        <input type="text" class="child" autocomplete="on" placeholder="Nom Client" name="NomC" required >
        <input type="text" class="child" autocomplete="on" placeholder="Prenom Client" name="PrenomC" required >
        <input type="date" class="child" autocomplete="on" placeholder="Date de naissance" name="DatNaisC" required>
        <input type="text" class="child" autocomplete="on" placeholder="Lieu de naissance" name="LieuNaisC" required >
        <input type="text" class="child" autocomplete="on" placeholder="Nationalite" name="NationaliteC" required >
        <input type="text" class="child" autocomplete="on" placeholder="Adresse" name="AdrRueC" required >
        <input type="text" class="child" autocomplete="on" placeholder="Ville" name="AdrVilC" required >
        <input type="text" class="child" autocomplete="on" placeholder="Code postale" name="CodPosC" required >
        <input type="text" class="child" autocomplete="on" placeholder="Telephone" name="TelC" required >
    </div>
</span>  

<br>

<span>
    <h2 align="center">Passport</h2>
    <div class="container">
        <input type="text" class="child" placeholder="Num Passport" name="NumPasC" required >
        <input type="date" class="child" placeholder="Date de délivrance" name="DatDelPasC" required >
        <input type="text" class="child" placeholder="Lieu de délivrance" name="LieuDelPasC" required >
        <input type="text" class="child" placeholder="Pays de délivrance" name="PaysDelPasC" required >
    </div>
</span>

<br>
<div align="center">
<span>
<h2>Permis de conduire</h2>
<input type="text"  placeholder="Numéro de permis" name="NumPermisC" required >
<input type="date"  placeholder="Date de délivrance" name="DatDelPermiC" required >
<input type="text"  placeholder="Pays de délivrance" name="LieuDelPermisC" required >

<h2>Type</h2>
<select id="CodTypC" name="CodTypC" class="taille">
    <option value="1">particulier</option>
    <option value="2">entreprise</option>
    <option value="3">privilégié</option>
</select>

</span>

<h2>Information Optionel</h2>
<input type="text" class="child" autocomplete="on" placeholder="Autre Adresse *" name="AutreAdr">
<input type="text" class="child" autocomplete="on" placeholder="Remarques *" name="Remarques">

<br>
<br>
<input type="submit" value="Enregistrer" name="Enregistrer">
<br>
<br>
</div>
</form>

<?php
    }
?>

</body>
</html>