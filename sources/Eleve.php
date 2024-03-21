<?php
namespace Enc;
class Eleve
{
    private $nom;
    private $prenom;

    private $ListeNote = array();

    public function __construct($parametreNom, $parametrePrenom)
    {
        $this->nom = $parametreNom;
        $this->prenom = $parametrePrenom;
    }

    public function travaille(): string
    {
        return "Je suis l' élève $this->prenom $this->nom et je travaille sérieusement\n";
    }

    public function __toString() {
        return "L'élève est: ".$this->prenom." ". $this->nom ;
    }

}

