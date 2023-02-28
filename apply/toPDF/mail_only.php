<?php

require "check_last.php";

$to = 'nezerabsolute@gmail.com'; // replace with recipient's email address
$subject = 'A new applicant';
$message = $_POST['firstname']." ".$_POST['lastname']." Just applied! \n";
$message .= 'Attached is the background form for '.$_POST['firstname'];
$sender = "Recruitment";
$from = 'support@anagkazobibleministrytrainingcentre.org'; // replace with sender's email address
$file_path = "download/" . $latest_filename; // replace with the actual file path
// open the file and read its contents
$file = file_get_contents($file_path);

// encode the file contents with base64
$file_encoded = base64_encode($file);

// create the email headers
$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
$headers .= 'From: ' . $sender . " <".$from.">"."\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'Content-Type: multipart/mixed; boundary=boundary';

// create the email body
$body = '--boundary' . "\r\n" .
//    'Content-Type: text/plain; charset=UTF-8' . "\r\n" .
    'Content-Transfer-Encoding: 8bit' . "\r\n\r\n" .
    $message . "\r\n\r\n" .
    '--boundary' . "\r\n" .
    'Content-Type: application/csv; name=' . basename($file_path) . "\r\n" .
    'Content-Disposition: attachment; filename=' . basename($file_path) . "\r\n" .
    'Content-Transfer-Encoding: base64' . "\r\n\r\n" .
    $file_encoded . "\r\n\r\n" .
    '--boundary--';

// send the email
if (mail($to, $subject, $body, $headers)) {
    echo 1;
} else {
    echo 0;
}
