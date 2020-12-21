<?php
class EventCalendar
{
    private $DBConnect = NULL;

    function __construct()
    {
        include("Includes/inc_ChineseZodiacDB.php");
        $this->DBConnect = $DBConnect;
    }

    function __destruct()
    {
        if (!$this->DBConnect->connect_error)
            $this->DBConnect->close();
    }

    function __wakeup()
    {
        include("Includes/inc_ChineseZodiacDB.php");
        $this->DBConnect = $DBConnect;
    }

    public function addEvent($Date, $Title, $Description)
    {
        if ((!empty($Date)) && (!empty($Title))) {
            $SQLstring1 = "USE chinese_zodiac"; //I added this because it said I had no databases selected
            $SQLstring = "INSERT INTO event_calendar (EventDate, Title, Description) VALUES('$Date', '$Title', '$Description')";
            $QueryResult1 = $this->DBConnect->query($SQLstring1); // and this aswell, now complete 10-4 to get the event displayed up on the calendar
            $QueryResult = $this->DBConnect->query($SQLstring);
            if ($QueryResult === FALSE)
                echo "<p>Unable to save the event. Error code " . $this->DBConnect->errno . ": " . $this->DBConnect->error . "</p>\n";
            else
                echo "<p>The event was successfully saved.</p>\n";
        } else
            echo "<p>You must provide a date and title for the event.</p>\n";
    }

    public function getMonthlyCalendar($Year, $Month)
    {
        if (empty($Year))
            $Year = date('Y'); // Four digit year
        if (empty($Month))
            $Month = date('n'); // Month number, no leading 0
        $FirstDay = mktime(0, 0, 0, $Month, 1, $Year);
        $FirstDOW = date('w', $FirstDay); // Day of week
        $LeapYearFlag = date('L', $FirstDay); // 1=LeapYear, 0=not
        $MonthName = date('F', $FirstDay); // Month name 
        if ($Month == 2)
            $LastDay = 28 + $LeapYearFlag;
        else if (($Month == 4) || ($Month == 6) || ($Month == 9) || ($Month == 11))
            $LastDay = 30;
        else
            $LastDay = 31;
        echo "<table>\n";
        // Create the calender heading
        echo "<tr><td><a href='" . $_SERVER['SCRIPT_NAME'] . "?PHPSESSID=" . session_id() . "&Year=" . ($Year - 1) . "&Month=$Month'>Previous Year</a></td>\n";
        if ($Month == 1)
            echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . "?PHPSESSID=" . session_id() . "&Year=" . ($Year - 1) . "&Month=12'>Previous Month</a></td>\n";
        else
            echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . "?PHPSESSID=" . session_id() . "&Year=$Year" . "&Month=" . ($Month - 1) . "'>Previous Month</a></td>\n";
        echo "<td colspan='3'>$MonthName $Year</td>\n";
        if ($Month == 12)
            echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . "?PHPSESSID=" . session_id() . "&Year=" . ($Year + 1) . "&Month=1'>Next Month</a></td>\n";
        else
            echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . "?PHPSESSID=" . session_id() . "&Year=$Year" . "&Month=" . ($Month + 1) . "'>Next " . "Month</a></td>\n";
        echo "<td><a href='" . $_SERVER['SCRIPT_NAME'] . "?PHPSESSID=" . session_id() . "&Year=" . ($Year + 1) . "&Month=$Month'>Next Year</a></td></tr>\n";
        echo "<tr>";
        // insert empty cells for days from Sunday to the first day
        for ($i = 0; $i < $FirstDOW; ++$i)
            echo "<td>&nbsp;</td>";
        for ($i = 1; $i <= $LastDay; ++$i) {
            if ((($FirstDOW + $i) % 7) == 1)
                echo "<tr>";
            echo "<td valign='top'>$i";
            $SQLstring = "SELECT EventID, Title FROM event_calendar WHERE EventDate='$Year-$Month-$i'";
            $QueryResult = @$this->DBConnect->query($SQLstring);
            if ($QueryResult !== FALSE) {
                if ($QueryResult->num_rows > 0) {
                    while (($Row = $QueryResult->fetch_assoc()) !== NULL)
                        echo "<br /><a href='EventDetails.php?" . "PHPSESSID=" . session_id() . "&EventID=" . $Row['EventID'] . "'>" . htmlentities($Row['Title']) . "</a>";
                }
            }
        }
        echo "</td>";
        if ((($FirstDOW + $i) % 7) == 0)
            echo "</tr>";
        // insert empty cells for days after the last day
        if ((($i + $FirstDOW) % 7) != 0) {
            for ($j = 0; (($i + $j + $FirstDOW) % 7) != 0; ++$j)
                echo "<td>&nbsp;</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    public function getEventDetails($EventID) // this is apart of 10-4
    {
        $EventID;
        $SQLstring3 = "USE chinese_zodiac";
        $QueryResult3 = $this->DBConnect->query($SQLstring3);

        $SQLstring4 = "SELECT EventID, EventDate, Title, Description FROM event_calendar WHERE EventID = $EventID";
        $QueryResult4 = $this->DBConnect->query($SQLstring4);


        if ($QueryResult4 !== FALSE) {
            while ($Row = mysqli_fetch_assoc($QueryResult4)) {
                echo "Event Date: {$Row['EventDate']}<br />";
                echo "Event Title: {$Row['Title']}<br />";
                echo "Event Description: {$Row['Description']}<br />\n";
            }
            mysqli_free_result($QueryResult4);
        }
    }
}
