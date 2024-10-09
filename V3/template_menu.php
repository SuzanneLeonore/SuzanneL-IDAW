
<?php
    function renderMenuToHTML($currentPage,$lang){
        $mymenu=array(
            'index'=>array('Accueil'),
            'cv' => array('CV'),
            'hobbies' => array('Hobbies'),
            'contact' =>array('Contact'),
        );
        $tablang=array(
            'fr'=>'fr',
            'en'=>'en',
        );
        echo '<div class="conteneur-flexible">
                <div class="element-flexible">
                    <nav class="menu">
                        <ul>';
        foreach($tablang as $langId=>$langParameters){
            if($lang==$langId){
                $var=$lang;
            }
        }
        foreach($mymenu as $pageId=>$pageParameters){
           if ($currentPage==$pageId){
                echo '<li><a id="pageActuelle" href=index.php?page='.$pageId.'&lang='.$var.'>'.$pageParameters[0].'</a></li>';
                echo '<li><a href="index.php?page='.$pageId.'&lang=en">Anglais</li></a>';

            }
            else{
                echo '<li><a href=index.php?page='.$pageId.'&lang='.$var.'>'.$pageParameters[0].'</a></li>';
            }
        }
        echo '</ul>
            </nav>
            </div>
            </div>';
    }
?>