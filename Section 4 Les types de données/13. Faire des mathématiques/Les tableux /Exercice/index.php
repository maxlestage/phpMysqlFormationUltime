<?php
// Tableau (id, prenom, nom, age)
// Afficher l'age de la personne dans 50ans (faire un plus 50 de son age)
// Afficher un message, "Bonjour nom prenom, dans 50ans vous aurez X ans."

$personneAge = array(

    'id' => 1,
    'prenom' => 'Julien',
    'nom' => 'Henry',
    'age' => 67

);

$jeSuisUnVieux = $personneAge['age']+= 50;

echo 'Bonjour'.' '.$personneAge['nom'].' '.$personneAge['prenom'].', '.'dans 50ans vous aurez'.$jeSuisUnVieux.' '.'ans';

?>