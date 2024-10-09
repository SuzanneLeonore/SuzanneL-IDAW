
<?php
    function renderMenuToHTML($currentPage){
        $mymenu=array(
            'index'=>array('Accueil'),
            'cv' => array('CV'),
            'hobbies' => array('Hobbies')
        );
        echo '<nav class="menu">
                <ul>';
        foreach( $mymenu as $pageId=>$pageParameters){
           if ($currentPage==$pageId){
                echo '<li><a id="pageActuelle" href='.$pageId.'.PHP>'.$pageParameters[0].'</a></li>';
            }
            else{
                echo '<li><a href='.$pageId.'.PHP">'.$pageParameters[0].'</a></li>';
            }
        }
        echo '</ul>
        </nav>';
    }
?>