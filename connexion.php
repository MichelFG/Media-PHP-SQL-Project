<?php

require_once('./write_html.class.php');
require_once('./functions.php');

html_start("Page d'accueil",'./style.css');

echo '<div class="CNX">Connexion';
inputGen('text', 'Name','Nom','Votre nom','');
inputGen('password','pswd','password','Votre mot de passe','');
echo '<input class="subbuton" type="submit" name="Connexion" value="Connexion"/>'."\n";
echo '</div>';
echo '<div class="INS">Inscription';
inputGen('text','Name','Nom','Votre nom','');
inputGen('password','pswd','password','Votre mot de passe','');
echo '<input class="subbuton" type="submit" name="Inscription" value="Inscription"/>'."\n";
echo '</div>';
html_end();