<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 
Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Process Zodiac Feedback</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

    <?php


    if (isset($_POST['submit']) and isset($_POST['Y']) and isset($_POST['N'])) {
        echo "Please select only one of the display options.</br>";
    }
    if (isset($_POST['submit']) and !isset($_POST['Y']) and !isset($_POST['N'])) {
        echo "Please select one of the display options.</br>";
    }
    if (isset($_POST['submit']) and (isset($_POST['Y']) and !isset($_POST['N'])) or (!isset($_POST['Y']) and isset($_POST['N']))) {

        include("Includes/inc_connect.php");
        $db_table = "zodiacfeedback";

        // $SQLstring1 = "CREATE TABLE $db_table (name CHAR(25), message VARCHAR(500), public_message CHAR(10), message_date VARCHAR(20), message_time VARCHAR(20))";

        if (isset($_POST['Y'])) {
            $publicDisplayer = "Y";
        } else {
            $publicDisplayer = "N";
        }

        // $SQLstring2 = "INSERT INTO $db_table VALUES (" . "'" .  $_POST['name'] . "', '" . $_POST['message'] . "', '" . $publicDisplayer . "', " . date("Y-m-d") . ", " . date("h:i:s") . ")";
        $SQLstring2 = "INSERT INTO $db_table (message_date, message_time, name, message, public_message) VALUES (" . "'" . date("Y-m-d") . "', '" . date("h:i:s") . "', '" . $_POST['name'] . "', '" . $_POST['message'] . "', '$publicDisplayer')";

        // $QueryResult1 = mysqli_query($DBConnect, $SQLstring1); this will equal false if the table is already created

        // if ($QueryResult1) { // table is already created, just insert values
        $QueryResult2 = mysqli_query($DBConnect, $SQLstring2);
        if ($QueryResult2 === FALSE) {
            echo "Not able to add the data";
        } else {
            echo "Thank you. Table was already succesfully created and values have just been added";
        }
        // else { insert the values
        //     $QueryResult1 = mysqli_query($DBConnect, $SQLstring1);
        //     $QueryResult2 = mysqli_query($DBConnect, $SQLstring2);
        //     echo "Thank you. Table was succesfully created and values have been added";
        // }
        mysqli_close($DBConnect);
    }

    // the table is created but for some reason I cant add the values to the table

    ?>

</body>

</html>