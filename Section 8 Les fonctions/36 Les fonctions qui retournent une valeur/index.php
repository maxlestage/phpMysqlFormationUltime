<?php

// Dans cet exemple nous allons voir la function aisni que son affichage par le mot clé return 

/*  On commence donc par déclarer notre fonction 
elle se nomme donc Calc et va nous permettre de faire un calcul des variables $x et $y 

on crée un variable $temp pour temporaire mais on peut utiliser d'autres nom ça n'aura pas d'importance 
cette variable $temp sera utiliser pour notre calcul, elle va recevoir différentes valeurs. 

return nous permet de retourner le resultat 
$resultat = Calc( on assigne une valeur a $x, puis une autre pour $y)


pour retourné une fonction on doit utiliser le mot clé "return" 

*/


function Calc($x, $y) {

    $temp = $x * $y; 
    $temp /= 44; 
    $temp = $x + $temp - ($x + $y); 

    return $temp; 
}

$resultat = Calc(345, 78); 

echo $resultat; 
