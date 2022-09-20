<?php
session_start();
if ($_SESSION['admin'] != 1) {
    header("Location: index.php");
    exit();
}
require_once("registration/config.php");
$sql = "DELETE FROM client WHERE NumC = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $_POST['NumC']);
$stmt->execute();
?>


