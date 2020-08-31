<?php

// Le Formulaire 
// En PHP depuis un echo pour afficher un formulaire ou une balise html on utilisera toujours le guillemet <<'>> seul
// Sinon ça ne marche pas et on finit normalement par un ; 

// On va créer une condition, "si (existe(methode $_POST[une valeur de type 'prenom'])et nous allons verifier  de la même façon le nom)


if(isset($_POST['prenom'])&& isset($_POST['nom'])) {

    echo 'Bonjour'.' '.$_POST['prenom'].' '.$_POST['nom'];    

}

echo '<form action="index.php" method="post">
    <p>Votre Prénom : <input type="text" name="prenom" /></p>
    <p>Votre Nom : <input type="text" name="nom" /></p>
        <p><input type="submit" value="OK"></p>
    </form>'; 
