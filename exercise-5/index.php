<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//EXERCISE 5
//Copy the class of exercise 1.
// Change the properties to private.
class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

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

    public function getColor()
    {
        return $this -> color;
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcPercentage;

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
}

$duvel = new Beer ('blond',3.5,'cold','duvel',8.5);

// Make all the other prints work without error without changing the beverage class.
//USE TYPEHINTING EVERYWHERE!
echo 'Result exercise 5:'.'<br><br>';
echo $duvel -> getAlcPercentage().'% - ';
echo $duvel -> getColor().'<br>';
echo $duvel -> getAlcPercentage().'% - ';
echo $duvel -> getInfo().'<br><br>';

//TODO: Fix the errors without using getter and setter functions.
//TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
// Add stuff inside of function...
