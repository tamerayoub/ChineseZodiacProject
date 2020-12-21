<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Birth Year Zodiac Sign</title>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$AnimalSigns = array("Rat" => array("Start Date" => 1900, "End Date" => 2020, "President" => "George Washington"),
                    "Ox" => array("Start Date" => 1901, "End Date" => 2021, "President" => "Barack Obama"),
                    "Tiger" => array("Start Date" => 1902, "End Date" => 2022, "President" => "Dwight Eisenhower"),
                    "Rabbit" => array("Start Date" => 1903, "End Date" => 2023, "President" => "John Adams"),
                    "Dragon" => array("Start Date" => 1904, "End Date" => 2024, "President" => "Abraham Lincoln"),
                    "Snake" => array("Start Date" => 1905, "End Date" => 2025, "President" => "John Kennedy"),
                    "Horse" => array("Start Date" => 1906, "End Date" => 2026, "President" => "Theodore Roosevelt"),
                    "Goat" => array("Start Date" => 1907, "End Date" => 2027, "President" => "James Madison"),
                    "Monkey" => array("Start Date" => 1908, "End Date" => 2028, "President" => "Harry Truman"),
                    "Rooster" => array("Start Date" => 1909, "End Date" => 2029, "President" => "Grover Cleveland"),
                    "Dog" => array("Start Date" => 1910, "End Date" => 2030, "President" => "George Walker Bush"),
                    "Pig" => array("Start Date" => 1911, "End Date" => 2031, "President" => "Ronald Reagan"));
                    

$Dir = "statistics";


