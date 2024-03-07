<?php


use Enc\Moyenne;
use Enc\Note;
use PHPUnit\Framework\TestCase;

class MoyenneTest extends TestCase
{

    public function testCalculMoyenneNaive()
    {
        $listeNotesMathRobert = array( new Note("Math", 12, 2, "2021-01-01"),
            new Note("Math", 16, 4, "2021-03-01")) ;
        $this->assertEquals("$listeNotesMathRobert","");

    }

    public function testCalculVraieMoyenne()
    {
        $listeNotesMathRobert = array( new Note("Math", 12, 2, "2021-01-01"),
            new Note("Math", 16, 4, "2021-03-01")) ;

    }
}
