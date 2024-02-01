<?php
namespace Enc;
require "../vendor/autoload.php";

$mrRobert = new Eleve("Robert","Timothée");
$mrFlores = new Eleve("Flores","Peter");
$mrTandia = new Eleve("Tandia","Sekou");
$mrSterenn = new Eleve("Gougeon","Sterenn");
echo $mrRobert->Travaille();
echo $mrFlores->Travaille();
echo $mrTandia->Travaille();
echo $mrSterenn->Travaille();

$mrSTANDIA = new Eleve("Standia","Sekou");
echo $mrSTANDIA->Travaille();