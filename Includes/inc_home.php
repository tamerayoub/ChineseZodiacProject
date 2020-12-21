<br />
<?php
if (isset($_GET['section'])) {
    switch ($_GET['section']) {
        case 'zodiac':
            include('Includes/inc_chinese_zodiac.php');
            break;
        case "sitefeedback":
            include('zodiac_feedback.php');
            break;
        case 'php': // a value of 'php' means to display default page
        default:
            include('Includes/inc_php_info.php');
            break;
    }
} else { // if no section has been selected, then display the default value 
    include('Includes/inc_php_info.php');
}
