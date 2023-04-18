<?php
	// Get the form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	
	// Create a string with the form data
	$data = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\n\n";
	
	// Open the file for appending
	$file = fopen('data.txt', 'a');
	
	// Write the data to the file
	fwrite($file, $data);
	
	// Close the file
	fclose($file);
	
	// Redirect the user to a thank you page
	header('Location: thank-you.html');
	exit();
?>
