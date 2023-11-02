<?php

$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$topic = $_POST["topic"];
$message = htmlspecialchars($_POST["message"]);


try {
    prepareEmailForUser($email);
    prepareEmailForAdmin($name, $phone, $email, $topic, $message);
    header("Location: thankyou.php");
} catch (Exception $e) {
    echo $e->getMessage();
}

function prepareEmailForAdmin($name, $phone, $email, $topic, $message)
{
    $body = "<h3>You got a new email submission</h3><br><br><p><b>Name: $name </b></p><p><b>Phone:  $phone </b></p><p><b>Email: $email </b></p><p><b>Topic: $topic </b></p><p><b>Message: $message</b></p>";
    $adminEmail = "alberto@bananamediainc.com" ;
    sendEmail($adminEmail, "New email from Answers Infinite website", $body);
}

function prepareEmailForUser($email)
{

    $body = wordwrap('<!doctype html><html><head><meta name="viewport" content="width=device-width,initial-scale=1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Simple Transactional Email</title><style>@media only screen and (max-width:620px){table.body h1{font-size:28px!important;margin-bottom:10px!important}table.body a,table.body ol,table.body p,table.body span,table.body td,table.body ul{font-size:16px!important}table.body .article,table.body .wrapper{padding:10px!important}table.body .content{padding:0!important}table.body .container{padding:0!important;width:100%!important}table.body .main{border-left-width:0!important;border-radius:0!important;border-right-width:0!important}table.body .btn table{width:100%!important}table.body .btn a{width:100%!important}table.body .img-responsive{height:auto!important;max-width:100%!important;width:auto!important}}@media all{.ExternalClass{width:100%}.ExternalClass,.ExternalClass div,.ExternalClass font,.ExternalClass p,.ExternalClass span,.ExternalClass td{line-height:100%}.apple-link a{color:inherit!important;font-family:inherit!important;font-size:inherit!important;font-weight:inherit!important;line-height:inherit!important;text-decoration:none!important}#MessageViewBody a{color:inherit;text-decoration:none;font-size:inherit;font-family:inherit;font-weight:inherit;line-height:inherit}.btn-primary table td:hover{background-color:#34495e!important}.btn-primary a:hover{background-color:#34495e!important;border-color:#34495e!important}}</style></head><body style="background-color:#f6f6f6;font-family:sans-serif;-webkit-font-smoothing:antialiased;font-size:14px;line-height:1.4;margin:0;padding:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%"><span class="preheader" style="color:transparent;display:none;height:0;max-height:0;max-width:0;opacity:0;overflow:hidden;mso-hide:all;visibility:hidden;width:0">This is preheader text. Some clients will show this text as a preview.</span><table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;background-color:#f6f6f6;width:100%" width="100%" bgcolor="#f6f6f6"><tr><td style="font-family:sans-serif;font-size:14px;vertical-align:top" valign="top">&nbsp;</td><td class="container" style="font-family:sans-serif;font-size:14px;vertical-align:top;display:block;max-width:580px;padding:10px;width:580px;margin:0 auto" width="580" valign="top"><div class="content" style="box-sizing:border-box;display:block;margin:0 auto;max-width:580px;padding:10px"><table role="presentation" class="main" style="border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;background:#fff;border-radius:3px;width:100%" width="100%"><tr><td class="wrapper" style="font-family:sans-serif;font-size:14px;vertical-align:top;box-sizing:border-box;padding:20px" valign="top"><table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;width:100%" width="100%"><tr><td style="font-family:sans-serif;font-size:14px;vertical-align:top" valign="top"><p style="font-family:sans-serif;font-size:14px;font-weight:400;margin:0;margin-bottom:15px">Hi there,</p><p style="font-family:sans-serif;font-size:14px;font-weight:400;margin:0;margin-bottom:15px">Thank you for submitting your inquiry on our website. We are currently reviewing your information and will respond promptly.</p><p style="font-family:sans-serif;font-size:14px;font-weight:400;margin:0;margin-bottom:15px">We appreciate your interest in Answers Infinite and look forward to assisting you.</p><p style="font-family:sans-serif;font-size:14px;font-weight:400;margin:0;margin-bottom:15px">Best regards,<br>Answers Infinite</p></td></tr></table></td></tr></table><div class="footer" style="clear:both;margin-top:10px;text-align:center;width:100%"><table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;mso-table-lspace:0;mso-table-rspace:0;width:100%" width="100%"><tr><td class="content-block" style="font-family:sans-serif;vertical-align:top;padding-bottom:10px;padding-top:10px;color:#999;font-size:12px;text-align:center" valign="top" align="center"><br>Dont like these emails?<a href="http://i.imgur.com/CScmqnj.gif" style="text-decoration:underline;color:#999;font-size:12px;text-align:center">Unsubscribe</a>.</td></tr><tr><td class="content-block powered-by" style="font-family:sans-serif;vertical-align:top;padding-bottom:10px;padding-top:10px;color:#999;font-size:12px;text-align:center" valign="top" align="center">Powered by<a href="https://bananamediainc.com/" style="color:#999;font-size:12px;text-align:center;text-decoration:none">Banana Media Inc</a>.</td></tr></table></div></div></td><td style="font-family:sans-serif;font-size:14px;vertical-align:top" valign="top">&nbsp;</td></tr></table></body></html>');
    sendEmail($email, "Thanks for taking the time to connect with us!", $body);
}

function sendEmail($to, $subject, $body)
 {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

        // $headers .= 'Cc: dennis@bananamediainc.com' . "\r\n";
        $headers .= 'From:Answers Infinite <info@answersinfinite.com>' . "\r\n" ;

         mail($to, $subject, $body, $headers);

        //  $success = mail($to, $subject, $body, $headers);
        //  if (!$success) {
        //    $errorMessage = error_get_last()['message'];
        //    echo $errorMessage;
        // }else{
        //   echo "Mail sent!";
        // }
 }
