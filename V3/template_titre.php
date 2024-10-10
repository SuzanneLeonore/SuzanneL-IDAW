
<?php
    function renderTitreToHTML($currentPage,$lang){
        $mytitrefr=array(
            'accueil'=>'Ma page professionelle',
            'cv' => 'Mon parcours professionel',
            'hobbies' => 'Mes hobbies',
            'contact' =>'Me contacter',
        );
        $mytitreen=array(
            'accueil'=>'My business page',
            'cv'=>'My Career path',
            'hobbies'=>'My hobbies',
            'contact'=>'Contact me',
        );
        $tablang=array(
            'fr'=>'fr',
            'en'=>'en',
        );
        if($lang=='fr'){
            foreach($mytitrefr as $pageId=>$pageTitre){
                if ($currentPage==$pageId){
                    echo $pageTitre;
                }
            }
        }
        else if($lang=='en'){
            foreach($mytitreen as $pageId=>$pageTitre){
                if ($currentPage==$pageId){
                    echo $pageTitre;
                }
            }
        }
    }
?>