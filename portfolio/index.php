<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<div id="bouton">
		<a href="#top"><img src="img/boutton.png" alt="TOP"></a>
	</div>

	<body>
		<ul class="navbar">
			<div class="navbar-lien">
				<?php 
							$data = yaml_parse_file("yaml/nav.yaml");
							foreach ($data as $ancre => $onglet) {
								echo '<li><a href="accueil.php#'.$ancre.'">'.$onglet.'</a></li>';
							}
						?>
						<a class="navbar-brand" href="accueil.php#accueil"><img src="img/icone.png" alt="website template image"></a>
						<li class="nav-item">
						<link rel="stylesheet" href="http://clipart-library.com/images/6cr6xX8Ei.png">   
						<a href="https://www.youtube.com/embed/1-AltLENQGg?rel=0&amp;autoplay=1&amp;allowfullscreen" class="fa fa-youtube" ></a> 
						 
						
			</div>
		</ul>

		<div class="accueil">
			<strong>TOM DUFOUR</strong>
			<h1></h1>
			<h1>Accueil</h1>
			<p>Bonjour 👋🏻<br><h1></h1>Bienvenue sur mon portfolio <br></p>
			<button class="accueil-button">A propos</button>
		</div>
		<div class="propos">
			<h1>À propos</h1>
			<p>Mon nom est Tom Dufour<br><h1></h1> J'ai 18 ans je suis passionné par l'informatique, montage de pc et le Réseaux, je suis un étudiant à Caensup Sainte-Ursule.<br>
			<button class="propos-button">Compétence</button>
		</div>

		<div class="competence">
			<h1>Compétence</h1>
			<p></p>
			<h3>Développement :</h3>
			<div class="nav-competences-p">
					<p><a>HTML</a>
					<h1><progress id="file" max="100" value="70"> 70% </progress></h1>
					<p><a>CSS</a>
					<h1><progress id="file" max="100" value="60"> 60% </progress></h1>
					<p><a>PHP</a>
					<h1><progress id="file" max="100" value="40"> 40% </progress></h1>	
					<p></p>
		    <h3>Réseaux :</h3> 
			<div class="nav-competences-p">
					<p><a>Switch</a>
					<h1><progress id="file" max="100" value="70"> 60% </progress></h1>
					<p><a>Router</a>
					<h1><progress id="file" max="100" value="60"> 60% </progress></h1>
					<p><a>Serveur</a>
					<h1><progress id="file" max="100" value="40"> 70% </progress></h1>
				</div>
				<p></p>
			<button class="competence-button">Expérience</button>
		</div>

		<div class="experience">
			<h1>Expérience</h1>
			<p></p>
			<h1>Stage</h1>
			<p>Décembre 2019 : Stage de 3 semaines dans les domaines de l’informatique et de l’audiovisuel à Lisi Medical à HEROUVILLE ST CLAIR.</p>
			<p>Janvier 2021 : Stage de 3 semaines dans les domaines réseau et l’informatique chez Lisi Médical à HEROUVILLE ST CLAIR</p>
			<p>Décembre 2021 : Stage de 4 semaines dans les domaines réseau et l’informatique chez Partélios Habitat à SAINT-CONTEST.</p>
			<p>Avril 2022 : Stage de 4 semaines dans les domaines le réseau et l’informatique au Rectorat de Caen.</p>
			<button class="experience-button">Formation</button>
		</div>

		<div class="formation">
			<h1>Formation</h1>
			<p></p>
			<h1>BAC PRO</h1>
			<p>Bac Professionnel SN</p>Etablissement jean jooris à Dives-sur-Mer<h4>Durée de la formation 3 années pour l'obtention du bac</h4>
			<p>Bac Professionnel SN option Risc (Réseaux Informatiques et Systèmes Communicants)</p>Etablissement lycée Charles Tellier à Condé-en-Normandie
			<p></p>
			<button class="formation-button">Contact</button>
		</div>
		<div class="contact">
		<div class="contactez-nous">
		<h1>Contactez-nous</h1>
		<form action="contact.php" method="post">
		<p>Un problème, une question ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
		<form action="/page-traitement-donnees" method="post">
		<div>
		<label for="nom">Votre nom</label>
		<input type="text" id="nom" name="nom" placeholder="Martin" required>
		</div>
		<div>
		<label for="email">Votre e-mail</label>
		<input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
		</div>
		<div>
		<label for="message">Votre message</label>
		<textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
		</div>
		<div>
		<button type="submit">Envoyer mon message</button>
		<body>
		</div>
		</form>
		</div>
				</form>
			</div>
		</div>
			</form>
		</span>
		</div>
	</body>
</html>
