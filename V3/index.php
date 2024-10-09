<?php
require_once("template_header.php");
require_once("template_menu.php");
$currentPageId = 'accueil';
if(isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
}

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
                renderMenuToHTML('index');
                ?>
            </div>
            <div class="element-flexible">
                <p>Bienvenue sur la page d acceuil</p>
            </div>
        </div>
    <section class="corps">
        <?php
            $pageToInclude = $currentPageId.".php";
            if(is_readable($pageToInclude))
                require_once($pageToInclude);
            else
                require_once("error.php");
        ?>
    </section>
        
<?php 
    require_once('template_footer.php');
?>