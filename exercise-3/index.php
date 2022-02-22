<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//EXERCISE 3
// Copy the code of exercise 2 to here and delete everything related to cola.
// Make all properties private.
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

    public function getColor(): string
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

    // Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
    //Make sure that you use the variables and not just this text line.
    private function beerInfo()
    {
        return "Hi i'm {$this -> name} and have an alcohol percentage of {$this -> alcPercentage} and I have a {$this -> getColor()} color.";
    }

    public function getBeerInfo()
    {
        return $this -> beerInfo();
    }
}

$duvel = new Beer ('blond',3.5,'cold','duvel',8.5);

// Make all the prints work without error.
echo 'Result exercise 3:'.'<br><br>';
echo $duvel -> getAlcPercentage().'% - ';
echo $duvel -> getColor().'<br>';
echo $duvel -> getAlcPercentage().'% - ';
echo $duvel -> getInfo().'<br><br>';

// After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed
// (to be sure that the color has changed).
$duvel = new Beer ('light',3.5,'cold','duvel',8.5);
echo $duvel -> getAlcPercentage().'% - ';
echo $duvel -> getColor().'<br>';

// Print this method on the screen on a new line.
//USE TYPEHINTING EVERYWHERE!
echo $duvel -> getBeerInfo().'<br>';
