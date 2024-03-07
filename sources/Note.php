<?php
namespace Enc;
class Note{
    private $matiere;
    private $valeurNote;
    private $coefficient;
    private $date;
    public function __construct($matiere,$valeurNote,$coefficient,$date=null)
    {
        $this->matiere = $matiere;
        $this->valeurNote = $valeurNote;
        $this->coefficient = $coefficient;
        $this->date = (is_null($date) ? new \DateTime(): new \DateTime($date));
    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        $junk = $this->date->format('Y-m-d') ;
        return "Matière : $this->matiere Note : $this->valeurNote Coefficient : $this->coefficient Date : $junk";
    }


}