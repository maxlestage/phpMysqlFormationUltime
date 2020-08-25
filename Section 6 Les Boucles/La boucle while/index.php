<?php   
// La BOUCLES :  WHILE

//TP 


$ligne = 0; 
// La boucle ci dessous réalise lécriture de la phrase 'Voici le numero de la ligne :'
// sur 10 ligne en démarrant de 1 grace à l'ecriture ($ligne+1). sinon, elle commence à 0 et stop à 9 au lieu de 10. 

while ($ligne < 10) {
    echo 'Voici le numero de la ligne :'.($ligne+1).'<br/>'; 
    $ligne++;  
}


?>