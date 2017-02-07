<?php

require_once('./make_html.class.php');
require_once('./functions.class.php');

MakeHTML::html_start("Connexion");

Form_GEN::formuGen();
Form_GEN::formuGen();

MakeHTML::html_end();