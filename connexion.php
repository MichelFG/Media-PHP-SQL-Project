<?php

require_once('./write_html.class.php');
require_once('./functions.php');

html_start("Page d'accueil",'./style.css');

echo 'Connexion';
inputGen('text', 'Name','Nom','Votre nom','');
inputGen('password','pswd','password','Votre mot de passe','');
echo '<input class="subbuton" type="submit" name="Connexion" value="Connexion"/>'."\n<br>";
echo 'Inscription';
inputGen('text','Name','Nom','Votre nom','');
inputGen('password','pswd','password','Votre mot de passe','');
echo '<input class="subbuton" type="submit" name="Inscription" value="Inscription"/>'."\n";
html_end();