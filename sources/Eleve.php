<?php
namespace Enc;
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





