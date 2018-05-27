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

					
				<p class="modes">
					<input type="button" class="Lien1 btn btn-default" href=# onclick="ChangeMode()" value="Mode soutenance">
					<input type="button" class="Lien2 btn btn-default" href=# onclick="ChangeMode()" value="Détails">
				<p>
					
					<div class ="modeDetaille">
						<h2> Contexte </h2>
						<p>
							Le projet transdisciplinaire CLAQH de l’ENSC s’inscrit dans le projet CLAQH (Contamination des Lacs AQuitains et impacts Humains) mené sur 4 lacs aquitains (Hourtin-Carcans, Cazaux-Sanguinet, Lacanaux, Biscarosse-Parentis). Courant 2011, des quantités de mercure retrouvées dans les poissons du lac d’Hourtin-Carcans sont supérieures aux normes et aux recommandations sanitaires alimentaires de l’Union Européenne. Une étude est alors demandée sur les lacs aquitains. Suite à cette étude et ses résultats, le projet CLAQH est initié. 
						</p>

						<p>
							Il vise à étudier et comprendre les raisons de la présence de métaux traces, tels que le mercure au sein des écosystèmes lacustres du littoral aquitain.
						</p>


						<h2> Demande </h2>
						<p>
							Notre participation au projet CLAQH s’inscrit dans sa partie “Facteurs Humains”. Elle regroupe l’étude du degré de perception, de connaissance et de représentation des usagers des lacs d"Aquitaine (pêcheurs, touristes, locaux, etc.) à travers des enquêtes de terrains afin de pouvoir mettre en place une mission de sensibilisation.
						</p>

						<p>
							Deux élèves ingénieurs de deuxième année de l’ENSC ont menés en mai-juin-juillet 2016 une enquête sur le terrain à l’aide d’un questionnaire et ont commencé les premières analyses des données.
						</p>

						<p>
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
					</div>

					<div class="modeSoutenance">
						
						<h2> Contexte </h2>
						<div class="contexte">
							<img class="img-contexte" src="../IMG/logoTransparent.png"/>
							<div>
								<p>
									Contamination des Lacs AQuitains et impacts Humains
								</p>
								<p>	
									Hourtin-Carcans, Cazaux-Sanguinet, Lacanaux, Biscarosse-Parentis
								</p>
							</div>
						</div>

						<h2> Demande </h2>
						<ul>
							<li> 
								Contribuer à la partie Facteurs Humains de CLAQH 
							</li>
							<li> 
								Reprendre le travail d'enquête de terrain mené par deux élèves ingénieurs en mai-juin-juillet 2016 
							</li>
							<li> 
								Missions : 
							</li>
							<div class="action">
								<div> 
									<img class="img-action" src="../IMG/action-stat.png"/>
									<p class="desc-action">
										Analyses statistiques
									</p>
								</div>
								<div> 
									<img class="img-action" src="../IMG/action-site.png"/>
									<p class="desc-action">
										Développement d'un site web
									</p>
								</div>
								<div> 
									<img class="img-action" src="../IMG/action-affiche.png"/>
									<p class="desc-action">
										Création d'une affiche informative
									</p>
								</div>
							</div>

						</ul>

					</div>


					<h2> Acteurs </h2>
					<div class="acteur">
						<div>
							<img class="img-acteur" src="../IMG/VLN.png"/>
							<p class="nom-acteur">
								Véronique Lespinet-Najib
							</p>
							<p class="desc-acteur">
								Membre de l’équipe <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">CIH<span class="definition cache">Cognitique et Ingénierie Humaine</span></span> au sein du laboratoire <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">IMS<span class="definition cache"> Intégration du Matériau au Système</span></span> du <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">CNRS<span class="definition cache"> Centre National de la Recherche Scientifique</span></span>, notre tutrice
							</p>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/JMA.jpg"/>
							<p class="nom-acteur">
								Jean-Marc André
							</p>
							<p class="desc-acteur">
								Responsable de l’équipe <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">CIH<span class="definition cache">Cognitique et Ingénierie Humaine</span></span> au sein du laboratoire <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">IMS<span class="definition cache"> Intégration du Matériau au Système</span></span> du <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">CNRS<span class="definition cache"> Centre National de la Recherche Scientifique</span></span>, notre tuteur
							</p>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/RMB.jpg"/>
							<p class="nom-acteur">
								Régine Maury-Brachet
							</p>
							<p class="desc-acteur">
								Membre de l’équipe <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">EA<span class="definition cache">Ecotoxicologie Aquatique</span></span> de l’<span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">UMR EPOC<span class="definition cache">Unité Mixte de Recherche Environnements et Paléoenvironnements Océaniques et Continentaux</span></span>, chef du projet <span class="aDefinir" onmouseover="definitionVisible(this);" onmouseleave="definitionCache(this)">CLAQH<span class="definition cache">Contamination des Lacs AQuitains et impacts Humains</span></span>
							</p>
						</div>
					</div>
				</div>

			</div>

		</div>

		<?php include 'scriptBootstrap.php'; ?>

		
        <script src="../js/projet.js"></script>

	</body>
</html>