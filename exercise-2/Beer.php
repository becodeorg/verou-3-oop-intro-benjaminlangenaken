<?php

declare(strict_types=1);

//EXERCISE 2
// Make class beer that extends from Beverage.
class Beer extends Beverage
{
    // Create the properties name (string) and alcoholpercentage (float).
    public string $name;
    public float $alcPercentage;

    // Foresee a construct that's allows us to use all the properties from beverage
    // and that sets the values for name and alcoholpercentage.
    public function __construct(string $color, float $price, string $temperature, string $name, float $alcPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this -> name = ucfirst($name); // ucfirst() => Uppercase first letter of string
        $this -> alcPercentage = $alcPercentage;
    }

    //Remember for now we will use properties and methods that can be accessed from everywhere.
    // Make a getAlcoholpercentage function which returns the alocoholpercentage.
    public function getAlcPercentage(): float
    {
        return $this -> alcPercentage;
    }
}
