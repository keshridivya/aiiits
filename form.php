<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

require_once('../../common_lib/vendor/autoload.php');

if(isset($_POST['email']) && ($_POST['contact'])){
		$response = [];

		$message = "You've a new response in your Enquiry Form";
		$message.="<ul>";
		foreach($_POST as $p_key => $p_value){
			
			$message.= "<li><h4><strong>{$p_key}</strong>: {$p_value}<h4></li>";
		}
        $message.="</ul>";
		$mail = new PHPMailer(true);

		$mail->Host       = "localhost";  // Specify main and backup SMTP servers

				$mail->SMTPAuth   = false; // Enable SMTP authentication

				

				$mail->SMTPAutoTLS = FALSE;

				$mail->Port       = 25;

		//Server settings
		$mail->isSMTP(true);
		$mail->SMTPDebug = 0;                           
								

		//Recipients
		$mail->isHTML(true);
		$mail->setFrom('hr@aiiits.com', 'Enquiry from website');
		$mail->addAddress('hr@aiiits.com');    
		
		//Content
		$mail->isHTML(true);                               
		$mail->Subject = 'Request for enquiry by ' . $_POST['name'];
		$mail->Body    = $message;

		if ($mail->send())
					{
						echo "Thank you, We'll get in touch with you soon. ";
					}
					else
					{
						echo'Something went wrong';
					}

	}

	if(isset($_POST['name']) && ($_POST['cname'])){
		$response = [];

		$message = "You've a new response in your Career Form";
		$message.="<ul>";
		foreach($_POST as $p_key => $p_value){
			
			$message.= "<li><h4><strong>{$p_key}</strong>: {$p_value}<h4></li>";
		}
        $message.="</ul>";
		$mail = new PHPMailer(true);

		$mail->Host       = "localhost";  // Specify main and backup SMTP servers

				$mail->SMTPAuth   = false; // Enable SMTP authentication

				

				$mail->SMTPAutoTLS = FALSE;

				$mail->Port       = 25;

		//Server settings
		$mail->isSMTP(true);
		$mail->SMTPDebug = 0;                           
								

		//Recipients
		$mail->isHTML(true);
		$mail->setFrom('hr@aiiits.com', 'Career request from website');
		$mail->addAddress('hr@aiiits.com');    
		
		//Content
		$mail->isHTML(true);                               
		$mail->Subject = 'Request for career by ' . $_POST['name'];
		$mail->Body    = $message;

		if ($mail->send())
					{
						echo "Thank you, We'll get in touch with you soon. ";
					}
					else
					{
						echo'Something went wrong';
					}
	}
?>