<?php
require 'Eleve.php';

$mrRobert = new Eleve("Robert","Timothée");
$mrFlores = new Eleve("Flores","Peter");
$mrTandia = new Eleve("Tandia","Sekou");
$mrSterenn = new Eleve("Gougeon","Sterenn");
echo $mrRobert->Travaille();
echo $mrFlores->Travaille();
echo $mrTandia->Travaille();
echo $mrSterenn->Travaille();
