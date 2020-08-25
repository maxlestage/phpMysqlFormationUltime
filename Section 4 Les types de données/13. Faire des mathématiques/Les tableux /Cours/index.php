<?php

// Les tableaux


// Exemple de tableau avec valeurs déclaré.


/*$identitePersonneA = array
(
    'id' => 4,
    'nom' => 'Julien',
    'prenom' => 'René',
    'age' => 20
);

echo  'Bonjour '.$identitePersonneA['prenom'].' '. $identitePersonneA['nom']. ' !';*/





// Exemple de tableau sans valeur déclaré dans un tableau.

$identitePersonneB = array(15, 'Nicolas', 'Dupont', 20, 'Entrepreneur', 'flemmard');

// ici on constate que de lui même avec la fonction array, il met en place lui même les données sous la forme:
//$identitePersonneB = array(15, 'Nicolas', 'Dupont', 20, 'Entrepreneur', 'flemmard');
// 0, 1, 2, 3... on pourrait ajouter de nouvelles entrées ce qui rajouterais une clé 0, 1, 2, 3, 4, 5....
echo  'Bonjour '.$identitePersonneB[1].' '. $identitePersonneB[2].' '.', vous un '. $identitePersonneB[4].' '.'et pas des moins '.$identitePersonneB[5]. ' !';
?>