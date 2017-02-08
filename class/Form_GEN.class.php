<?php


class Form_GEN
{
    
    static function formuGen() 
    {
      
        
        echo '<form method=POST action=".//.php">';
        echo '<input type="text" class="pswd" name="nom" placeholder="Votre nom">';
        echo '<br>';
        echo '<input type="password" class="pswd" name="password" placeholder="Votre mot de passe">';
        echo '<br>';
        echo '<input type="submit" class ="subbutton" name="envoyer" value="Envoyer"/>'."\n";
        echo '</form>';
      
    }
}