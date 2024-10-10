
<?php
    function renderMenuToHTML($currentPage,$lang){
        $mymenu=array(
            'accueil'=>array('Accueil'),
            'cv' => array('CV'),
            'hobbies' => array('Hobbies'),
            'contact' =>array('Contact'),
        );
        $tablang=array(
            'fr'=>'fr',
            'en'=>'en',
        );
        echo '<div class="menu">
                <nav class="menu">
                    <ul>';
        foreach($mymenu as $pageId=>$pageParameters){
           if ($currentPage==$pageId){
                
                echo '<li><a id="pageActuelle" href=index.php?page='.$pageId.'&lang='.$lang.'>'.$pageParameters[0].'></a></li>';
                if($lang=='fr'){
                    echo '<a href="index.php?page='.$pageId.'&lang=en">Anglais</a>';
                }
                else{
                    echo '<a href="index.php?page='.$pageId.'&lang=fr">Français</a>';
                }

            }
            else{
                echo '<li><a href=index.php?page='.$pageId.'&lang='.$lang.'>'.$pageParameters[0].'</a></li>';
            }
        }
        echo '</ul>
            </nav>
            </div>';
    }
?>