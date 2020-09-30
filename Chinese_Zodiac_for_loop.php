<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>For Loop Zodiac Table</title>
<meta http-equiv="content-type"
    content="text/html; charset=iso-8859-1" />
</head>
<body>

<!-- Tamer Ayoub 2020 -->

<table border="1">
<tr>
<th>Rat</th><th>Ox</th><th>Tiger</th><th>Rabbit</th><th>Dragon</th><th>Snake</th><th>Horse</th><th>Sheep</th><th>Monkey</th><th>Rooster</th><th>Dog</th><th>Pig</th>
</tr>

<?php

$picArray = array('<th><img src="../ChineseZodiac/Images/Rat.png"/></th>', '<th><img src="../ChineseZodiac/Images/Ox.png"/></th>', '<th><img src="../ChineseZodiac/Images/Tiger.png"/></th>', '<th><img src="../ChineseZodiac/Images/Rabbit.png"/></th>',
'<th><img src="../ChineseZodiac/Images/Dragon.png"/></th>', '<th><img src="../ChineseZodiac/Images/Snake.png"/></th>', '<th><img src="../ChineseZodiac/Images/Snake.png"/></th>', '<th><img src="../ChineseZodiac/Images/Horse.png"/></th>', '<th><img src="../ChineseZodiac/Images/Sheep.png"/></th>',
'<th><img src="../ChineseZodiac/Images/Monkey.png"/></th>', '<th><img src="../ChineseZodiac/Images/Rooster.png"/></th>', '<th><img src="../ChineseZodiac/Images/Dog.png"/></th>', '<th><img src="../ChineseZodiac/Images/Pig.png"/></th>');

echo "<tr>";

for ($Count = 0; $Count < 12; ++$Count) {
    echo "$picArray[$Count]";
}

echo "</tr>";

for ($Count = 1912; $Count <= 1923; ++$Count) {
    echo "<th>$Count</th>";
}

echo "</tr>";

for ($Count = 1924; $Count <= 1935; ++$Count) {
    echo "<th>$Count</th>";
}

echo "</tr>";

for ($Count = 1936; $Count <= 1947; ++$Count) {
    echo "<th>$Count</th>";
}

echo "</tr>";

for ($Count = 1948; $Count <= 1959; ++$Count) {
    echo "<th>$Count</th>";
}

echo "</tr>";

for ($Count = 1960; $Count <= 1971; ++$Count) {
    echo "<th>$Count</th>";
}

echo "</tr>";

for ($Count = 1972; $Count <= 1983; ++$Count) {
    echo "<th>$Count</th>";
}

echo "</tr>";

for ($Count = 1984; $Count <= 1995; ++$Count) {
    echo "<th>$Count</th>";
}

echo "</tr>";

for ($Count = 1996; $Count <= 2007; ++$Count) {
    echo "<th>$Count</th>";
}

echo "</tr>";

for ($Count = 2008; $Count <= 2019; ++$Count) {
    echo "<th>$Count</th>";
}

echo "</tr>";

for ($Count = 2020; $Count <= 2020; ++$Count) {
    echo "<th>$Count</th>";
}

?>
</table>

</body>
</html>

