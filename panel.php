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
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="shortcut icon" href="m/car.jpg"/>
    <title>Admin Panel - Atyscar</title>
</head>
<?php
    require_once("header.php");
    require_once("navbar.php");
?>
<body>

<h1 align="center">Information</h1>

<section>

<div>
<h3 align="center">Tous les comptes utilisateurs</h3>
<table>
        <thead>
            <tr>
                <td>Compte</td>
                <td>Pseudo</td>
                <td>Email</td>
            </tr>
        </thead>
        <tbody>
        <?php
           // SELECT email,username,admin FROM `users`;
            $sql = "SELECT email,username,admin FROM `users`";
            foreach  ($conn->query($sql) as $row) {
                if($row['admin'] == 1){
                    ?>
                    <tr>
                        <td><?php echo 'Admin ';?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['email']?></td>
                    </tr>
                <?php
                }   else{
                    ?>
                    <tr>
                        <td><?php echo 'User';?></td>
                        <td><?php echo $row['username']?></td>
                        <td><?php echo $row['email']?></td>
                    </tr>
    
                <?php
            }}
            ?>
            </tbody>
            </table>
</div>
</section>


</body>
</html>