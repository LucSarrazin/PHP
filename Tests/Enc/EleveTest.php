<?php

namespace Enc;

use PHPUnit\Framework\TestCase;

class EleveTest extends TestCase
{

    public function testTravaille()
    {
        $mrSarrazin = new Eleve("Sarrazin","Luc");
        $this->assertEquals("L'élève Sarrazin Luc vous travaillez comme il le faut \n", $mrSarrazin->Travaille(), "C'est pas réalisé !");
    }
}
