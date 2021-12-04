<?php

use App\Models\AnnoncesModel;

include_once 'Autoloader.php';

Autoloader::register();

$annonce = new AnnoncesModel;
$annonces = $annonce->find(2);
var_dump($annonces);
