<br />
<nav>
    <b><a href="#alphabetizing_user_input">Alphabetizing User Input</a>
        <a href="#image_gallery">Image Gallery</a>
        <a href="#zodiac_feedback">Zodiac Feedback</a>
        <a href="#view_zodiac_feedback">View Zodiac Feedback</a></b>

</nav> <br /><br />

The processing of user input starts with a form. Web developers create froms using html markup
like "form", "input" where we can display a question to the user and the user will answer back
in the input box we created and hit submit. When the user hits submit, wether we selected to use a GET
or POST method to grab the user input, it will get sent to wherever we want it inside the php code block
where we can decide how we want to validate the users input to make sure its right for our system and give
them back feedback.

<br /><br /><br />
<section>
    <b><a id="alphabetizing_user_input">Alphabetizing User Input</a></b>
    <p>Alphabetizing User Input grabs the users submission of chinese zodiac signs and sorts them in a alphabetically ordered
        list. We grab the user input from our form and explode their answer into an array. We then sort that array alphabetically and
        list the results.</p>
    <a href="AlphabetizeSigns.php">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=AlphabetizeSigns.php">[View the Source Code]</a><br /><br /><br />


</section>

<section>
    <b><a id="image_gallery">Image Gallery</a></b>
    <p>Image gallery displays the zodiac images from an associative array which contains the zodiac file name as the key, and a caption
        as the value. We use a foreach loop to display each image on the webpage and when a user clicks an image a bigger image appears. </p>
    <a href="ZodiacGallery.php">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=ZodiacGallery.php">[View the Source Code]</a><br /><br /><br />


</section>

<section>
    <b><a id="zodiac_feedback">Zodiac Feedback</a></b>
    <p>Zodiac Feedback uses a form for the user to enter their messages and from there we will use the post method to implement those fields into our
        database table using myslq queries.</p>
    <a href="zodiac_feedback.html">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=process_zodiac_feedback.php">[View the Script]</a><br /><br /><br />


</section>

<section>
    <b><a id="view_zodiac_feedback">View Zodiac Feedback</a></b>
    <p>View Zodiac Feedback will use a use a mysqli_fetch_assoc() method to fetch the rows in the table using a mysqli query and from there
        implementing each field into a new attractive table.</p>
    <a href="view_zodiac_feedback.php">[Test the Script]</a>
    <a href="ShowSourceCode.php?source_file=view_zodiac_feedback.php">[View the Script]</a><br /><br />


</section>