<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Contact Form'; 
    $to = 'chase.henriquez@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    
    if ($_POST['submit']) {
    if ($name != '' && $email != '') {				 
    if (mail ($to, $subject, $body, $from)) { 
	    echo '<p style="text-align:center;">Your message has been sent!</p>';
	} else { 
	    echo '<p style="color:#ff0000;text-align:center;">Something went wrong, go back and try again!</p>'; 
	    } 
    } else {
        echo '<p style="color:#ff0000;text-align:center;">You need to fill in all required fields!</p>';
    }
}
?>