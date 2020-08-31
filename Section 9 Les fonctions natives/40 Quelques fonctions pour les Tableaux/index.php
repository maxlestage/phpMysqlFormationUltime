<?php


/*
Fonction natives en PHP



    Ici on met en place un premier tableau comprenant des noms
    le but de notre démarche et de donner pour ces noms un repère qui commence de 0 voir ci-dessous


    voici nos index:
                    0         1         2 */
$array = array("Stendhal", "Arnold", "Steve");

// ainsi pour se faire nous sommes obligé de dupliqué notre tableau dans un autre tableau que l'on appelera $array_index
// la fonction array_flip va donc permuté le tableau initiale dans un second tableau et nous permet a ce moment de donner
// un index pour chacune des entrées retenue

$array_index = array_flip($array);
echo $array_index["Stendhal"];

ar


//