<?php 

include realpath(__DIR__ . '/..')."/configs/config.php";

//print_r($_REQUEST)
//die();
if ($_POST){
	$secret = '6LeqZwwTAAAAAJCjog053W9V6gjTSXh9lz4RoMTz';
	$isValid = false;
	$gresponse = $_REQUEST['g-recaptcha-response'];
	$ch = curl_init();		
	$curlConfig = array(
    CURLOPT_URL            => "https://www.google.com/recaptcha/api/siteverify",
    CURLOPT_POST           => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS     => array(
        'secret' => $secret,
        'response' => $gresponse,
    )
	);
	curl_setopt_array($ch, $curlConfig);
	$result = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($result);
	if ($result->success){
		$isValid = true;		
	}
	else {
		$smarty->assign('err_recaptcha', "Anti-spam required.");
	}
	if ($isValid){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$userMsg =$_REQUEST['message'];
		
		$to      = 'info@yogabar.sg';
		$subject = 'Yogabar.sg - contact us page message from: '.$name;
		$message = "Contact Us Message:". "\r\n". "Name: ". $name. "\r\n" . "Email:".$email. "\r\n" . "Phone: ". $phone. "\r\n" . "Message:".$userMsg. "\r\n" ;

		$headers = 'From: ' . $_REQUEST['email'] . "\r\n" .
		    'Reply-To: '.$email. "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
		$smarty->assign('contact_post', "Thank you for contacting us.");	
	}
}

$smarty->assign('contact', "active");

$smarty->display('contact.tpl');