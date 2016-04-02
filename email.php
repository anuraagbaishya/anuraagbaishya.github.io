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
$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed";

?>