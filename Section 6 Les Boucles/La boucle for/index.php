<?php

// Ici nous allons voir l'ecriture de la boucle 'for' 
// toutes les boucles fonctionnent avec des conditions. 
// NB avec la boucle 'for' on gagne de la place puisque tout tient sur 2 lignes 

// Explication dans la boucle 'for' -> 

// ! A RETENIR !  Dans la boucle 'for' on utilise le plus souvent "i" pour "index" -> $i
// On a 3 étapes, 

//  1. La partie dite "initialisation" : "$i = 0;" | ici on déclare directement la variable
//  2. On test la "condition" : "$i < 10;" | ici on lui donne une condition ( il ne passera pas 10 lignes)
//  3. Et puis on 'incremente' la variable $i de +1 avec la syntaxe '++' pour  '$i++' | ici on ajuste la valeur de $i afin quelle commence de 1 et non de 0
//  Traitement, on passe l'affichage sur le 'echo' 

//   |  1. | |   2. | |3.|
for ($i = 0; $i < 10; $i++) {

    // Traitement . . . 
    echo 'Voici le numero de la ligne :'.($i+1).'<br/>'; 


}




?>