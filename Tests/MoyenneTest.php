<?php


use Enc\Moyenne;
use Enc\Note;
use PHPUnit\Framework\TestCase;

class MoyenneTest extends TestCase
{

    public function testCalculMoyenneNaive()
    {
        $listeNotes1 = array(new Note("Math", 12, 2, "2021-01-01"),
            new Note("Math", 16, 4, "2021-03-01")) ;
        $this->assertEquals("14",Moyenne::calculMoyenneNaive($listeNotes1), "Pas le bon résultat attendu");

    }

    public function testCalculVraieMoyenne()
    {
        $listeNotes2 = array(new Note("Math", 12, 2, "2021-01-01"),
            new Note("Math", 16, 4, "2021-03-01")) ;
       // $this->assertEquals("14.666666666667","$listeNotes2", "Pas le bon résultat attendu");
        $this->assertEqualsWithDelta("14.666666666667", Moyenne::calculVraieMoyenne($listeNotes2),0.01, "Pas le bon résultat attendu");

    }
}
