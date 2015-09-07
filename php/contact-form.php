<?php

$toemail = "busbymp@gmail.com";

$spam = $_POST["email"];

$name = sanitize($_POST["inputName"]);
$email = filter_var($_POST["inputEmail"], FILTER_SANITIZE_EMAIL);
$message = sanitize($_POST["inputMessage"]);

$return_arr = array();

$body  = "Contact from Cacophony website\n\n";
$body .= "Name: ".$name."\n";
$body .= "Email: ".$email."\n\n";
$body .= "Message: ".$message."\n\n";

if ($name != "") {
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		if ($spam == "") {
			if(mail($toemail, "Contact from Cacophony website", $body, 'From: busbymp@gmail.com','-f busbymp@gmail.com')) {
					$return_arr["id"] = "success";
					$return_arr["message"] = "success";
			} else {
				$return_arr["id"] = "fatal-error";
				$return_arr["message"] = "Error sending email";
			}
		} else {
			$return_arr["id"] = "fatal-error";
			$return_arr["message"] = "Error sending email";
		}
	} else {
		$return_arr["id"] = "inputEmail";
		$return_arr["message"] = "Please enter a valid email";
	} 
} else {
	$return_arr["id"] = "inputFirstName";
	$return_arr["message"] = "Please enter your first name";
}

	
echo json_encode($return_arr);


function sanitize($val) {
	return filter_var($val, FILTER_SANITIZE_STRING);
}

?>