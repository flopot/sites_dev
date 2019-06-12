<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>Imattec - News</title>
</head>
<body>

<!-- PAGE ACCUEIL -->

<!-- PAGE NEWS -->

	<div class="container">
	  <div class="row">
	    <div class="col-sm-6 text-center" id="news-box">
	      <h3>Newsletters</h3>


	      <section class="main-news">
	      			<?php
						try
						{
							// On se connecte à MySQL
							$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
						}
						catch(Exception $e)
						{
							// En cas d'erreur, on affiche un message et on arrête tout
						        die('Erreur : '.$e->getMessage());
						}

						// Si tout va bien, on peut continuer

						// On récupère tout le contenu de la table jeux_video
						$reponse = $bdd->query('SELECT * FROM Imattec');

						// On affiche chaque entrée une à une
						while ($donnees = $reponse->fetch())
						{
						?>
							<div class="row" id="news-box">
					      		<div class="col-sm-4" id="image-main-news" style="background-image: url('<?php echo $donnees['imageNews'];?>');background-position: center; background-size: cover;">
					      		</div>

					      		<div class="col-sm-8 text-left">
								    <a href="<?php echo $donnees['lienNews'];?>" target="_blank"><h4> Newsletter <?php echo $donnees['month'];?> <?php echo $donnees['year']; ?></h4></a>
								    <ul>
								    	<li><?php echo $donnees['item1'];?></li>
								    	<li><?php echo $donnees['item2'];?></li>
								    	<li><?php echo $donnees['item3'];?></li>
								    	<li><?php echo $donnees['item4'];?></li>
								    </ul>
								</div>
							</div>
						<?php
						}

						$reponse->closeCursor(); // Termine le traitement de la requête

					?>

	      </section>

	    </div>

	    <div class="col-sm-6 text-center" id="events-box">
	      <h3>Events</h3>

	      	<section class="event">
	      		<div class="row">
	      			<div class="col-sm-3" id="image-event">
	      			</div>
	      			<div class="col-sm-9 text-left">
		      			<a href=""><h4 id="titre-event"></h4></a>
		      			<p id="details-event">Détails Event</p>
	      			</div>
	      		</div>
	      	</section>
	    </div>
	</div>

<!-- FOOTER -->

	<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="scripts-news.js"></script>
</body>
</html>