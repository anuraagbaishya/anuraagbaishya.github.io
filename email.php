<?php
$recipient = "darkoperator@darkoperator.in";
$subject = "Website Contact";
// where to go after it gets sent ...
$redirect = "index.html";
$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$subject = $_POST['contactSubject'];
$message = $_POST['contactMessage'];
$message = "
Website Contact
---------------------------------------------------
Name:  $contactName
Email: $contactEmail
Subject: $contactSubjecta
---------------------------------------------------
Message Entered:
$contactMessage
---------------------------------------------------
";
$extraheaders = "From: $contactEmail\r\nReply-To: $contactEmail\r\n";
if (! mail($recipient, $subject, $message, $extraheaders))
  echo "Mail did not send for some reason.";

header("Location: ".$redirect);

?>