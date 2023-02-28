<?php

// Recipient
$to = 'nezerabsolute@gmail.com';

// Sender
$from = 'xtremeeben@example.com';
$fromName = 'CodexWorld';

// Email subject
$subject = 'PHP Email with Attachment by CodexWorld';

// Attachment file
$file = $fileatt;

// Email body content
$htmlContent = ' 
    <h3>PHP Email with Attachment by CodexWorld</h3> 
    <p>This email is sent from the PHP script with attachment.</p> 
';

// Header for sender info
$headers = "From: <".$from.">";

// Boundary
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// Headers for attachment
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

// Multipart boundary
$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";

// Preparing attachment
if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .
            "Content-Description: ".basename($file)."\n" .
            "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .
            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;

print_r($message);
print_r($returnpath);
print_r($data);
print_r($headers);


// Send email
$mail = @mail($to, $subject, $message, $headers, $returnpath);

// Email sending status
echo $mail?"<h1>Email Sent Successfully!</h1>":"<h1>Email sending failed.</h1>";

?>