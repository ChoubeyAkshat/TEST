<?php
$to = $_POST["idmail"];
$subject = "Thanks for subscribing!";
$txt = "Your support is important to us. Thanks for subscribing to our email service. We will notify you whenever there is a new classic book up for sale. No other disturbances.\nHave a great day!";
$txt = wordwrap($txt, 190);
$headers = "From: example@example.com\r\n" .
           "CC: somebodyelse@example.com";

mail($to, $subject, $txt, $headers);
?>
