<?php

/*
Fonction natives en PHP

 */



$string = "Je découvre mes premières fonctions natives en php"; 

// STRLEN = Stinglens

echo "Nombre de caractères: ". strlen($string).'<br/>' ; 


// STR_REPACE

echo 'la string transformée : '. str_replace('découvre', 'fais', $string).'<br/>';


// STRTOLAWER

echo strtolower($string).'<br/>'; 


// STRTOUPPER

echo strtoupper($string).'<br/>'; 

