<?php

class MakeHTML {
    
    static function html_start($title) {
    echo '<!DOCTYPE html>
        <html><head>'."\n";
        
    echo '<title> $title </title>'."\n";
        
       
    echo '<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0\">'."\n";
    echo '<link rel="stylesheet" href="./css/style.css">'."\n";
        
         
        echo '</head><body><div id="conteneur">'."\n";
        echo '<div class="header">'."\n";
        echo '<a href="index.php"><img src="./img/media.png" alt="Media" class="logo1"></a>';
        echo '<a href="index.php"><img src="./img/factory.png" alt="Factory" class="logo2"></a>';
        echo'<div class="Lien_cnx"><a href="connexion.php">Connexion</a></div>';
        echo '</div>';
    }

    static function html_end(){
    echo '</div></body></html>';
    }
}