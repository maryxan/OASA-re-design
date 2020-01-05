<?php
    include 'getIcon.php';

    function getMediumPair($medium_type, $medium_name){
        $pair = getIcon($medium_type).' ';
        
        if(strcmp($medium_name,"Walk") != 0){
            $pair = $pair.$medium_name;
        }

        return $pair;
    }

?>