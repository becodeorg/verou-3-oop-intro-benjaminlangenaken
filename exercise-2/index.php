<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../exercise-1/Beverage.php';
require './Beer.php';

// Instantiate an object which represents Duvel.
// Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
// Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer ('blond',3.5,'cold','duvel',8.5);

// Print the getAlcoholpercentage 2 times on the screen in two different ways:
// 1) Print the getAlcoholpercentage and the color on the screen
// 2) Print the getAlcoholpercentage and the getInfo on the screen

//Make sure that each print is on a different line.
//Try to get this error on the screen:
//Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in ... on line 64
//USE TYPEHINTING EVERYWHERE!
echo 'Result exercise 2:'.'<br><br>';
echo $duvel -> getAlcPercentage().'% - ';
echo $duvel -> color.'<br>';
echo $duvel -> getAlcPercentage().'% - ';
echo $duvel -> getInfo().'<br><br>';
