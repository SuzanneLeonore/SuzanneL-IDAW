<?php
require_once("template_header.php");
require_once("template_menu.php");
require_once("template_titre.php");
$currentPageId = 'page';
if(isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
}
$currentlang='fr';
if(isset($_GET['lang'])) {
    $currentlang=$_GET['lang'];
}
?>
    <?php
        renderTitreToHTML($currentPageId,$currentlang);
    ?>
    </div>
    <?php
        renderMenuToHTML($currentPageId,$currentlang);
    ?>
    
        <?php
            $pageToInclude = $currentlang.'/'.$currentPageId.".php";
            if(is_readable($pageToInclude))
                require_once($pageToInclude);
            else
                require_once("error.php");
        ?>
        
        
<?php 
    require_once('template_footer.php');
?>