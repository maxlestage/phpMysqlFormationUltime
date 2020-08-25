<?php

// Les conditions : IF

$age = 18;
// il est plus grand 7
if ($age > 17 ){
    echo "Vous êtes majeur. ";
}
// On ne peut pas utiliser le '=' ex "if ($age = 18 )"
// le if agit comme un boolean, ce qui veut dire qu'il remplace l'age de 15ans par 18ans
// il fau tdan ce cas utiliser == pour verifier si la valeur est égale à 18 ou non ex "if ($age == 18 )"
if ($age == 18 ){
    echo "Vous êtes enfin majeur. ";
}

// il est plus petit 4
if ($age < 18 ){
    echo "Vous êtes mineur. ";
}


// OPERATEURS DE CONDITIONNEMENT

// == EST EGAL
// > EST SUPERIEUR
// < EST INFERIEUR
// <= EST INFERIEUR OU EGAL
// >= EST SUPERIEUR OU EGAL
// != EST DIFFERENT



?>