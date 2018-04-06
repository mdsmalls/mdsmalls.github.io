<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$leave = $_POST['leave'];
$return = $_POST['return'];
$formcontent="From: $name \n Phone: $phone \n Desired Destination: $location \n Travel Dates: $leave - $return \n \n Message: $message";
$recipient = "matt.smallish@gmail.com";
$subject = "Website Contact";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
