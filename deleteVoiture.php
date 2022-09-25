<?php
session_start();
if ($_SESSION['admin'] != 1) {
    header("Location: index.php");
    exit();
}
require_once("registration/config.php");
$sql = "DELETE FROM vehicule WHERE MatV = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $_POST['MatV']);
$stmt->execute();
?>


