<?php

declare(strict_types=1);

//EXERCISE 4
//Copy the code of exercise 2 to here and delete everything related to cola.
// Make all properties protected.
class Beverage
{
    protected string $color;
    protected float $price;
    protected string $temperature;

    function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}";
    }
}

class Beer extends Beverage
{
    protected string $name;
    protected float $alcPercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = ucfirst($name); // ucfirst() => Uppercase first letter of string
        $this->alcPercentage = $alcPercentage;
    }

    public function getAlcPercentage(): float
    {
        return $this->alcPercentage;
    }

    // Add function to child element to have access to color from parent element
    public function getColor(): string
    {
        return $this -> color;
    }
}

$duvel = new Beer ('blond',3.5,'cold','duvel',8.5);

// Make all the other prints work without error without changing the beverage class.
//USE TYPEHINTING EVERYWHERE!
echo 'Result exercise 4:'.'<br><br>';
echo $duvel -> getAlcPercentage().'% - ';
echo $duvel -> getColor().'<br>';
echo $duvel -> getAlcPercentage().'% - ';
echo $duvel -> getInfo().'<br><br>';
