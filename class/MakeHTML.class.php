<?php

class MakeHTML {
    
    static function html_start($title) {
    echo '<!DOCTYPE html>
        <html><head>'."\n";
        
    echo '<title> $title </title>'."\n";
        
       
    echo '<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0\">'."\n";
    echo '<link rel="stylesheet" href="css/style.css">'."\n";
	echo '<link rel="stylesheet" href="jquery.bxslider/jquery.bxslider.css" type="text/css" />';
        
         
        echo "</head><body><div id='conteneur'>"."\n";
        echo '<div class="header">'."\n";
        echo '<div id="logo"><a href="index.php"><img src="./img/media2.png" alt="Media" class="logo1"></a>';
        echo '<a href="index.php"><img src="./img/factory2.png" alt="Factory" class="logo2"></a></div>';
        echo'<div class="Lien_cnx"><a href="connexion.php">Connexion</a></div><br><br><br>';
        echo'<div class="Lien_ins"><a href="inscription.php">Inscription</a></div><br>';
        echo '</div>';
        
    }

    static function html_end(){
    echo '</div></body></html>';
    }
}