<!DOCTYPE html>
<html>
	<head>
		<title>Portfolio</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
								echo '<li><a href="index.php#'.$ancre.'">'.$onglet.'</a></li>';
							}
						?>
						<a class="navbar-brand" href=".$onglet"><img src="img/icone.png" alt="website template image"></a>
						<li class="nav-item">
						<a href="https://www.youtube.com/embed/1-AltLENQGg?rel=0&amp;autoplay=1&amp;allowfullscreen" class="fa fa-youtube" ></a> 
						 
						
			</div>
		</ul>

		<div class="accueil" id="accueil">
			<strong>TOM DUFOUR</strong>
			<h1></h1>
			<h1>Accueil</h1>
			<p>Bonjour 👋🏻<br><br>Bienvenue sur mon portfolio <br></p>
			<button class="accueil-button"><a href="#a-propos">A propos</a></button>
		</div>
		<div class="propos" id="a-propos">
			<h1>À propos</h1>
			<p>Mon nom est Tom Dufour<br><br> J'ai 18 ans je suis passionné par l'informatique, montage de pc et le Réseaux, je suis un étudiant à Caensup Sainte-Ursule.<br><br>
			<button class="propos-button"><a href="#competence">Compétence</a></button>
		</div>

		<!-------------Competences------------->
		<div class="paper" id="competences">
			<h1>Compétences</h1>
			<div class="divbar">
				<div class="bar-dev"><h3>Développement :</h3>
					<p>HTML</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['html'].';"></div>';
					?>
					<p>CSS</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['css'].';"></div>';
					?>
					<p>PHP</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['php'].';"></div>';
					?>
					<p>Yaml</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['yaml'].';"></div>';
					?>
					<p>...</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['a'].';"></div>';
					?>
				</div>
				<div class="bar-ide"><h3>IDE / Autres :</h3>
					<p>VS Code</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['vscode'].';"></div>';
					?>
					<p>Git</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['git'].';"></div>';
					?>
					<p>...</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['b'].';"></div>';
					?>
					<p>...</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['c'].';"></div>';
					?>
					<p>...</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['d'].';"></div>';
					?>
				</div>
				<div class="bar-reseaux"><h3>Réseaux :</h3></div>
					<p>Conf. d'un Switch</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['conf-switch'].';"></div>';
					?>
					<p>Conf. d'un Router</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['conf-router'].';"></div>';
					?>
					<p>Conf. d'un SRv Windows</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['conf-srv-windows'].';"></div>';
					?>
					<p>Conf. d'un SRV Debian</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['conf-srv-linux'].';"></div>';
					?>
					<p>...</p>
					<?php 
						$data = yaml_parse_file("yaml/competences.yaml");
							echo '<div class="bar" style="--percent: '.$data['e'].';"></div>';
					?>
				</div>
			</div>
		</div>
		<!-------------------------------------->

		<div class="experience" id="experience">
			<h1>Expérience</h1>
			<p></p>
			<h1>Stage</h1>
			<p>Décembre 2019 : Stage de 3 semaines dans les domaines de l’informatique et de l’audiovisuel à Lisi Medical à HEROUVILLE ST CLAIR.</p>
			<p>Janvier 2021 : Stage de 3 semaines dans les domaines réseau et l’informatique chez Lisi Médical à HEROUVILLE ST CLAIR</p>
			<p>Décembre 2021 : Stage de 4 semaines dans les domaines réseau et l’informatique chez Partélios Habitat à SAINT-CONTEST.</p>
			<p>Avril 2022 : Stage de 4 semaines dans les domaines le réseau et l’informatique au Rectorat de Caen.</p>
			<button class="experience-button"><a href="#formation">Formation</a></button>
		</div>

		<div class="formation" id="formation">
			<h1>Formation</h1>
			<p></p>
			<h1>BAC PRO</h1>
			<p>Bac Professionnel SN</p>Etablissement jean jooris à Dives-sur-Mer<h4>Durée de la formation 3 années pour l'obtention du bac</h4>
			<p>Bac Professionnel SN option Risc (Réseaux Informatiques et Systèmes Communicants)</p>Etablissement lycée Charles Tellier à Condé-en-Normandie
			<p></p>
			<button class="formation-button"><a href="#contact">Contact</a></button>
		</div>
		<div class="contact" id="contact">
		<div class="contactez-nous">
		<h1>Contactez-nous</h1>
		<p>Un problème, une question ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
		<form action="php/formulaire.php" method="post">
		<div>
		<label for="nom">Votre nom</label>
		<input type="text" id="nom" name="nom" placeholder="Martin" required>
		</div>
		<div>
		<label for="email">Votre e-mail</label>
		<input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
		</div>
		<div>
		<label for="email">objet</label>
		<input type="text" id="objet" name="objet" placeholder="Chomage" required>
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
