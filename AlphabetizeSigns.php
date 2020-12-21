<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Alphabetize Signs</title>

<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

<?php

if (isset($_POST['submit'])) {
    if (empty($_POST['zodiacSign'])) {
       echo "Please enter your zodiac signs <br />";
    }
    $comma = ",";
    $commaCheck = strpos($_POST['zodiacSign'], $comma);

    if (empty($_POST['zodiacSign']) AND $commaCheck === False) {
       echo "Please enter your commas";
    }
    else {
        $zodiacList = explode(",", $_POST['zodiacSign']);
        $zodiacCount = count($zodiacList);
        sort($zodiacList);
        print_r($zodiacList);
        
        echo "<ol>";
        for ($i = 0; $i < $zodiacCount; $i++) {
            echo "<li>";
            echo $zodiacList[$i];
            echo "</li>";
        }
        echo "</ol>";
        
    }

}

?>

<h2>Alphabetizing Signs</h2>
<form action="AlphabetizeSigns.php" method="POST">
Please try entering 12 zodiac signs in random order, signs must be seperated with commas <br />
<input type="text" name="zodiacSign" size="85"/><br />
<input type="submit" name="submit" value="Submit" /><br />
We will dispay the entered signs alphabetically after submission
</form>

</body>
</html>