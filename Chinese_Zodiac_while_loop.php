<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>While Loop Zodiac Table</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

    <!-- Tamer Ayoub 2020 -->

    <table border="1">
        <tr>
            <th>Rat</th>
            <th>Ox</th>
            <th>Tiger</th>
            <th>Rabbit</th>
            <th>Dragon</th>
            <th>Snake</th>
            <th>Horse</th>
            <th>Sheep</th>
            <th>Monkey</th>
            <th>Rooster</th>
            <th>Dog</th>
            <th>Pig</th>
        </tr>

        <?php

        $picArray = array(
            '<th><img src="../ChineseZodiac/Images/Rat.png"/></th>', '<th><img src="../ChineseZodiac/Images/Ox.png"/></th>', '<th><img src="../ChineseZodiac/Images/Tiger.png"/></th>', '<th><img src="../ChineseZodiac/Images/Rabbit.png"/></th>',
            '<th><img src="../ChineseZodiac/Images/Dragon.png"/></th>', '<th><img src="../ChineseZodiac/Images/Snake.png"/></th>', '<th><img src="../ChineseZodiac/Images/Horse.png"/></th>', '<th><img src="../ChineseZodiac/Images/Goat.png"/></th>', '<th><img src="../ChineseZodiac/Images/Monkey.png"/></th>',
            '<th><img src="../ChineseZodiac/Images/Rooster.png"/></th>', '<th><img src="../ChineseZodiac/Images/Dog.png"/></th>', '<th><img src="../ChineseZodiac/Images/Pig.png"/></th>'
        );

        echo "<tr>";

        $Count = 0;

        while ($Count < 12) {
            echo "$picArray[$Count]";
            ++$Count;
        }

        echo "</tr>";

        $Count = 1912;

        while ($Count <= 1923) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        echo "</tr>";

        $Count = 1924;

        while ($Count <= 1935) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        echo "</tr>";

        $Count = 1936;

        while ($Count <= 1947) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        echo "</tr>";

        $Count = 1948;

        while ($Count <= 1959) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        echo "</tr>";

        $Count = 1960;

        while ($Count <= 1971) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        echo "</tr>";

        $Count = 1972;

        while ($Count <= 1983) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        echo "</tr>";

        $Connt = 1984;

        while ($Count <= 1995) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        echo "</tr>";

        $Count = 1996;

        while ($Count <= 2007) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        echo "</tr>";

        $Count = 2008;

        while ($Count <= 2019) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        echo "</tr>";

        $Count = 2020;

        while ($Count <= 2020) {
            echo "<th>$Count</th>";
            ++$Count;
        }

        ?>
    </table>

</body>

</html>