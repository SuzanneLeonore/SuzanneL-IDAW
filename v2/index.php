<?php
require_once('template_header.php');
?>
        <header>
            <h1> Ma page professionelle </h1>
            <p style="text-align: center";>Bievenue dans mon site
                <br> Bonne lecture
            </p>
        </header>
        <br>
        <div class="conteneur-flexible">
            <div class="element-flexible">
                <?php 
                require_once('template_menu.php');
                ?>
            </div>
            <div class="element-flexible">
                <p>Bienvenue sur la page d acceuil</p>
            </div>
        </div>
        <p>Coucou</p>
        
<?php 
    require_once('template_footer.php');
?>