<!-- from what i understand we're going to display the title of our event 
using the getMonthlyCalender method and then from there if user clicks the link
we can display the description -->

<?php
session_start();
require_once("class_EventCalendar.php");
if (class_exists("EventCalendar")) {
    if (isset($_SESSION['currentCalendar']))
        $Calendar = unserialize($_SESSION['currentCalendar']);
    else {
        $Calendar = new EventCalendar();
    }
} else {
    $Calendar = NULL;
}
?>


<?php

$Calendar->getEventDetails($_GET['EventID']);
$_SESSION['currentCalendar'] = serialize($Calendar);



?>

<a href="EventCalendar.php?PHPSESSID=<?php echo session_id(); ?>">View the event calendar</a>