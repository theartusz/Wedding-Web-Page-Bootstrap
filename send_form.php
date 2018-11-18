<?php
// check if form was submited
if (isset($_POST['submit'])) {
    $name = test_input($_POST['full_name']);
    $emailFrom = test_input($_POST['email']);
    $date = test_input($_POST['date']);
    $location = test_input($_POST['location']);

    $emailTo = "artureczek_5@live.com";
    $subject = "Form was submited at afvideo.cz by: ".$emailFrom;
    $txt = "
        name: $name \n
        email: $emailFrom \n
        date: $date \n
        location: $location";
    
    if (mail($emailTo, $subject, $txt)) {
        // return to the main page after form submited
        header("Location: http://www.afvideo.cz");
    }
}
// remove empty spaces and convert html characters
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
