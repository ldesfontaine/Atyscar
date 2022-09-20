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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="showClients.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Admin Panel - Atyscar</title>
</head>
<?php
    require_once("header.php");
    require_once("navbar.php");
    ?>

    
    <!-- create Modal -->
    <?php require("modalViewMore.php"); ?>


    <!-- fin modal -->
    <body>
    <div id="page-content">
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date de naissance</th>
                    <th>Nationalité</th>
                    <th>Code postal</th>
                    <th style="width:50px">Actions</th>
                </tr>        
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($conn->query("SELECT * FROM client") as $row) {
                        echo '<tr>';
                            echo '<td>';
                            echo $row['NomC'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['PrenomC'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['DatNaisC'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['NationaliteC'];
                            echo '</td>';
                            echo '<td>';
                            echo $row['CodPosC'];
                            echo '</td>';
                            echo '<td class="actionsClientsBox">';
                            echo '<button class="actionsClient" onclick="showHideModal('.$row['NumC'].')" title="Voir plus"><span class="material-symbols-outlined" style="color:rgb(42, 206, 105)">visibility</span></button>';
                            echo '<button class="actionsClient" onclick="updateClient('.$row['NumC'].')" title="Modifier"><span class="material-symbols-outlined" style="color:rgb(50, 50, 255)">edit</span></button>';
                            echo '<button class="actionsClient" onclick="deleteClient('.$row['NumC'].')" title="Supprimer"><span class="material-symbols-outlined" style="color:rgb(255, 0, 0)">delete</span></button>';
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