<?php

namespace Enc;
require "../vendor/autoload.php" ;

use PHPUnit\Framework\TestCase;

class NoteTest extends TestCase
{

    public function test__toString()
    {
        $note = new Note("Math",15,2,);
        $junk = new \DateTime();
        $this->assertEquals("Matière : Math Note : 15 Coefficient : 2 Date : ".$junk->format('Y-m-d'),$note->__toString());
    }
}
