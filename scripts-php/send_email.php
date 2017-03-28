<?php
require 'assets/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'versmee_alexandre@hotmail.fr';                 // SMTP username
$mail->Password = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXX';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->CharSet = "UTF-8";

$mail->setFrom('versmee_alexandre@hotmail.fr', 'Mailer');
$mail->addAddress('versmee_alexandre@hotmail.fr', 'Joe User');     // Add a recipient
$mail->addAddress('versmee.alexandre@gmail.com');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

if (isset($_POST["nom"]) &&
	isset($_POST["tel"]) &&
	isset($_POST["email"]) &&
	isset($_POST["message"])
) {

	$message = "Monsieur ou Madame " . $_POST["nom"] . " aimerait être recontacter. <br/><br/>" .
		"Son numéro de téléphone est : " . $_POST["tel"] . ".<br/><br/>" .
		"Son adresse email est : " . $_POST["email"] . ".<br/><br/>" .
		"Elle a laissé le message suivant : <br/>" . $_POST["message"];

	//echo $message;

	$mail->Subject = '[Demande de contrat - SiteWeb] Monsieur/Madame ' . $_POST["nom"];
	$mail->Body = $message;
	$mail->AltBody = $message;

	/*echo 'POST<br>';
	print_r($_POST);
	echo '<br><br>';*/

	/* CAPTCHA */

	$secret = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
	$response = $_POST['g-recaptcha-response'];
	$remoteip = $_SERVER['REMOTE_ADDR'];

	//echo 'remote address : ' . $_SERVER['REMOTE_ADDR'];

	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
		. $secret
		. "&response=" . $response
		. "&remoteip=" . $remoteip;

	$decode = json_decode(file_get_contents($api_url), true);

	//print_r($decode);

	if (!$mail->send()) {
		echo '<div class="callout alert small" data-closable>
		<p>Une erreur est survenue, veulliez réessayer ultériement.</p>
		<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		</button>
	  </div>';
	}else {
		echo '<div class="callout success small callout-position" data-closable>
		<p>
			Votre message a été envoyé avec succes.
			Nous vous recontacterons dans les meilleurs délais durant
			<a href="nos_agences.php" title="Voir nos hroaires">nos horaires d\'ouvertures</a>.
		</p>
		<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		  </button>
	 </div>';
	}


	/* VERIFICATION DU CAPTCHA */

	if ($decode['success'] == true) {
		// Human
		if (!$mail->send()) {
			echo '<div class="callout alert small" data-closable>
		<p>Une erreur est survenue, veulliez réessayer ultériement.</p>
		<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		</button>
	  </div>';
		}else {
			echo '<div class="callout success small callout-position" data-closable>
		<p>
			Votre message a été envoyé avec succes.
			Nous vous recontacterons dans les meilleurs délais durant
			<a href="nos_agences.php" title="Voir nos hroaires">nos horaires d\'ouvertures</a>.
		</p>
		<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		  </button>
	 </div>';
		}
	}else {
		// Not human or bad token
	}
}

