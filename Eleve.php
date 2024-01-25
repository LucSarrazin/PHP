<?php
Class Eleve {
    private $nom ;
    private $prenom ;

    public function Travaille()
    {
        return "L'élève travaille comme il faut";
    }

}
$mrRobert = new Eleve();
echo $mrRobert->Travaille();


