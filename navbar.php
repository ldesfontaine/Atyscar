
<nav align="center">
    <ul>

        <li><a href='/Atyscar/index.php'>Accueil</a></li>
        <li><a href="/Atyscar/contact.php">Contacter-Nous</a></li>
        
        <?php

            if ( isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
                echo "<li><a href='panel.php'>Admin Panel</a></li>";
                echo "<li><a href='client.php'>Ajout client</a></li>";
                echo "<li><a href='showClients.php'>Affichage clients</a></li>";
            }
        ?>
    </ul>  
</nav>