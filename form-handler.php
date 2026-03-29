<?php
// Collect data from the form
$name = $_POST['name'];
$visitor_email = $_POST['email']; // Changed variable name to match $email_body
$subject = $_POST['subject'];    // Fixed: assigned the actual subject field
$message = $_POST['message'];    // Fixed: removed the '&' typo

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

// Fixed concatenation: removed extra quotes and dots causing syntax errors
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n". 
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'rou9955@gmail.com';

// Fixed: used the variable $email_from instead of the literal string "email_form"
$headers = "From: $email_from \r\n";

// Fixed: used the variable $visitor_email and fixed the typo "enail"
$headers .= "Reply-To: $visitor_email \r\n";

// Fixed: changed &headers to $headers
mail($to, $email_subject, $email_body, $headers);

// Redirect back to the contact page after sending
header("Location: contact.html");
?>