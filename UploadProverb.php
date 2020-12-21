<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Upload Proverb</title>

    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>

<body>

    <?php

    $proverbFile = "proverbs.txt";

    if (isset($_POST['submit'])) {
        if (empty($_POST['comment']))
            echo "Please fill in a chinese proverb. </br>";

        else {
            if (file_exists($proverbFile) and is_writable($proverbFile) and is_readable($proverbFile)) {

                $fp = fopen($proverbFile, "a+");
                if ($fp === FALSE) {
                    echo "There was an error creating \"" . htmlentities($proverbFile) . "\".<br />\n";
                } else {
                    if (flock($fp, LOCK_EX)) {
                        $UserProverb = stripslashes($_POST['comment']);
                        $UserProverb .= "\n";
                        if (fwrite($fp, $UserProverb) > 0)
                            echo "Successfully wrote to file \"" . htmlentities($proverbFile) . "\".<br />\n";
                        else
                            echo "There was an error writing to file \"" . htmlentities($proverbFile) . "\".<br />\n";
                        flock($fp, LOCK_UN);
                    } else {
                        echo "There was an error locking file \"" . htmlentities($proverbFile) . " for writing\"." . "<br />\n";
                    }
                    fclose($fp);
                }
            }
        }
    }
    ?>

    <h2>Please type in a chinese proverb!</h2>
    <form action="index.php?page=midterm_assessment" method="POST">
        <textarea rows="6" cols="100" name="comment"></textarea><br /></br />
        <input type="submit" name="submit" value="Add Chinese Proverb" /><br />
    </form>
    </br>

</body>

</html>