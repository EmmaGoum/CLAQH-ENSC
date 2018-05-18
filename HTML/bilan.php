<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'head.php'; ?>
		<title> CLAQH - Projet transdisciplinaire</title>
		<link rel="stylesheet" href="../CSS/volet_style.css">
	</head>

	<body>
    <?php include_once 'navigation.php'; ?>

		<div class="voletContainer container">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-2">
					<div class="vertical-menu">
						<a href="projet.php">Le projet</a>
						<a href="equipe.php">Notre équipe</a>
						<a href="gestionProjet.php">Gestion de projet</a>
						<a href="bilan.php" class="active">Bilan</a>
						<a href="remerciement.php">Remerciements</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h2> Difficultés rencontrées </h2>

					<p>
						Notre principale difficulté a été la rédaction du contenu du site web et des affiches sans y inclure des résultats. 
						Nous devions aussi faire attention de ne pas effrayer les populations.
					</p>
					<p>
						Nous avons proposé aux clients de réaliser un logo en plus pour illustrer le projet, mais cette tâche nous a pris plus 
						de temps que prévu : nous n’avions pas pris en compte la longue phase de discussion qu’il pouvait y avoir autour de 
						nos propositions.
					</p>
					<p>
						Un grand nombre de personnes du projet étant concernées par la réalisation de notre site web, nous avons parfois
						été ralenti par des problèmes de communication.

					</p>


					<h2> Apports </h2>

					<div class="apport">
						<div>
							<img class="img-apport" src="../IMG/groupe.png"/>
							<p class="desc-Apport">
								Travail en groupe<br/>Organisation
							</p>
						</div>						
						<div>						
							<img class="img-apport" src="../IMG/action-site.png"/>
							<p class="desc-Apport">
								Maitrise de différents logiciels<br/>Compétences en développement web<br/>Design
							</p>
						</div>
						<div>
							<img class="img-apport" src="../IMG/communication.png"/>
							<p class="desc-Apport">
								Communication avec des clients
							</p>
						</div>
						<div>
							<img class="img-apport" src="../IMG/action-stat"/>
							<p class="desc-Apport">
								Statistiques
							</p>
						</div>
					</div>
					

					<h2> Plan Grenelle </h2>

					<p>
						Le projet CLAQH répond aux attentes du dispositif “Plan Vert”, mentionné dans l’article 55 de la loi Grenelle 
						(loi du 3 août 2009), qui stipule que “l'éducation au développement durable est portée par toutes les disciplines 
						et intégrée au fonctionnement quotidien des établissements scolaires. Elle contribue, à travers ses dimensions éthiques 
						et sociales, à la formation citoyenne.”
					</p>
					<p>
						Notre projet, de part son étude des écosystèmes lacustres aquitains, a une dimension environnementale, et de part son 
						étude des populations, il s’inscrit aussi dans le domaine de la santé.
						De plus, il participe à la sensibilisation de la population vis-à-vis de l’environnement de part les affiches de 
						sensibilisation réalisées.
					</p>					
				</div>

			</div>

		</div>

		<?php include 'scriptBootstrap.php'; ?>
	</body>
</html>