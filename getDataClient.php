<?php
session_start();
if ($_SESSION['admin'] != 1) {
    header("Location: index.php");
    exit();
}
require_once("registration/config.php");
$sql = "SELECT * FROM client WHERE NumC = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $_POST['NumC']);
$result = $stmt->execute();
$stmt->bind_result($NumC, $NomC, $PrenomC, $DatNaisC, $LieuNaisC, $NationaliteC, $AdrVilC,$AdrRueC, $CodPosC, $TelC, $NumPasC, $DatDelPasC, $LieuDelPasC, $PaysDelPasC, $NumPermisC, $DatDelPermiC, $LieuDelPermisC, $AutreAdrC,$RemarquesC,$CodTypC,);
$stmt->store_result();
$stmt->fetch();

$array = array(
    'NumC' => $NumC,
    'NomC' => $NomC,
    'PrenomC' => $PrenomC,
    'DatNaisC' => $DatNaisC,
    'LieuNaisC' => $LieuNaisC,
    'NationaliteC' => $NationaliteC,
    'AdrVilC' => $AdrVilC,
    'AdrRueC' => $AdrRueC,
    'CodPosC' => $CodPosC,
    'TelC' => $TelC,
    'NumPasC' => $NumPasC,
    'DatDelPasC' => $DatDelPasC,
    'LieuDelPasC' => $LieuDelPasC,
    'PaysDelPasC' => $PaysDelPasC,
    'NumPermisC' => $NumPermisC,
    'DatDelPermiC' => $DatDelPermiC,
    'LieuDelPermisC' => $LieuDelPermisC,
    'AutreAdrC' => $AutreAdrC,
    'RemarquesC' => $RemarquesC,
    'CodTypC' => $CodTypC
);

echo json_encode($array);


?>