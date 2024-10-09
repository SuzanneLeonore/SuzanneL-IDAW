<?php
require_once("template_header.php");
require_once("template_menu.php");
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
    renderMenuToHTML($currentPageId,$currentlang);
?>

    <section class="corps">
        <?php
        if ($currentPageId=='index'){
            $currentPageId ='accueil';
        }
            $pageToInclude = $currentlang.'/'.$currentPageId.".php";
            if(is_readable($pageToInclude))
                require_once($pageToInclude);
            else
                require_once("error.php");
        ?>
    </section>
        
<?php 
    require_once('template_footer.php');
?>