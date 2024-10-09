
<?php
    function renderMenuToHTML($currentPage){
        $mymenu=array(
            'index'=>array('Accueil'),
            'cv' => array('CV'),
            'hobbies' => array('Hobbies'),
            'contact' =>array('Contact'),
        );
        echo '<div class="conteneur-flexible">
                <div class="element-flexible">
                    <nav class="menu">
                        <ul>';
        foreach( $mymenu as $pageId=>$pageParameters){
           if ($currentPage==$pageId){
                echo '<li><a id="pageActuelle" href=index.php?page='.$pageId.'>'.$pageParameters[0].'</a></li>';
            }
            else{
                echo '<li><a href=index.php?page='.$pageId.'>'.$pageParameters[0].'</a></li>';
            }
        }
        echo '</ul>
            </nav>
            </div>
            </div>';
    }
?>