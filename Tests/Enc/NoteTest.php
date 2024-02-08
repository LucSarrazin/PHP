<?php

namespace Enc;

use Note;
use PHPUnit\Framework\TestCase;

class NoteTest extends TestCase
{

    public function test__toString()
    {
        $note = new Note("Math",15,2,"2020-01-01");
        $this->assertEquals("Matière : Math Note :15 Coefficient : 2 Date : 2020-01-01", $note->__toString());
    }
}
