<?php
namespace Enc ;
require "../vendor/autoload.php" ;

/*$csv = 'C:\laragon\www\LucS\Fichier\Robert.csv';
$csv = read($csv);
echo '<pre>';
print_r($csv);
echo '</pre>';
return $contenu ;*/

/*print_r(CSV::read("..\Fichier\Robert.csv")) ;*/

echo CSV::read("..\Fichier\Robert.csv");
