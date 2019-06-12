$('document').ready(function(){

	function createArticle (srcVignette, articleTitre, articleAccroche, articleDate, lienArticle, articleTxt){
		$('#main-content').append("<article class='box-article'><div class='vignette' style='background-image:url("+srcVignette+")'></div><div class='box-article-texte'><a href=" + lienArticle + "><h3 class='article-titre'>" + articleTitre + "</h3></a><h4 class='article-accroche'>" + articleAccroche + "</h4><p class='article-date'>Publié le " + articleDate + "</p></div></article>");

		$('#main-content-article').html("<h3 class='article-titre'>" + articleTitre + "</h3>");

		$('#main-content-article').append("<p class='article-date'>Publié le " + articleDate + "</p>");

		$('#main-content-article').append("<p>" + articleTxt + "</p>")
	};

	function createSecondaryArticle (srcVignette, articleTitre, articleTexte){
		$('#secondary-content').append("<article class='box-article-secondary'><img class='vignette-secondary' src='" + srcVignette + "'><h3 class='article-titre-secondary'>" + articleTitre + "</h3><p>" + articleTexte + "</p></article>");
	};


/* 
POUR CREER UN ARTICLE : 
	Faire appel à la fonction "createArticle" et ajouter en arguments : l'url de la vignette, le titre de l'article, la phrase d'accroche, la date de publication
	Exemple : createArticle('https://image.com/','Titre Principal','Phrase d'accroche.','19 Avril 2019');
	Attention : 
		Mise en forme : 
			- toujours mettre des ' autour de chaque argument
			- séparer les arguments par des virgules
			- ne pas oublier de fermer la fonction avec un point-virgule
		Arguments insérés : 
			- Vignette: 3 possibilités : 
				1) insérer l'url si l'image est en ligne (peu recommandé)
				2) ajouter l'image dans le dossier 'Images' et l'appeler de la manière suivante : 'Images/nom-de-l-image.png'
				3) si pas d'image, ajouter quand même un argument vide ('') pour que la fonction soit correctement executée 
			- Texte: s'il y a un apostrophe, mettre un backslah devant (\) devant (option+shift+slash)
*/

	createArticle(
		'http://accelerons-ton-business.com/wp-content/uploads/2019/05/Taux-douverture-Emails.jpeg',
		'Article Technique – L\'email BtoB',
		'Mise sur tes techniques de vente', 
		'19 Mai 2019', 
		'article-technique-l-email-b-to-b.html',
		'C’est la méthode que je préfère en BtoB !</br></br>Elle est très 20/80, quasiment totalement automatisable et idéale pour toucher des prospects difficiles à joindre par téléphone.</br></br>Pour t’en convaincre j’ai compilé plusieurs webinars, études et expériences personnelles</br></br>Les cibles sont souvent les suivantes : Direction Générale, Direction des Ressources Humaines, Direction Système Information, Direction environnement de travail, Direction Marketing, Direction Commerciales etc. En résumé les décisionnaires de différents services.</br></br>L’objectif : Obtenir un rendez-vous'
	);

	createArticle(
		'https://img.buzzfeed.com/buzzfeed-static/static/2018-07/25/19/asset/buzzfeed-prod-web-06/sub-buzz-29365-1532563057-5.jpg?downsize=800:*&output-format=auto&output-quality=auto',
		'L\'alignement moral', 
		'Mise sur toi', 
		'02 Mai 2019',
		'',
		'Texte de cet article'
	);

	createArticle(
		'https://img.buzzfeed.com/buzzfeed-static/static/2018-07/25/19/asset/buzzfeed-prod-web-02/sub-buzz-19864-1532563090-3.jpg?downsize=700%3A%2A&output-quality=auto&output-format=auto',
		'Confiance en soi = La Base',
		'Mise sur toi',
		'19 Avril 2019',
		'Texte de cet article'
	);

	createArticle(
		'https://img.buzzfeed.com/buzzfeed-static/static/2018-07/25/19/asset/buzzfeed-prod-web-06/sub-buzz-29659-1532563158-1.png?downsize=800:*&output-format=auto&output-quality=auto',
		'Vendeur voleur !', 
		'Mise sur toi', 
		'08 Avril 2019',
		'Texte de cet article'
	);

	createArticle(
		'https://img.buzzfeed.com/buzzfeed-static/static/2018-07/26/12/asset/buzzfeed-prod-web-03/sub-buzz-26769-1532622845-10.jpg?downsize=800:*&output-format=auto&output-quality=auto',
		'Mon parcours', 
		'Qui suis-je ?', 
		'07 Avril 2019',
		'Texte de cet article'
	);

	createArticle(
		'https://img.buzzfeed.com/buzzfeed-static/static/2018-07/26/13/asset/buzzfeed-prod-web-05/sub-buzz-10557-1532624542-1.jpg?downsize=800:*&output-format=auto&output-quality=auto',
		'Récit : De Salarié à Entrepreneur',
		'Qui suis-je ?',
		'16 Mars 2019',
		'Texte de cet article'
	);

	createSecondaryArticle(
		'https://img.buzzfeed.com/buzzfeed-static/static/2018-07/26/13/asset/buzzfeed-prod-web-05/sub-buzz-10557-1532624542-1.jpg?downsize=800:*&output-format=auto&output-quality=auto',
		'Présentation',
		'Je t’accompagne pour t’en apprendre plus sur cet élément essentiel au fonctionnement de ton business : La vente !</br></br>Ici, débutants et confirmés trouveront les fondations pour bien vendre mais aussi des techniques bien plus précises pour réussir à faire exploser leurs ventes.</br></br>Je te souhaite un bon apprentissage !'
	);

	createSecondaryArticle(
		'https://img.buzzfeed.com/buzzfeed-static/static/2018-07/26/12/asset/buzzfeed-prod-web-04/sub-buzz-6557-1532622871-9.jpg?downsize=800:*&output-format=auto&output-quality=auto',
		'Me parler directement',
		'anatomie.vendeur@gmail.com'
	);



});

