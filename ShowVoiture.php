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
    <script src="voiture.js"></script>
    <link rel="shortcut icon" href="m/car.jpg"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Admin Panel - Atyscar</title>
</head>
<?php
    require_once("header.php");
    require_once("navbar.php");
?>

<!-- fin modal -->
<body>
    <div id="page-content">
        <table>
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Immatriculation</th>
                    <th>Type vehicule</th>
                    <th>Marque vehicule</th>
                    <th>Modele Vehicule</th>
                    <th style="width:50px">Actions</th>
                </tr>        
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($conn->query("SELECT * FROM vehicule") as $row) {
                        echo '<tr>';
                            echo '<td>';
                            echo $row['MatV'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['ImmatV'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['TypeV'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['MarV'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['ModV'];
                            echo '</td>';
                            echo '<td class="actionsClientsBox">';
                            echo '<button class="actionsClient" onclick="deleteVoiture('.$row['MatV'].')" title="Supprimer"><span class="material-symbols-outlined" style="color:rgb(255, 0, 0)">delete</span></button>';
                            echo '</td>';
                        echo '</tr>'; 
                    }
                    ?>
                </tr>
            </tbody>

        
        </table>
    </div>
</body>
</html>