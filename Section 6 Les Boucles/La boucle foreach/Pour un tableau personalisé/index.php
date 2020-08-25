<?php

// LA BOUCLE FOREACH DANS UN TABLEAU PERSONALISE 

// Dans cette exemple, on ne definit pas les index nous même on laisse php s'en charger. Ceci seront donc 0 1 2 3.. etc 
// voir le cours sur les tableau si besoin. 

/** On va definir $personne = array( 'Prenom'=>'Nicolas', 'Nom'=>'Julien', 'Age'=> 56); 
//on a donc ici 3 éléments (Nicolas, Julien, 56). */




/**
$user = array('Nicolas', 'Julien', 'Bob', 'Marc', 'Luc' ); 

// Exemple avec une boucle foreach 
// 'foreach' est plus adapté pour la gestion d'un tableau
// on a pas besoin de rentrer autant de condition que dans une boucle 'for'
// mémotechnique foreach en anglais veut dire pour chaque, 
// ainsi pour chaque élément du tableau '$user' que pour chacun des éléments du tableau, on va les rentrée dans la varaible $name en utilisant la fonction 'as' 
// 'as' sert donc à définir chaque élément comme étant la variable name. 
// du coup il va ouvrir le tableau de $user et prendre le premier élément 'Nicolas', puis 'as' va stocker 'Nicolas' dans la varaible $name
// ainsi il parcourat tout le contenu du tableau afin de les ajouter dans $name. 



foreach($user as $name){
echo $name.'<br/>'; 

}






 EXEMPLE AVEC UNE BOUCLE FOR 
// 1. On initialise la variable $i, 
// 2. On veut fficher les 5 prenoms, donc on ecrit tant que $i et inferieur a 5,

for($i = 0; $i < 5; $i++ ){

    // le echo lit le tableau $user et lui demande d'afficher chaque index de la veriable $i. 
    // Rappel notre tableau n'a pas de valeur specifique de définit il concerve donc son ordre par index 0 , 1 , 2 , 3 , 4.. 
    // ainsi en utilisant la boucle 'for' et la variable $i on demande à afficher chaque index de la variable $user 
    // c'est à dire ->   Nicolas = 0, Julien = 1, Bob = 2, Marc = 3, Luc = 4. 

    /**echo $user [$i];

    // Pour "echo $user [$i]; "
    // Le navigateur rend alors : " NicolasJulienBobMarcLuc "
    // Cependant si l'on souhaite mettre chaque nom à la ligne on va utiliser la concaténation de la manière suivante : echo $user [$i].'<br/>';
    
    echo $user [$i].'<br/>'; 

}
*/

/**$user = array(
    'surname'=>'Nicolas', 
    'name'=>'Julien', 
    'age'=> 56
); 

foreach($user as $name){

    echo $name ; 

}*/


/**$user = array(
    'surname'=>'Nicolas', 
    'name'=>'Julien', 
    'age'=> 56
); 

foreach($user as $key => $value){
    if($key === "name"){
        echo $value ."<br>";
    }
}*/

/**$user = array(
    'surname'=>'Nicolas', 
    'name'=>'Julien', 
    'age'=> 56
); 

foreach($user as $key => $value){
    if($key != "name"){
        echo $value ."<br>";
    }elseif($key === "age"){
      echo $value ."<br>";
    }
}*/ 

$user = array(
    'surname'=>'Nicolas', 
    'name'=>'Julien', 
    'age'=> 56
); 

foreach($user as $key => $value){
    // oui la je specifie que il doit pas prendre "name" 
    //compte mais par contre pour ce qu'il reste il doit prendre "age" en compte. 
    
    if($key != "name" && $key === "age"){
        echo $value ."<br>";
    }
}

?>