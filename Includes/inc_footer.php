<?php
// footer
echo "<hr /><footer><p>© 2020</p></footer>";

include("Includes/inc_connect.php");

$proverbsFile = "proverbs.txt";
$proverbsArray = file($proverbsFile);
$ProverbCount = count($proverbsArray);

$db_table = "randomproverb";

// $SQLstring1 = "CREATE TABLE $db_table (proverb CHAR(200), display_count VARCHAR(100))";
// $QueryResult1 = mysqli_query($DBConnect, $SQLstring1);

$SQLstring3 = "SELECT COUNT(*) FROM $db_table";
$QueryResult3 = mysqli_query($DBConnect, $SQLstring3);

// if ($QueryResult3 < $ProverbCount) { // theres more proverbs in the array than the table, keep filling the table
//   for ($x = 0; $x < $ProverbCount; $x++) {
//     $SQLstring2 = "INSERT INTO $db_table VALUES(" . "'" . $proverbsArray[$x] . "', " . $i = 0 . ")";
//     $QueryResult2 = mysqli_query($DBConnect, $SQLstring2);
//   }
// }
$randGen = rand(1, mysqli_fetch_row($QueryResult3)[0]);

// $SQLstring4 = "SELECT * FROM $db_table";
$SQLstring4 = "SELECT proverb FROM $db_table WHERE proverb_number = $randGen";
// echo $SQLstring4;
$QueryResult4 = mysqli_query($DBConnect, $SQLstring4);

$ProverbArray1 = mysqli_fetch_assoc($QueryResult4);

echo "A randomly displayed Chinese proverb read from a text file. <br /><br />";
// $randGen = rand(0, $QueryResult3 - 1);
echo "<b>Random proverb: </b> " . $ProverbArray1['proverb'] . "<br />";

$SQLString5 = "UPDATE randomproverb SET display_count " . "= display_count + 1 WHERE proverb_number = $randGen";
$QueryResult5 = mysqli_query($DBConnect, $SQLString5);


mysqli_close($DBConnect);

echo "<br />";


///////////////////////////////////////////////////////////////////////////////////////////

$Dir = "DragonImages";
if (is_dir($Dir)) {
  $DragonFilesArray = scandir($Dir);
  $DragonFileCount = array_shift($DragonFilesArray);
  $DragonFileCount = array_shift($DragonFilesArray);
  $DragonFileCount = count($DragonFilesArray) + 1;

  $KeyArray = array();
  $ValueArray = array();

  for ($i = 1; $i < $DragonFileCount; $i++) {

    array_push($KeyArray, "Dragon" . $i);
    array_push($ValueArray, "Dragon" . $i);

    $AssociativeArray = array_combine($KeyArray, $ValueArray);
  }

  $RandomDragonKey = array_rand($AssociativeArray);

  $DragonFileSave = $Dir . "/" . $RandomDragonKey . ".png";
  echo "<img src='$DragonFileSave' alt='Dragon'>";
}
?>
<b>
  <p>Total visitors to this site:
</b> <?php echo $visitors; ?></p>