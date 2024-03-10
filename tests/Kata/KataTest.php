<?php

namespace Kata\Test;

use Kata\Kata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase {
    public function testWork() {
        $kata = new Kata();
        $this->assertTrue(true);
    }
}
