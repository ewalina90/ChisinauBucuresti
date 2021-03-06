<?php
if($_POST["submit"]) {
    $recipient="evelina.cretu@gmail.com";
    $subject="Rezervarea biletului Chisinau-Bucuresti";
    $firstname=$_POST["firstname"];
    $email=$_POST["email"];
    $telefon=$_POST["telefon"];
    $data=$_POST["data"];
    $mailBody="Name: $firstname\nEmail: $email\nTelefon: $telefon\nData: $data\n\n";
    mail($recipient, $subject, $mailBody, "From: $firstname <$email>");
    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta name="description" content="Transport spre Bucuresti traseu pornește din Chișinău. Zilnic la 18:00. Pe traseu Barlad, Focsani, Buzau, Ploiesti si Aeroportul Otopeni. Automobil comfortabil, transportare sigură și rapidă. Acceptam solicitări la comandă. Transportăm colete, documente, pasageri, automobile la tral.">
	<meta name="keywords" content="transport, europa, pasageri, colete, Bucuresti, Chisinau, Moldova, rutiera, md, cetatenie, Romania, documente, 8, dimineata, +40755380914">
	<meta name="author" content="Rutiera Chisinau Bucuresti">
	<title>Transport Chisinau Bucuresti</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="google-site-verification" content="5acjxlSYhak9idHLfv2dbCJ7u2UPVuokSdoVlNqbsyE" />
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body>
	<section class="toppart">
	<div class="info" alt="traseul, ruta, drumul, orase">
			<h1>CHIȘINĂU<br>BUCUREȘTI</h1>
			<h2>Zilnic la 08:00 și 18:00</h2>
			<div class="container">
				<div class="phone_header prime"><a href="callto://+37376004389">+373 76004389</a></div>
				<div class="phonering_header prime"><a href="callto://+37376004389" style="padding-right: 0px !important;">+373 +40755380914</a></div>
				<h3>Transport la depunerea actelor<br>pentru cetățenie română</h3>
		</div>
	</section>

	<section class="description">
		<div class="description_container">
			<div class="pasageri">
					<div class="gif_container">
						<img class="gif" src="img/transport.png"/>
					</div>
				<h3 class="h3er">Transport la comandă în Europa</h3>
				<p class="pinfo">Organizăm transport zilnic la București la ora 08:00 și 18:00. La fel este posibila arendarea rutei spre alte destinatii in Romania.</p>
			</div>
			<div class="colete">
					<div class="gif_container">
						<img class="gif" src="img/colete.png"/>
					</div>
				<h3 class="h3er">Transportarea coletelor</h3>
				<p class="pinfo">Coletele vor fi livrate în orice oraș de pe traseu. Pentru siguranta livrarii cerem sa fie tinuta legatura cu soferul la telefon.</p>
			</div>
		</div>
	</section>
	<section class="form">
		<div class="form_container">
			<p>REZERVEAZA ACUM!</p>

			<form action="index.php">
				<div class="nume_email">
					<label for="fname">Nume:</label>
					<input type="text" name="firstname">
					<label for="email">Email:</label>
					<input type="text" name="email">
				</div>
				<div class="telefon_data">
					<label for="telefon">Telefon:</label>
					<input type="text" name="telefon">
					<label for="data">Data:</label>
					<input type="text" name="data">
				</div>
				<input type="submit" value="Expediaza">
			</form>
		</div>
	</section>
	<section class="footer">
		<div class="footer_container">
			<ul class="footer_info">
				<li class="pone white" style="width: 480px; margin-left:-54px;">
					<div>
						<a>+373 76004389 &nbsp; +373 69834643</a>
						<br>
						<a>+40 756991566 &nbsp; +40755380914 &nbsp; +40755597619</a>
					</div>
				</li>
				<li class="ponering white"><a href="">+373 76004389</a></li>
				<li class="email white"><a>chisinaubucuresti@gmail.com</a></li>
			</ul>
		</div>
	</section>
</body>
</html>