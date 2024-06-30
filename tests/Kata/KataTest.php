<?php

namespace Kata\Test;

use Kata\VendingMachine;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase {
    public function testAddCoin_WithInvalidCoin_ShouldThrowInvalidArgumentException() {
        $kata = new VendingMachine();
        $this->expectException(\InvalidArgumentException::class);
        $kata->addCoin(55);
    }
}
