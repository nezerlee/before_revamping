<?php 
$toEmail = "anagkazorecruitment@gmail.com";
$mailHeaders = "From: " . $_POST["username"] . "<". $_POST["useremail"].": " .$_POST["userPhone"] .">\r\n";
if(mail($toEmail, "No Subject", $_POST["content"], $mailHeaders)) {
    print "<p class='success'>Mail Sent.</p>";
} else {
    print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>