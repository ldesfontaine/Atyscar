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
    <link rel="stylesheet" type="text/css" href="voiture.css">
    <link rel="shortcut icon" href="m/car.jpg"/>
    <title>Admin Panel - Fichier Vehicule - Atyscar</title>
</head>
<?php
    require_once("header.php");
    require_once("navbar.php");
?>





<body>
    <?php
    if (
    isset($_REQUEST['MatV']) &&
    isset($_REQUEST['ImmatV']) &&
    isset($_REQUEST['TypeV']) &&
    isset($_REQUEST['MarV']) &&
    isset($_REQUEST['ModV']) &&
    isset($_REQUEST['CatV']) &&
    isset($_REQUEST['PuisV']) &&
    isset($_REQUEST['CarbV']) &&
    isset($_REQUEST['CoulV']) &&
    isset($_REQUEST['NbPlV']) &&
    isset($_REQUEST['AnnV']) &&
    isset($_REQUEST['KilDernE']) &&
    isset($_REQUEST['KilProE']) 
    ) {

    

    $MatV = stripslashes($_REQUEST['MatV']);
    $MatV = mysqli_real_escape_string($conn, $MatV);

    $ImmatV = stripslashes($_REQUEST['ImmatV']);
    $ImmatV = mysqli_real_escape_string($conn, $ImmatV);

    $TypeV = stripslashes($_REQUEST['TypeV']);
    $TypeV = mysqli_real_escape_string($conn, $TypeV);

    $MarV = stripslashes($_REQUEST['MarV']);
    $MarV = mysqli_real_escape_string($conn, $MarV);

    $ModV = stripslashes($_REQUEST['ModV']);
    $ModV = mysqli_real_escape_string($conn, $ModV);

    $CatV = stripslashes($_REQUEST['CatV']);
    $CatV = mysqli_real_escape_string($conn, $CatV);

    $PuisV = stripslashes($_REQUEST['PuisV']);
    $PuisV = mysqli_real_escape_string($conn, $PuisV);

    $CarbV = stripslashes($_REQUEST['CarbV']);
    $CarbV = mysqli_real_escape_string($conn, $CarbV);

    $CoulV = stripslashes($_REQUEST['CoulV']);
    $CoulV = mysqli_real_escape_string($conn, $CoulV);

    $NbPlV = stripslashes($_REQUEST['NbPlV']);
    $NbPlV = mysqli_real_escape_string($conn, $NbPlV);

    $AnnV = stripslashes($_REQUEST['AnnV']);
    $AnnV = mysqli_real_escape_string($conn, $AnnV);

    $KilDernE = stripslashes($_REQUEST['KilDernE']);
    $KilDernE = mysqli_real_escape_string($conn, $KilDernE);

    $KilProE = stripslashes($_REQUEST['KilProE']);
    $KilProE = mysqli_real_escape_string($conn, $KilProE);



    $query = "INSERT into `vehicule` (MatV, ImmatV, TypeV, MarV, ModV, CatV, PuisV, CarbV, CoulV, NbPlV, AnnV, KilDernE, KilProE) Values(? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)";
    
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("ssssssissiiii", $MatV, $ImmatV, $TypeV, $MarV, $ModV, $CatV, $PuisV, $CarbV, $CoulV, $NbPlV, $AnnV, $KilDernE, $KilProE);
        $res = $stmt->execute();
        if($res){
            echo "<div class='form'>
            <h2>Voiture Enregistrer</h2>
            <label>Vous aller etre redirigé</label>";
            header ("Refresh: 6;URL=voiture.php");;
        }
    }
    }
    else{ 
        ?>
    <form action="" method="post">
    <span>
    <h2 align="center">Voiture</h2> 
    <div class="container">
        <input type="text" class="child" autocomplete="on" placeholder="Matricule" name="MatV" required >
        <input type="text" class="child" autocomplete="on" placeholder="Imatriculation" name="ImmatV" required >
        <input type="text" class="child" autocomplete="on" placeholder="Type " name="TypeV" required >
        <input type="text" class="child" autocomplete="on" placeholder="Marque " name="MarV" required>
        <input type="text" class="child" autocomplete="on" placeholder="Modele " name="ModV" required >
        <input type="text" class="child" autocomplete="on" placeholder="Categorie " name="CatV" required >
        <input type="number" class="child" autocomplete="on" placeholder="Puissance " name="PuisV" required >
        <input type="text" class="child" autocomplete="on" placeholder="Carburant" name="CarbV" required >
        <input type="text" class="child" autocomplete="on" placeholder="Couleur" name="CoulV" required >
        <input type="number" class="child" autocomplete="on" placeholder="Place" name="NbPlV" required >
        <input type="number" class="child" autocomplete="on" placeholder="Année" name="AnnV" required >
        <input type="number" class="child" autocomplete="on" placeholder="Killometrage Dernier Entretien" name="KilDernE" required >
        <input type="number" class="child" autocomplete="on" placeholder="Killometrage Prochain Entretien" name="KilProE" required >

    </div>
</span>
<br>
<input type="submit" value="Enregistrer" name="Enregistrer">
<br>
    </form>

<?php
    }
?>

</body>
</html>