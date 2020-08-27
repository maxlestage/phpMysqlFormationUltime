<?php

// Fonction 
// Création de ma première function 
// On déclare toujours notre fonction par le mot clé "function"
// celui-ci une fois déclaré s'accompagnera obligatoirement d'un mot commencant par une Majuscule()
// si nom composé, ajouter majuscule à chaque mot 
// la parenthèse qui suit la fonction Hello(), nous permet de réceptionner si on le souhaite des données
// a la suite de notre function viennent s'ajouter des acollades {} comme pour une boucle* 
// on afichera donc par le biais du echo, (Hello!)


/*
function Hello() {

    echo "Hello!"; 

}

Hello(); 
*/


// Second Exemple


function Hello($prenom, $nom) {

    echo 'Hello'.' '."tu t'appels bien = ".' '.$prenom.' '.$nom.'!'; 

}

Hello("Lucas", "Marx"); 