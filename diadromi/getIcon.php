<?php

function getIcon($medium_type) {
    
    if(strcmp($medium_type, "Subway")==0) {
        return '<img src="https://img.icons8.com/plasticine/36/000000/subway.png">';
    }
    else if(strcmp($medium_type, "Railway")==0){
        return '<img src="https://img.icons8.com/clouds/48/000000/train.png">';
    }
    else if(strcmp($medium_type, "Bus")==0){
        return '<img src="https://img.icons8.com/dusk/30/000000/bus.png">';
    }
    else if(strcmp($medium_type, "Walk")==0){
        return '<img src="https://img.icons8.com/metro/26/000000/walking.png">';
    }
    else{
        return '';
    }
}
?>