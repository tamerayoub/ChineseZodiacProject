<?php
include("Includes/inc_home_links_bar.php");
?>


<h1>Zodiac Feedback</h1>
<h2>Zodiac Feedback Messenger</h2>
<h3>Please develop your message in the form below</h3>
<h1></h1>
<form action="process_zodiac_feedback.php" method="POST">
    Name: <input type="text" name="name" required /><br /><br />
    Your message goes here: <br /> <textarea name="message" rows="4" cols="50" required></textarea><br /><br />
    Public: Yes<input type="checkbox" name="Y" value="Yes">No<input type="checkbox" name="N" value="No"><br /><br />
    <input type="submit" name="submit" value="Submit" /><br />
</form>