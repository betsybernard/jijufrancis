<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$to = "betsy.gdis@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr><th>Firstname</th><th>Email</th><th>Message</th></tr>
<tr><td>$name</td><td>$email</td><td>$message</td></tr>
</table>
</body>
</html>";


$message ='<html xmlns="http://www.w3.org/1999/xhtml">'
        . '<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>'
        . '<body style="margin:0; padding:0;font-family: Arial,Helvetica Neue,Helvetica,sans-serif;">'
        . '<div style="width:100%;" align="center">'
        . '<table align="center" width="630" border="0" cellspacing="0" cellpadding="0">' 
        . '<tr><td><table align="center" width="628" cellspacing="0" cellpadding="0" border="0" style="border-right:1px solid #dedede; border-left: solid 1px #dedede;border-top: solid 1px #dedede;">'
        . '<tr><td style="text-align: center;border-bottom: 1px solid #ccc;background-color: #182135;"></td></tr>'
        . '<tr><td style="text-align:center;font-family: Arial,Helvetica Neue,Helvetica,sans-serif; font-size:30px; color:#00a651;  padding-top:25px;padding-bottom:15px; padding-left:40px; padding-right:40px;"><p style="font-size:22px; color:#282727;font-family: Arial,Helvetica Neue,Helvetica,sans-serif; margin:0; padding-top:15px; line-height:22px;text-align:center;"> Contact Form Details</p></td></tr>'
        . '<tr><td style="font-family: Arial,Helvetica Neue,Helvetica,sans-serif; font-size:30px; color:#00a651;  padding-top:25px;padding-bottom:15px; padding-left:40px; padding-right:40px;"><p style="font-size:15px; color:#282727;font-family: Arial,Helvetica Neue,Helvetica,sans-serif; margin:0; padding-top:15px; line-height:22px;"><span style="font-weight:bold;">Name</span>  : '.$name.'</p><p style="font-size:15px; color:#282727;font-family: Arial,Helvetica Neue,Helvetica,sans-serif; margin:0; padding-top:15px; line-height:22px;"><span style="font-weight:bold;">Email</span> : '.$email.' </p><p style="font-size:15px; color:#282727;font-family: Arial,Helvetica Neue,Helvetica,sans-serif; margin:0; padding-top:15px; line-height:22px;"><span style="font-weight:bold;">Message</span> : '.$message.' </p></td></tr>'
        . '</table></td></tr>'
        . '<tr style="background-color:#182135;"><td style="padding-top:10px; padding-bottom:7px;"><table style="text-align:center;" width="294" border="0" cellspacing="0" cellpadding="0" align="center" >'
        . '<tr><td style="white-space: nowrap; font-size:13px;color: #fff;">Copyright © 2017 | <a style="color:#ffffff; text-decoration: none; outline:none;" href="#" target="_blank"></a></td></tr>'
        . '</table></td></tr>'
        . '</table>'
        . '</div>'
        . '</body>'
        . '</html>';


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From:". $email . "\r\n";

mail($to,$subject,$message,$headers)
?>