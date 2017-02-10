<?php


class recherche
{
    static function rechercheGen() 
    {
        echo '<div class="recherche">';
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
        echo '</div>';
      
    }
}