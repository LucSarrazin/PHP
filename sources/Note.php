<?php
namespace Enc;
class Note{
    private $matiere;
    private $valeurNote;
    private $coefficient;
    private $date;
    public function __construct($matiere,$date,$coefficient,$valeurNote)
    {
        $this->date = new DateTime();
        $this->matiere = $matiere;
        $this->valeurNote = $valeurNote;
        $this->coefficient = $coefficient;
    }
    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return "La note de $this->matiere est $this->valeurNote avec coefficient $this->coefficient date du $this->date";
    }


}