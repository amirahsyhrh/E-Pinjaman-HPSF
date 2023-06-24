<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sending Email</title>
</head>

<body>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
	$developmentMode =  true;
$mailer = new PHPMailer($developmentMode);

try {
	$mailer->SMTPDebug = 2;
	$mailer->isSMTP();
	
	if ($developmentMode)
	{
		$mailer->SMTPOptions = [
			'ss1' =>[
				'verify_peer' => false,
				'verify_peer_name'=> false,
				'allow_self_signed' => true
				
			]
		];
	}
	
	$mailer->Host = 'smtp.gmail.com';
	$mailer ->SMTPAuth = true;
	$mailer->Username = 'amirahsyahirah8800@gmail.com';
	$mailer-> Password = 'amirah000';
	$mailer-> SMTPSecure = 'tls';
	$mailer -> Port = 587;
	
	$mailer->setFrom("amirahsyahirah8800@gmail.com");
	$mailer->addAddress("amirahsyahirah8800@gmail.com");
	$mailer->isHTML(true);
	$mailer->Subject = "lalal";
	$mailer->Body= "hbshdffd";
	
	$mailer->send();
	$mailer->ClearAllRecipients();
	echo "Success";
	
		
}catch (Exception $e)
{
	echo "COULD NOT SEND EMAIL". $mailer->ErrorInfo;
}
	?>
</body>
</html>