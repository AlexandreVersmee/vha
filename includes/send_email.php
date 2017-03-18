<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'versmee_alexandre@hotmail.fr';                 // SMTP username
$mail->Password = 'XXXXXXXXXXXXXXXX';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('versmee_alexandre@hotmail.fr', 'Mailer');
$mail->addAddress('versmee_alexandre@hotmail.fr', 'Joe User');     // Add a recipient
$mail->addAddress('versmee.alexandre@gmail.com');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML



if (isset($_POST["nom"]) &&
	isset($_POST["tel"]) &&
	isset($_POST["email"]) &&
	isset($_POST["message"]) &&
	isset($_POST["typeAssurance"])) {
	$message = "Monsieur ou Madame ".$_POST["nom"].
		" aimerait être recontacter pour une assurance '".$_POST["typeAssurance"]."'.<br/>".
		"Son numéro de téléphone est : ".$_POST["tel"].".<br/>".
		"Son adresse email est : ".$_POST["email"].".<br/>".
		"Elle a formulé la demande suivante : <br/>".$_POST["message"];
	echo $message;

	$mail->Subject = '[Demande de contrat - SiteWeb] Monsieur/Madame '.$_POST["nom"];
	$mail->Body    = $message;
	$mail->AltBody = $message;

//!$mail->send()
	if(isset($_POST["nom"])) {
		echo '<div class="callout secondary small" data-closable="slide-out-right">
				<p>Une erreur est survenue, veulliez réessayer ultériement.</p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
				</div>';
	} else {
		echo '<div class="callout success small" data-closable="slide-out-right">
				<p>Message envoyé avec succes</p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
			  	</button>
				</div>';
	}

}

