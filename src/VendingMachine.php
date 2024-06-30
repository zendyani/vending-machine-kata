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

    private string $productName = '';

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

        $this->productName = $name;

        return true;
    }

    public function buy() {
        if ($this->products[$this->productName] > $this->getBalance()) {
            throw new \InvalidArgumentException(sprintf("Not enought coin for %s", $this->productName));
        }

        $change = $this->getBalance() - $this->products[$this->productName];
        $changeInCoin = [];
        rsort($this->validCoins);

        foreach ($this->validCoins as $coin) {
            while($change >= $coin) {
                $changeInCoin[] = $coin;
                $change -= $coin;
            }
        }

        $this->balance = 0;
        $this->productName = '';

        return $changeInCoin;

    }

}
