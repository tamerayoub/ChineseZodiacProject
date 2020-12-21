<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Birth Year Zodiac Sign</title>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

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
    
 
        
        if ($UserBirthYear % 12 == 0) {
            echo "You were born under the sign of the Monkey </br>";
            echo '<img src="Images/Monkey.png" alt="monkey" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }

        if ($UserBirthYear % 12 == 1) {
            echo "You were born under the sign of the Rooster </br>";
            echo '<img src="Images/Rooster.png" alt="rooster" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }

        if ($UserBirthYear % 12 == 2) {
            echo "You were born under the sign of the Dog</br>";
            echo '<img src="Images/Dog.png" alt="dog" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        
        }
    
        if ($UserBirthYear % 12 == 3) {
            echo "You were born under the sign of the Pig</br>";
            echo '<img src="Images/Pig.png" alt="pig" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }

        if ($UserBirthYear % 12 == 4) {
            echo "You were born under the sign of the Rat</br>";
            echo '<img src="Images/Rat.png" alt="rat" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }
    
        if ($UserBirthYear % 12 == 5) {
            echo "You were born under the sign of the Ox</br>";
            echo '<img src="Images/Ox.png" alt="ox" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }
    
        
        if ($UserBirthYear % 12 == 6) {
            echo "You were born under the sign of the Tiger</br>";
            echo '<img src="Images/Tiger.png" alt="tiger" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }

        if ($UserBirthYear % 12 == 7) {
            echo "You were born under the sign of the Rabbit</br>";
            echo '<img src="Images/Rabbit.png" alt="rabbit" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }

        if ($UserBirthYear % 12 == 8) {
            echo "You were born under the sign of the Dragon</br>";
            echo '<img src="Images/Dragon.png" alt="dragon" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }
  
        if ($UserBirthYear % 12 == 9) {
            echo "You were born under the sign of the Snake</br>";
            echo '<img src="Images/Snake.png" alt="snake" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }
    
        if ($UserBirthYear % 12 == 10) {
            echo "You were born under the sign of the Horse</br>";
            echo '<img src="Images/Horse.png" alt="horse" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }

        if ($UserBirthYear % 12 == 11) {
            echo "You were born under the sign of the Goat</br>";
            echo '<img src="Images/Goat.png" alt="goat" /></br>';
            echo "You are visitor " . $NumberLines1 . " to enter " . $UserBirthYear . ".</br>";
        }
    
    
    }
}
    else {
        echo "Make a valid directory";
    }
?>

<h2>Find your chinese zodiac animal sign</h2>
<form action="BirthYear_ifelse.php" method="POST">
Your birth year: <input type="text" name="year" /><br />
<input type="submit" name="submit" value="Submit" /><br />
</form>

</body>
</html>