<?php

namespace Kata;

class VendingMachine
{

    private array $validCoins = [1, 2, 5, 10, 20, 50, 100];
    private int $balance = 0;
    private array $products = [
        'A' => 95,
        'B' => 126,
        'C' => 233
    ];

    public function addCoin(int $coin): bool
    {
        if(!in_array($coin, $this->validCoins)) {
            throw new \InvalidArgumentException('Coin not valid');
        }
        $this->balance += $coin;
        return true;
    }

    public function getBalance(): int {
        return $this->balance;
    }

    public function selectProduct(string $name): bool {
        if (!array_key_exists($name, $this->products)) {
            throw new \InvalidArgumentException('Product does not exist');
        }
        
        return true;
    }

}
