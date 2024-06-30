<?php

namespace Kata\Test;

use Kata\VendingMachine;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase {
    public function testAddCoin_WithInvalidCoin_ShouldThrowInvalidArgumentException() {
        $vm = new VendingMachine();
        $this->expectException(\InvalidArgumentException::class);
        $vm->addCoin(55);
    }

    public function testAddCoin_WithValidAndInvalidCoins_ShouldThrowInvalidArgumentException(){
        $vm = new VendingMachine();
        $this->expectException(\InvalidArgumentException::class);

        $vm->addCoin(1);
        $vm->addCoin(55);
        $vm->addCoin(10);
    }

    public function testAddCoin_WithValidCoin_ShouldReturnTrue() {
        $vm = new VendingMachine();
        $result = $vm->addCoin(50);
        $this->assertEquals(true, $result);
    }

    public function testAddCoins_WithValidCoins_ShouldReturnTotalCoinsAdded() {
        $vm = new VendingMachine();
        $vm->addCoin(1);
        $vm->addCoin(5);
        $vm->addCoin(10);

        $result = $vm->getBalance();
        $this->assertEquals(16, $result);
    }

    public function testSelectProduct_WithValidProduct_ShouldReturnTrue() {
        $vm = new VendingMachine();
        $result = $vm->selectProduct('A');
        $this->assertEquals(true, $result);
    }

    public function testSelectProduct_WithInvalidProduct_ShouldThrowInvalidArgumentException() {
        $vm = new VendingMachine();
        $this->expectException(\InvalidArgumentException::class);
        $vm->selectProduct('D');
    }


}
