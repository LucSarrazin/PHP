<?php
Class Eleve {
    private $nom ;
    private $prenom ;

    public function __construct($unNom,$unPrenom){

        $this->nom = $unNom;
        $this->prenom = $unPrenom;
    }

    public function Travaille()
    {
        return "L'élève $this->nom $this->prenom vous travaillez comme il le faut \n";
    }

}

$mrRobert = new Eleve("Robert","Timothée");
$mrFlores = new Eleve("Flores","Peter");
$mrTandia = new Eleve("Tandia","Sekou");
$mrSterenn = new Eleve("Gougeon","Sterenn");
echo $mrRobert->Travaille();
echo $mrFlores->Travaille();
echo $mrTandia->Travaille();
echo $mrSterenn->Travaille();




