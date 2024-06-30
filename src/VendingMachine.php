<?php

namespace Kata;

class VendingMachine
{

    private array $validCoins = [1, 2, 5, 10, 20, 50, 100];

    public function addCoin(int $coin)
    {
        if(!in_array($coin, $this->validCoins)) {
            throw new \InvalidArgumentException('Coin not valid');
        }
    }

}
