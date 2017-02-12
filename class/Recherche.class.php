<?php


class recherche
{
    static function rechercheGen() 
    {

        echo '<form class="recherche">';
        echo '<span class="rchr">Rechercher</span><br>';
        echo '<label for="Auteur"> Auteur </label>';
        echo '<input type="text" class="rec" id="Auteur" name="nom" placeholder="Auteur">';
        echo '<br>';
        echo '<label for="Media">Media </label>';
        echo '<input type="text" class="rec" id="Media" name="nom" placeholder="Media">';
        echo '<br>';
        echo '<label for="Titre">Titre </label>';
        echo '<input type="text" class="rec" id="Titre" name="nom" placeholder="Titre">';
        echo '<br>';
        echo '<input type="submit" class ="subbutton" name="envoyer" value="Envoyer"/>'."\n";
        echo'<div class="FILE-BTN"><a href="upload.php">Charger un fichier</a></div>';
        echo '</form>';




        /*Ancien*/
       /* echo '<div class="recherche">';
        echo '<span class="rchr">Rechercher</span><br>';
        echo 'Auteur ';
        echo '<input type="text" class="rec" name="nom" placeholder="Auteur">';
        echo '<br>';
        echo 'Media ';
        echo '<input type="text" class="rec" name="nom" placeholder="Media">';
        echo '<br>';
        echo 'Titre ';
        echo '<input type="text" class="rec" name="nom" placeholder="Titre">';
        echo '<br>';
        echo '<input type="submit" class ="subbutton" name="envoyer" value="Envoyer"/>'."\n";
         echo'<div class="FILE-BTN"><a href="upload.php">Charger un fichier</a></div>';
        echo '</div>';*/
    
      
    }
}