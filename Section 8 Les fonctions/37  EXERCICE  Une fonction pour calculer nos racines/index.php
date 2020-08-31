<?php

function Calc($a, $b, $c){

    // DELTA 
    $delta = $b*$b - (4*$a*$c); 


    // CONDITION 
    if($delta < 0){
        echo "Il n'y a pas de solution."; 
    }
    elseif($delta == 0){
        $result = -$b/(2*$a); 
        echo "Il y a une solution : ".$result; 
    }
    elseif($delta > 0){
        $racineA = (-$b - sqrt($delta))/(2*$a); 
        $racineB = (-$b + sqrt($delta))/(2*$a); 
        
        echo "Il y a deux solutions,".'<br/>'.'x1 = '.$racineA.'<br/>'.'x2 = '.$racineB;  

    
    }

}


Calc(2, 24, 4); 