<?php
    /*session_start();
    if(!isset($_SESSION["login"]) && !isset($_SESSION["password"])){
        header('location : index.php');
    }*/

$style='style';
if (isset($_COOKIE['style']))
$style=$_COOKIE['style'];

if (isset($_GET['css'])) {
    $style=$_GET['css'];
    setcookie('style', $style, time()+800);
}
require_once("template_header.php");
require_once("template_menu.php");
require_once("template_titre.php");
$currentPageId = 'page';
if (isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
}
$currentlang='fr';
if (isset($_GET['lang'])) {
    $currentlang=$_GET['lang'];
}
?>
    

    <?php
        renderTitreToHTML($currentPageId,$currentlang);
    ?>
    </div>
    <?php
        renderMenuToHTML($currentPageId,$currentlang,$style);
    ?>
    
        <?php
            $pageToInclude = $currentlang.'/'.$currentPageId.".php";
            if(is_readable($pageToInclude))
                require_once($pageToInclude);
            else
                require_once("error.php");
        ?>
    <div class="espace">
        <form id="style_form" action="index.php?page=<?php echo $currentPageId; ?>&lang=<?php echo $currentlang; ?>&css=<?php echo $style; ?>" method="GET">
            <select name="css">
                <option value="style">style1</option>
                <option value="style2">style2</option>
            </select>
            <input type="hidden" name="page" value="<?php echo $currentPageId; ?>"/>
            <input type="submit" value="Appliquer" />
        </form>
    </div>
        
        
<?php 
    require_once('template_footer.php');
?>