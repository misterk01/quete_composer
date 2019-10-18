<?php

/*la page index est celle qui gere l'affichage sur le navigateur*/

require_once '../vendor/autoload.php';
require_once '../src/Wcs/hello.php';

use HelloWorld\SayHello;
use App\Wcs\Hello;

/*Instancier un nouvel objet*/

$parler = new Hello();

echo $parler->talk();
echo SayHello::world();
