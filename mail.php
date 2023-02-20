<?php
//if "email" variable is filled out, send email


//Email information
$to = "alex.savi.kv@gmail.com";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$content = $_POST['message'];
$subject = "Enquiry From Apple Experts Calicut";
$message = "\nHi Admin,";
$message .= "\nPlease find the details below.";
$message .= "\n\n\nName:" . $name;
$message .= "\nEmail:" . $email;
$message .= "\nPhone:" . $phone;
$message .= "\nMessage Content:" . $content;
$header = "From: info@radspanwireless.com\r\n";
// $header = "Cc: \r\n";
// $header = "BCc:\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
//send email
$retval = mail($to, $subject, $message);
if ($retval == 1) {
    alert("successs");
    header("Location:index.html");
} else {
    alert("failed");
    echo "Something went wrong! Mail senting failed........";
}
//Email response
//echo json_encode($_POST);
?>