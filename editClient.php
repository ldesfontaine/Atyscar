<?php
session_start();
if ($_SESSION['admin'] != 1) {
    header("Location: index.php");
    exit();
}


require_once("registration/config.php");

if (isset($_POST['numCEdit'])) {
    $NumC = $_POST['numCEdit'];
    $NomC = $_POST['nomEdit'];
    $PrenomC = $_POST['prenomEdit'];
    $DatNaisC = $_POST['dateNaissanceEdit'];
    $LieuNaisC = $_POST['lieuNaissanceEdit'];
    $NationaliteC = $_POST['nationaliteEdit'];
    $AdrRueC = $_POST['rueEdit'];
    $AdrVilC = $_POST['villeEdit'];
    $CodPosC = $_POST['codePostalEdit'];
    $TelC = $_POST['telephoneEdit'];
    $NumPasC = $_POST['numeroPassportEdit'];
    $DatDelPasC = $_POST['dateDelivrancePassportEdit'];
    $LieuDelPasC = $_POST['lieuDelivrancePassportEdit'];
    $PaysDelPasC = $_POST['paysDelivrancePassportEdit'];
    $NumPermisC = $_POST['numeroPermisEdit'];
    $DatDelPermiC = $_POST['dateDelivrancePermisEdit'];
    $LieuDelPermisC = $_POST['lieuDelivrancePermisEdit'];
    $CodTypC = $_POST['codTypCEdit'];
    $Remarques = $_POST['remarquesEdit'];
    $AutreAdr = $_POST['autreAdresseEdit'];

    // $sql = "UPDATE client SET NomC = '$NomC', PrenomC = '$PrenomC', DatNaisC = '$DatNaisC', LieuNaisC = '$LieuNaisC', NationaliteC = '$NationaliteC', AdrRueC = '$AdrRueC', AdrVilC = '$AdrVilC', CodPosC = '$CodPosC', TelC = '$TelC', NumPasC = '$NumPasC', DatDelPasC = '$DatDelPasC', LieuDelPasC = '$LieuDelPasC', PaysDelPasC = '$PaysDelPasC', NumPermisC = '$NumPermisC', DatDelPermiC = '$DatDelPermiC', LieuDelPermisC = '$LieuDelPermisC', CodTypC = '$CodTypC', Remarques = '$Remarques', AutreAdr = '$AutreAdr' WHERE NumC = '$NumC'";
    $sql = "UPDATE client SET NomC = ?,
            PrenomC = ?,
            DatNaisC = ?,
            LieuNaisC = ?,
            NationaliteC = ?,
            AdrRueC = ?,
            AdrVilC = ?,
            CodPosC = ?,
            TelC = ?,
            NumPasC = ?,
            DatDelPasC = ?,
            LieuDelPasC = ?,
            PaysDelPasC = ?,
            NumPermisC = ?,
            DatDelPermiC = ?,
            LieuDelPermisC = ?,
            CodTypC = ?,
            Remarques = ?, 
            AutreAdr = ?
            WHERE NumC = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssssssssssssssi', $NomC, $PrenomC, $DatNaisC, $LieuNaisC, $NationaliteC, $AdrRueC, $AdrVilC, $CodPosC, $TelC, $NumPasC, $DatDelPasC, $LieuDelPasC, $PaysDelPasC, $NumPermisC, $DatDelPermiC, $LieuDelPermisC, $CodTypC, $Remarques, $AutreAdr, $NumC);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: showClients.php");

}



?>



