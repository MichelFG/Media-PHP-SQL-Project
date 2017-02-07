<?php

class MakeHTML {
    
    static function html_start(string $title) {
    echo '<!DOCTYPE html>
        <html><head>'."\n";
        
    echo '<title> $title </title>'."\n";
        
        echo '<div class="header">'."\n";
        echo'<div class="Lien_cnx"><a href="connexion.php">Connexion</a></div>';
        echo '</div>';
        
    echo '<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0\">'."\n";
    echo '<link rel="stylesheet" href="./css/style.css">'."\n";
        
        echo '</head><body>'."\n";
        
    }

    static function html_end(){
    echo '</body></html>';
    }
}