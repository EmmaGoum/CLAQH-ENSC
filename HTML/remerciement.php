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
						<a href="bilan.php">Bilan</a>
						<a href="remerciement.php" class="active">Remerciements</a>
					</div>
				</div>

				<div class="contenu col-md-10 col-sm-10 col-xs-10">

						<h1>Nous tenons à remercier :</h1>
						
						<ul>
							<li>Nos tuteurs, <span class="remerciement">Véronique Lespinet-Najib</span> et <span class="remerciement">Jean-Marc André</span> pour leur accompagnement tout au long du projet </li>
							<li><span class="remerciement">Régine Maury-Brachet</span>, pour ses conseils</li>
							<li><span class="remerciement">Pierre Gilfriche</span>, pour son aide et son enthousiasme</li>
							<li>Tous les membres de CLAQH, pour leur implication dans notre projet transdisciplinaire</li>
							<li><span class="remerciement">Catherine Semal</span>, pour son intérêt pour le projet </li>
						</ul>
					
				</div>

			</div>

		</div>

		<?php include 'scriptBootstrap.php'; ?>

	</body>
</html>