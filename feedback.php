<?php
	$to = "polonskiv@i.ua";
	$subject = "New Message";
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: polonskiv@i.ua\r\nReply-To: polonskiv@i.ua\r\nContent-type: text/html charset=utf-8\r\n";
	$name = htmlspecialchars($_POST["name"]);
	$email = htmlspecialchars($_POST["email"]);
	$message = htmlspecialchars($_POST["message"]);
	if (!$name || !$email) {
		header ("Location:error.html");
		exit;
	}
	$message = "Hi, Vovka!<br/>
	You have got a new message.<br/>
	Name: <b>$name</b><br/>
	Email: <b>$email</b><br/>
	Comment:<b>$comment</b><br/> ";
	mail($to, $subject, $message, $headers);
	header ("Location:success.html");
	exit;
?>

