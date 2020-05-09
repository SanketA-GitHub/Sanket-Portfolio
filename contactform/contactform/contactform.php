<?php
function($msg)
{
$toEmail = "ambalkars@gmail.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
	$msg="OK";
} else {
	$msg="error";
}
}
?>