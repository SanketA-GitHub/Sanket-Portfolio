<?php
function($msg)
{
$toEmail = "ambalkars@gmail.com";
$mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["message"], $mailHeaders)) {
	$msg="OK";
} else {
	$msg="error";
}
}
?>
