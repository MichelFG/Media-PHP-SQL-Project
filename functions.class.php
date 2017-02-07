<?php


class Form_GEN
{
    
    static function formuGen() 
    {
        echo '<div class="Form">';
        echo '<input type="text" class="name" name="nom" placeholder="Votre nom">';
        echo '<br>';
        echo '<input type="password" class="pswd" name="password" placeholder="Votre mot de passe">';
        echo '<br>';
        echo '<input type="submit" class ="subbutton" name="envoyer" value="Envoyer"/>'."\n";
        echo '</div>';
    }
}