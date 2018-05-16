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
						<a href="equipe.php" class="active">Notre équipe</a>
						<a href="gestionProjet.php">Gestion de projet</a>
						<a href="bilan.php">Bilan</a>
						<a href="remerciement.php">Remerciements</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h1> Qui sommes-nous ? </h1>

					<div class="acteur">
						<div>
							<img class="img-acteur" src="../IMG/"/>
							<p class="nom-acteur">
								Antoine Bouquet
							</p>
							<p class="desc-acteur">
								Classe préparatoire MP - Le Mans
							</p>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/"/>
							<p class="nom-acteur">
								Alice Cantagrel
							</p>
							<p class="desc-acteur">
								Prépa des INP - Toulouse
							</p>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/EG.jpg"/>
							<p class="nom-acteur">
								Emma Goumillout
							</p>
							<p class="desc-acteur">
								Classe préparatoire BL - Orléans
							</p>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/KM.jpg"/>
							<p class="nom-acteur">
								Katell Maro
							</p>
							<p class="desc-acteur">
								Licence Mathématiques et Informatique - Bretagne &amp; Bordeaux
							</p>
						</div>
					</div>


					<h1> Actions réalisées </h1>
					<div class="action">
						<div> <img class="img-action" src="../IMG/action-logo.png"/></div>
						<div> <img class="img-action" src="../IMG/action-stat.png"/></div>
						<div> <img class="img-action" src="../IMG/action-site.png"/></div>
						<div> <img class="img-action" src="../IMG/action-affiche.png"/></div>
					</div>

				</div>

			</div>

		</div>

		<?php include 'scriptBootstrap.php'; ?>
	</body>
</html>