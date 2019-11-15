<?php
if(isset($_POST['message']))
	{
		$name = $_POST['name'];
		$message = $_POST['message'];
		$email = $_POST['email'];
		
		$file="messages.txt";
		$fp = fopen($file, "a") or die("Couldn't do that! :( Write an email instead");		
		fwrite($fp, "$name|\"$message\"|$email\n") or die("Couldn't submit! Write an email instead!");
		echo "Message Submitted!";
		fclose($fp);
	}
else
	{
		echo "Please do something";
	}
?>