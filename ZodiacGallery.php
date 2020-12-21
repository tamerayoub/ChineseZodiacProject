<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Zodiac Gallery</title>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

$imageArray = array("Rat.png" => "<figcaption>Rat Zodiac</figcaption>", "Ox.png" => "<figcaption>Ox Zodiac</figcaption>", 
                    "Tiger.png" => "<figcaption>Tiger Zodiac</figcaption>","Rabbit.png" => "<figcaption>Rabbit Zodiac</figcaption>",
                        "Dragon.png" => "<figcaption>Dragon Zodiac</figcaption>", "Snake.png" => "<figcaption>Snake Zodiac</figcaption>",
                         "Horse.png" => "<figcaption>Horse Zodiac</figcaption>", "Goat.png" => "<figcaption>Goat Zodiac</figcaption>",
                        "Monkey.png" => "<figcaption>Monkey Zodiac</figcaption>", "Rooster.png" => "<figcaption>Rooster Zodiac</figcaption>",
                         "Dog.png" => "<figcaption>Dog Zodiac</figcaption>", "Pig.png" => "<figcaption>Pig Zodiac</figcaption>");

foreach($imageArray as $image => $caption) {
    
    echo "<figure style='width: 25%; float: left; margin: 0; text-align: center; padding: 0;'>";
    echo "<a href='Images/" . $image . "'>" . "<img src='Images/". $image . "' width='50' height='50'></a>";
    echo "$caption";
    echo "</figure>";

}


?>


</body>
</html>