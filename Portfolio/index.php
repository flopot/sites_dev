<?php
	if (!empty($_POST['nom']) || !empty($_POST['prenom']) || !empty($_POST['mdp1']) || !empty($_POST['email'])) {
		$from = "postmaster@florian-potier-developpeur-web.com";
		$to = "florian.potier@hotmail.fr";
		$subject = "Lead entrant";
		$headers = "From:" . $from;
		$surname = $_POST['prenom'];
		$name = $_POST['nom'];
		$company = $_POST['societe'];
		$phone = $_POST['telephone'];
		$email = $_POST['email'];
		$comments = $_POST['commentaires'];
		$message = 'Prénom: ' . $surname . ' - Nom: ' . $name . ' - Société: ' . $company . ' - Téléphone: ' . $phone . ' - Email: ' . $email . ' - Message: ' . $comments . '.';

		mail($to,$subject,$message, $headers);
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Florian Potier">
		<meta property="og:title" content="Florian Potier - Développeur Web Freelance">
		<meta property="og:description" content="Création de sites web responsive (adapté à l'usage mobile) / Langages utilisés: HTML5, CSS3, JavaScript, JQuery, PHP, SQL">
		<meta property="og:image" content="http://florian-potier-developpeur-web.com/images/screen2.png">

		<meta name="viewport" content="width=device-width, user-scalable=no">

		<title>Florian Potier // Développeur Web</title>

		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="/images/logo.png" />
	</head>

	<body id="conteneur">

<!-- Page 1 : Titre -->

		<header class="boxtitre">
			<section class="titre">
				<h1><strong>Florian Potier</strong></h1>
				<div class="bordure70"></div>
				<div class="bordure60"></div>
				<h2>développeur web</h2>
			</section>
			
			<div class="boxfleche">
				<a href="#Fonctionnement"><img src="images/logofleche.png" height="60em"/></a>
			</div>
		</header>

<!-- Page 2 : Fonctionnement -->

		<main class="boxfonctionnement" id="Fonctionnement">
			<div class="boxfonctionnement-titre">
				<h3>Fonctionnement</h3>
			</div>

			<div class="box-etape1">
    			<div class="etape1-img">
    				1
    			</div>

    			<div class="etape1-txt">
       				<div class="etape1-titre" id="titre1">
       					<h4><i class="fas fa-comments"></i>&nbsp; Rendez-vous de définition du besoin</1></h4>
       				</div>

					<div class="etape1-texte" id="texte1">
						<p><em>70% des projets échouent à cause d'une mauvaise définition du besoin.</em></p>
						<p><i class="fas fa-chevron-right"></i> Définition des fonctionnalités principales</p>
						<p><i class="fas fa-chevron-right"></i> Conseil sur les technologies à utiliser</p>
						<p><i class="fas fa-chevron-right"></i> Première estimation de devis</p>
					</div>
				</div>
			</div>

			<div class="box-etape2">
    			<div class="etape2-img">
    				2
    			</div>

    			<div class="etape2-txt">
					<div class="etape2-titre" id="titre2">
       					<h4><i class="fas fa-cog"></i>&nbsp; Réalisation d'une maquette et établissement d'un devis</h4>
       				</div>

					<div class="etape2-texte" id="texte2">
						<p><i class="fas fa-chevron-right"></i> Pour chaque fonctionnalité, définition du cheminement utilisateur</p>
    					<p><i class="fas fa-chevron-right"></i> UX: Placement optimal des éléments sur la page</p>
    					<p><i class="fas fa-chevron-right"></i> Cahier des charges</p>
    					<p><i class="fas fa-chevron-right"></i> Architecture de la base de données</p>
    					<p><i class="fas fa-chevron-right"></i> Devis précis pour la partie réalisation</p>
					</div>
				</div>
			</div>

			<div class="box-etape3">
    			<div class="etape3-img">
    				3
    			</div>

    			<div class="etape3-txt">
       				<div class="etape3-titre" id="titre3">
       					<h4><i class="fas fa-upload"></i>&nbsp; Développement du site web</h4>
       				</div>

					<div class="etape3-texte" id="texte3">
						<p><i class="fas fa-chevron-right"></i> Intégration ou réalisation des éléments graphiques</p>
						<p><i class="fas fa-chevron-right"></i> Développement et déploiement du site</p>
						<p><i class="fas fa-chevron-right"></i> Point hebdomadaire d'avancement</p>
						<p><i class="fas fa-chevron-right"></i> Réalisation de la documentation technique et commentaire du code</p>
					</div>
				</div>
			</div>

			<div class="boxfleche2">
				<a href="#boxcontact"><img src="images/logofleche.png" height="60em"/></a>
			</div>

		</main>

<!-- Page 3 : Contacts --> 

			<div id="boxcontact">
				<div id="container-contact">

					<?php

						// Les champs n'ont pas été envoyés
						if (!isset($_POST['prenom']) OR (!isset($_POST['nom'])) OR (!isset($_POST['telephone'])) OR (!isset($_POST['email'])))
						{
							?>
								<div id="ensavoirplus">
									<h3>Me contacter</h3>
								</div>

								<form action="index.php#boxcontact" method="POST" id="formulaire" enctype="multipart/form-data">
									<table>
										<tr>
											<td>Prénom:</td>
											<td><input id="prenom" name="prenom" type="text" size="30" required></td>
										</tr>
										<tr>
											<td>Nom:</td>
											<td><input id="nom" name="nom" type="text" size="30" required></td>
										</tr>
										<tr>
											<td>Société:</td>
											<td><input id="societe" name="societe" type="text" size="30"></td>
										</tr>
										<tr>
											<td>Téléphone:</td>
											<td><input id="telephone" name="telephone" type="tel" size="30" required></td>
										</tr>
										<tr>
											<td>Email:</td>
											<td><input id="email" name="email" type="Email" size="30" required></td>
										</tr>
										<tr>
											<td>Commentaires:</td>
										</tr>
										<tr>
											<td colspan="2"><textarea id="commentaires" name="commentaires" rows="5" cols="30"></textarea></td>
										</tr>
										<tr>
											<td colspan="2"><input type="submit" value="Valider" id="send"></td>
										</tr>
									</table>
								</form>
							<?php
						}

						else
						{
							?>
								<div id="ensavoirplus">
									<h3>Formulaire envoyé !</h3>
								</div>
								<div id="merci">		
									<p>Bonjour <?php echo htmlspecialchars($_POST['prenom']); ?> !</p>
									<br>
									<p>J'ai bien reçu votre demande, je reviens vers vous au plus vite !</p>
									<br>
									<p>À bientôt,</p>
									<br>
									<p>Florian</p>
								</div>
							<?php
						}

						?>

				</div>
			</div>
	</body>
</html>