if (is_dir($Dir)) {
    

    if (isset($_POST['submit']) AND empty($_POST['year'])) {
        echo "Please fill in your birth year. </br>";
    }

    if (isset($_POST['submit']) AND !empty($_POST['year']) AND !is_numeric($_POST['year'])) {
        echo "Please type your birth year with numbers. </br>";
    }
    
    if (isset($_POST['submit']) AND !empty($_POST['year']) AND is_numeric($_POST['year'])) {
        $UserBirthYear = stripslashes($_POST['year']);
        $yearFile = $Dir . "/" . $UserBirthYear . ".txt";

   // if (file_exists($yearFile) AND is_writable($yearFile) AND is_readable($yearFile)) if the year has been entered before
        $UserBirthYear1 = $UserBirthYear . "\n";
        file_put_contents($yearFile, $UserBirthYear1, FILE_APPEND);
        $NumberLines = count(file($yearFile));
        $NumberLines1 = $NumberLines; // counts number of lines
    
 
    switch (true) {
        case ($UserBirthYear % 12 == 0) :
            echo "You were born under the sign of the Monkey </br>";
            echo '<img src="Images/Monkey.png" alt="monkey" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Monkey, you share a zodiac sign with President " . $AnimalSigns["Monkey"]["President"] . ".<br />";
            echo "Years of the Monkey include ";
            for ($i = $AnimalSigns["Monkey"]["Start Date"]; $i < $AnimalSigns["Monkey"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Monkey"]["End Date"] . ".";
            break;

        case ($UserBirthYear % 12 == 1) :
            echo "You were born under the sign of the Rooster </br>";
            echo '<img src="Images/Rooster.png" alt="rooster" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Rooster, you share a zodiac sign with President " . $AnimalSigns["Rooster"]["President"] . ".<br />";
            echo "Years of the Rooster include ";
            for ($i = $AnimalSigns["Rooster"]["Start Date"]; $i < $AnimalSigns["Rooster"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Rooster"]["End Date"] . ".";
            break;

        case ($UserBirthYear % 12 == 2) :
            echo "You were born under the sign of the Dog</br>";
            echo '<img src="Images/Dog.png" alt="dog" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Dog, you share a zodiac sign with President " . $AnimalSigns["Dog"]["President"] . ".<br />";
            echo "Years of the Dog include ";
            for ($i = $AnimalSigns["Dog"]["Start Date"]; $i < $AnimalSigns["Dog"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Dog"]["End Date"] . ".";
            break;
        
        case ($UserBirthYear % 12 == 3):
            echo "You were born under the sign of the Pig</br>";
            echo '<img src="Images/Pig.png" alt="pig" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Pig, you share a zodiac sign with Pig " . $AnimalSigns["Pig"]["President"] . ".<br />";
            echo "Years of the Pig include ";
            for ($i = $AnimalSigns["Pig"]["Start Date"]; $i < $AnimalSigns["Pig"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Pig"]["End Date"] . ".";
            break;
        
        case ($UserBirthYear % 12 == 4):
            echo "You were born under the sign of the Rat</br>";
            echo '<img src="Images/Rat.png" alt="rat" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Rat, you share a zodiac sign with President " . $AnimalSigns["Rat"]["President"] . ".<br />";
            echo "Years of the Rat include ";
            for ($i = $AnimalSigns["Rat"]["Start Date"]; $i < $AnimalSigns["Rat"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Rat"]["End Date"] . ".";
            break;
  
        case ($UserBirthYear % 12 == 5):
            echo "You were born under the sign of the Ox</br>";
            echo '<img src="Images/Ox.png" alt="ox" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Ox, you share a zodiac sign with President " . $AnimalSigns["Ox"]["President"] . ".<br />";
            echo "Years of the Ox include ";
            for ($i = $AnimalSigns["Ox"]["Start Date"]; $i < $AnimalSigns["Ox"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Ox"]["End Date"] . ".";
            break;
        
        case ($UserBirthYear % 12 == 6):
            echo "You were born under the sign of the Tiger</br>";
            echo '<img src="Images/Tiger.png" alt="tiger" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Tiger, you share a zodiac sign with President " . $AnimalSigns["Tiger"]["President"] . ".<br />";
            echo "Years of the Tiger include ";
            for ($i = $AnimalSigns["Tiger"]["Start Date"]; $i < $AnimalSigns["Tiger"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Tiger"]["End Date"] . ".";
            break;

        case ($UserBirthYear % 12 == 7):
            echo "You were born under the sign of the Rabbit</br>";
            echo '<img src="Images/Rabbit.png" alt="rabbit" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Rabbit, you share a zodiac sign with President " . $AnimalSigns["Rabbit"]["President"] . ".<br />";
            echo "Years of the Rabbit include ";
            for ($i = $AnimalSigns["Rabbit"]["Start Date"]; $i < $AnimalSigns["Rabbit"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Rabbit"]["End Date"] . ".";
            break;

        case ($UserBirthYear % 12 == 8):
            echo "You were born under the sign of the Dragon</br>";
            echo '<img src="Images/Dragon.png" alt="dragon" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Dragon, you share a zodiac sign with President " . $AnimalSigns["Dragon"]["President"] . ".<br />";
            echo "Years of the Dragon include ";
            for ($i = $AnimalSigns["Dragon"]["Start Date"]; $i < $AnimalSigns["Dragon"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Dragon"]["End Date"] . ".";
            break;
  
        case ($UserBirthYear % 12 == 9):
            echo "You were born under the sign of the Snake</br>";
            echo '<img src="Images/Snake.png" alt="snake" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Snake, you share a zodiac sign with President " . $AnimalSigns["Snake"]["President"] . ".<br />";
            echo "Years of the Snake include ";
            for ($i = $AnimalSigns["Snake"]["Start Date"]; $i < $AnimalSigns["Snake"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Snake"]["End Date"] . ".";
            break;
    
        case ($UserBirthYear % 12 == 10):
            echo "You were born under the sign of the Horse</br>";
            echo '<img src="Images/Horse.png" alt="horse" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Horse, you share a zodiac sign with President " . $AnimalSigns["Horse"]["President"] . ".<br />";
            echo "Years of the Horse include ";
            for ($i = $AnimalSigns["Horse"]["Start Date"]; $i < $AnimalSigns["Horse"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Horse"]["End Date"] . ".";
            break;

        case ($UserBirthYear % 12 == 11):
            echo "You were born under the sign of the Goat</br>";
            echo '<img src="Images/Goat.png" alt="goat" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
            echo "If your Chinese zodiac sign is the Goat, you share a zodiac sign with President " . $AnimalSigns["Goat"]["President"] . ".<br />";
            echo "Years of the Goat include ";
            for ($i = $AnimalSigns["Goat"]["Start Date"]; $i < $AnimalSigns["Goat"]["End Date"]; $i+=12) {
                echo $i . ", ";
            }
            echo "and " . $AnimalSigns["Goat"]["End Date"] . ".";
            break;
        }
    }
}
    else {
        echo "Make a valid directory";
    }
    
?>

<h2>Find your chinese zodiac animal sign</h2>
<form action="BirthYear_switch.php" method="POST">
Your birth year: <input type="text" name="year" /><br />
<input type="submit" name="submit" value="Submit" /><br />
</form>

</body>
</html>