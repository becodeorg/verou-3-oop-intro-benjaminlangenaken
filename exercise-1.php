<?php

declare(strict_types=1);

//EXERCISE 1

// Create a class beverage.
class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;

    // Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    // Have a default value "cold" in the construct for temperature.
    function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // Make a getInfo function which returns "This beverage is <temperature> and <color>."
    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }
}

//Remember for now we will use properties and methods that can be accessed from everywhere.
// Instantiate an object which represents cola.
// Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
$cola = new Beverage ('black', 2, 'cold');

// Print the getInfo on the screen.
echo $cola -> getInfo()."<br><br>";

// Print the temperature on the screen.
echo $cola -> temperature."<br>";
