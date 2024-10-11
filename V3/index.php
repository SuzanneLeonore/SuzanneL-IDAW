
<?php
$style='style';
if (isset($_GET['css'])) {
    $style=$_GET['css'];
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
    echo $currentPageId;
        renderTitreToHTML($currentPageId,$currentlang);
    ?>
    </div>
    <?php
        renderMenuToHTML($currentPageId,$currentlang,$style);
    ?>
    
        <?php
            $pageToInclude = $currentlang.'/'.$currentPageId.".php";
            echo $pageToInclude;
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
            <input type="submit" value="Appliquer" />
        </form>
    </div>
        
        
<?php 
    require_once('template_footer.php');
?>