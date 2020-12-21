<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>View Zodiac Feedback</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

    <?php

    include("Includes/inc_connect.php");
    $db_table = "zodiacfeedback";

    $SQLstring = "SELECT * FROM $db_table WHERE public_message = 'Y'";

    $QueryResult = @mysqli_query($DBConnect, $SQLstring);

    // $SQLString2 = "SELECT COUNT() FROM $db_table";
    // $QueryResult2 = @mysqli_query($DBConnect, $SQLString2);

    // $Row = mysqli_fetch_assoc($QueryResult);

    if ($QueryResult !== FALSE) {

        echo "<table width='100%' border='1'>\n";
        echo "<tr><th>Message</th><th>Public Message</th><th>Date</th><th>Time</th></tr>\n";
        while ($Row = mysqli_fetch_assoc($QueryResult)) {
            echo "<tr><td>{$Row['message']}</td>";
            echo "<td>{$Row['public_message']}</td>";
            echo "<td>{$Row['message_date']}</td>";
            echo "<td>{$Row['message_time']}</td></tr>\n";
        }
        echo "</table>\n";
        mysqli_free_result($QueryResult);
        mysqli_close($DBConnect);
    }


    ?>

</body>

</html>