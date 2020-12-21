<b>String and Character Functions</b></br></br>
<?php
include("inc_string_character_function_link.php");
?>
</br></br>
<section>
    <b><a id="string">String Functions</a></b>
    <p>This program uses the levenshtein and similar_text function to find out which sign names have the most similiar
        name by using the for loop iterating through each name in the array finding which two names are the most similiar
        by comparing each signs levenshtein and similar_text score to the previous one. </p>
    <a href="SimilarNames.php">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=SimilarNames.php">[View the Source Code]</a>

</section></br></br>

<section>
    <b><a id="char">Character Functions</a></b>
    <p>This program takes each character from the phrase array and sign names array and compares them
        to see which character has a larger ASCII value, if the sign name is has a larger ASCII value then the function
        returns true which means that you can make the sign words out of letters in the phrase which gets put in a good list, and
        if it cant be made, then it makes the bad list</p>
    <a href="EmbeddedWords.php">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=EmbeddedWords.php">[View the Source Code]</a>
</section></br>