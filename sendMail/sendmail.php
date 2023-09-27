#!/usr/bin/env php
#

//
// $to = "VICTIM@example.com";
//

<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

ini_set("mail.log", "/tmp/mail.log");
ini_set("mail.add_x_header", TRUE);

echo "Starting\n";

$to = "other@johnvincent.io";
$subject = "Password Change";
$txt = "Change your password by visiting here - [VIRUS LINK HERE]l";
$headers = "From:support@johnvincent.io
";

echo "before mail\n";
$status = mail($to,$subject,$txt,$headers);
if($status)
{
    echo '<p>Your mail has been sent!</p>';
} else {
    echo '<p>Something went wrong. Please try again!</p>';
}

echo "after mail\n";

?>

