<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'head.php'; ?>
		<title> CLAQH - Projet transdisciplinaire</title>
		<link rel="stylesheet" href="../CSS/volet_style.css">
		<script src="../js/volet.js"></script>
	</head>

	<body>
    <?php include_once 'navigation.php'; ?>

		<div class="voletContainer container">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-2">
					<div class="vertical-menu">
						<a href="projet.php" class="active">Le projet</a>
						<a href="equipe.php">Notre équipe</a>
						<a href="gestionProjet.php">Gestion de projet</a>
						<a href="bilan.php">Bilan</a>
						<a href="remerciement.php">Remerciements</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">

					<h1> Contexte </h1>

					<p class="texteVolet">
						Le projet transdisciplinaire CLAQH de l’ENSC s’inscrit dans le projet CLAQH (Contamination des Lacs AQuitains et impacts Humains) mené sur 4 lacs aquitains (Hourtin-Carcans, Cazaux-Sanguinet, Lacanaux, Biscarosse-Parentis). Courant 2011, des quantités de mercure retrouvées dans les poissons du lac d’Hourtin-Carcans sont supérieures aux normes et aux recommandations sanitaires alimentaires de l’Union Européenne. Une étude est alors demandée sur les lacs aquitains. Suite à cette étude et ses résultats, le projet CLAQH est initié. 
					</p>

					<p class="texteVolet">
						Il vise à étudier et comprendre les raisons de la présence de métaux traces, tels que le mercure au sein des écosystèmes lacustres du littoral aquitain.
					</p>



					<h1> Demande </h1>
					<p class="texteVolet">
						Notre participation au projet CLAQH s’inscrit dans sa partie “Facteurs Humains”. Elle regroupe l’étude du degré de perception, de connaissance et de représentation des usagers des lacs d"Aquitaine (pêcheurs, touristes, locaux, etc.) à travers des enquêtes de terrains afin de pouvoir mettre en place une mission de sensibilisation.
					</p>

					<p class="texteVolet">
						Deux élèves ingénieurs de deuxième année de l’ENSC ont menés en mai-juin-juillet 2016 une enquête sur le terrain à l’aide d’un questionnaire et ont commencé les premières analyses des données.
					</p>

					<p class="texteVolet">
						Nos missions étaient donc :
						<ul>
							<li>
								continuer les traitements statistiques des données issues de l'enquête
							</li>
							<li>
								élaborer des messages de sensibilisation sur les risques de la contamination au mercure (affiche, plaquette, etc.)
							</li>
							<li>
								réaliser un site internet présentant l’enquête et son traitement ainsi que les messages de sensibilisation
							</li>
						</ul>
					</p>


					<h1> Acteurs </h1>
					<div class="acteur">
						<div>
							<img class="img-acteur" src="../IMG/VLN.png"/>
							<p class="nom-acteur">
								Véronique Lespinet-Najib
							</p>
							<p class="desc-acteur">
								Membre de l’équipe <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">CIH<span class="definition cache">Cognitique et Ingénierie Humaine</span></span> au sein du laboratoire <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">IMS<span class="definition cache"> Intégration du Matériau au Système</span></span> du CNRS, notre tutrice
							</p>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/JMA.jpg"/>
							<p class="nom-acteur">
								Jean-Marc André
							</p>
							<p class="desc-acteur">
								Responsable de l’équipe <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">CIH<span class="definition cache">Cognitique et Ingénierie Humaine</span></span> au sein du laboratoire <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">IMS<span class="definition cache"> Intégration du Matériau au Système</span></span> du CNRS, notre tuteur
							</p>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/RMB.jpg"/>
							<p class="nom-acteur">
								Régine Maury-Brachet
							</p>
							<p class="desc-acteur">
								Membre de l’équipe <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">EA<span class="definition cache">Ecotoxicologie Aquatique</span></span> de l’<span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">UMR EPOC<span class="definition cache">Unité Mixte de Recherche Environnements et Paléoenvironnements Océaniques et Continentaux</span></span>, chef du projet CLAQH
							</p>
						</div>
					</div>
				</div>

			</div>

		</div>

		<?php include 'scriptBootstrap.php'; ?>

	</body>
</html>