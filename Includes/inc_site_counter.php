<?php
include("inc_connect.php");
if (empty($_COOKIE["visits"])) {
    // increment the counter in the database
    $SQLstring = "UPDATE visit_counter SET counter = counter + 1 WHERE id = 1";
    mysqli_query($DBConnect, $SQLstring);
    // query the visit_counter table and assign the counter value to the $visitors table 
    $SQLstring2 = "SELECT counter FROM visit_counter WHERE id = 1";
    $queryResult = mysqli_query($DBConnect, $SQLstring2);
    if (($row = mysqli_fetch_assoc($queryResult)) !== FALSE)
        $visitors = $row['counter'];
    else
        $vistors = 1;
    // set the cookie value
    setcookie("visits", $visitors, time() + (60 * 60 * 24));
} else // Otherwise, assign the cookie value to the $visitor variable
    $visitors = $_COOKIE["visits"];
