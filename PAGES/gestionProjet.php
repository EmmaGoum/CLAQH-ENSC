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
						<a href="gestionProjet.php" class="active">Gestion de projet</a>
						<a href="bilan.php">Bilan</a>
						<a href="remerciement.php">Remerciements</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">
					<h2> Planning suivi </h2>

					<p>
                        <table class="planning table table-bordered table-striped table-condensed">
                            <thead align="center">
                            	<tr>
                                    <td><b>Activité</b></td>
                                    <td><b>Durée</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Identité visuelle</b></td>
                                    <td><b>Fin octobre à mi-janvier</b></td>
                                </tr>
                                <tr>
                                    <td>Création du logo</td>
                                    <td>Fin octobre à mi-décembre</td>
                                </tr>
                                <tr>
                                    <td>Discussions, révisions</td>
                                    <td>Mi-décembre à mi-janvier</td>
                                </tr>

                                <tr>
                                    <td><b>Site web</b></td>
                                    <td><b>Mi-novembre à mi-mai</b></td>
                                </tr>
                                <tr>
                                    <td>Maquette</td>
                                    <td>Décembre</td>
                                </tr>
                                <tr>
                                    <td>Rédaction du contenu</td>
                                    <td>Mi-novembre à fin janvier</td>
                                </tr>
                                <tr>
                                    <td>Discussions sur le contenu</td>
                                    <td>Mi-décembre à mi-janvier</td>
                                </tr>
                                <tr>
                                    <td>Développement</td>
                                    <td>Début février à mi-mai</td>
                                </tr>

                                <tr>
                                    <td><b>Analyse statistique</b></td>
                                    <td><b>Janvier à mi-mai</b></td>
                                </tr>

                                <tr>
                                    <td><b>Campagne de sensibilisation</b></td>
                                    <td><b>Mai</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </p>


                    <h2> Répartitions des rôles </h2>

                    <div class="acteur">
						<div>
							<img class="img-acteur" src="../IMG/AB.jpg"/>
							<div class="actionsReal">
								<img class="action-AB" src="../IMG/action-stat.png"/>
								<img class="action-AB" src="../IMG/action-site.png"/>
							</div>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/AC.jpg"/>
							<div class="actionsReal">
								<img class="action-AC" src="../IMG/action-logo.png"/>
								<img class="action-AC" src="../IMG/action-site.png"/>
							</div>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/EG.jpg"/>
							<div class="actionsReal">
								<img class="action-EG" src="../IMG/action-site.png"/>
								<img class="action-EG" src="../IMG/action-stat.png"/>
								<img class="action-EG" src="../IMG/action-affiche.png"/>
							</div>
						</div>

						<div>
							<img class="img-acteur" src="../IMG/KM.jpg"/>
							<div class="actionsReal">
								<img class="action-KM" src="../IMG/action-logo.png"/>
                                <img class="action-KM" src="../IMG/action-site.png"/>
								<img class="action-KM" src="../IMG/action-com.png"/>
							</div>
						</div>
					</div>


                    <h2> Outils utilisés </h2>

                    <p>
                        Logo : Inkscape, Gimp
                    </p>

                    <p>
                        Réalisation du site web :
                        <ul>
                            <li>
                                Maquette : Axure
                            </li>
                            <li>
                                Langages : HTML, CSS, JavaScript
                            </li>
                            <li>
                                Logiciel de versions : GitHub, GitKraken
                            </li>
                        </ul>
                    </p>

                    <p>
                        Statistiques : Microsoft Excel, Google Sheet
                    </p>

                    <p>
                        Affiche : Canva
                    </p>

                    <p>
                        Communication : Google Mail, Messenger, Discord 
                    </p>

                    <p>
                        Gestion des documents : Google Drive
                    </p>

				</div>
			</div>
		</div>

		<?php include 'scriptBootstrap.php'; ?>

	</body>
</html>