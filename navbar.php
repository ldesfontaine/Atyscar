
<nav align="center">
    <ul>


        
        <?php

            if ( isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                echo "<li><a href='panel.php'>Admin Panel</a></li>";
                echo "<li><a href='client.php'>Ajout client</a></li>";
                echo "<li><a href='showClients.php'>Affichage clients</a></li>";
                echo "<li><a href='voiture.php'>Ajout Voiture</a></li>";
                echo "<li><a href='showVoiture.php'>Affichage Voiture</a></li>";
            }
            else{
                echo "<li><a href='/Atyscar/index.php'>Accueil</a></li>";
                echo "<li><a href='/Atyscar/contact.php'>Contacter-Nous</a></li>";
            }
        ?>
    </ul>  
</nav>