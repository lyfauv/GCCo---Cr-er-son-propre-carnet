<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
		<link rel="icon" type="image/png" href="images/favicon.ico" />
        <title>ACO et images IRM</title>
		<link href="ter.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="stylesheet" href="dist/css/bootstrap.css" />
		<script async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-MML-AM_CHTML"></script>
        <script src="js/jquery-1.12.2.min.js"></script>
        <script src="dist/js/bootstrap.js"></script>
		
		<?php $title = 'entete'; ?>
    </head> 

	<body>
	<div class="banniere">
		<div class="container">
    
			<h1>TER</h1>

			<div class="row">
				<div class="col-lg-10 col-md-10 col-sm-10">
					<p>Découvrez notre travail d'étude sur les algorithmes de colonies de fourmis et la segmentation d'images</p>
				</div>
			</div>
		</div>
	</div>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
          </button>
        </div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?php if ($title == "Accueil") {echo 'class="active"';} ?>><a href="accueil.php" title="Accueil">Accueil</a></li>
				<li <?php if ($title == "theorie") {echo 'class="active"';} ?>><a href="theorie_aco.php" title="theorie"></a></li>
				<li class="dropdown">
					<a href="theorie_aco.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="Description">Description<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="theorie_aco.php#objectifs" title="Objectifs">Objectifs</a></li>
						<li><a href="theorie_aco.php#aco" title="L'ACO">Algorithme de colonie de fourmis</a></li>
						<li><a href="theorie_aco.php#images_irm" title="Images IRM">Images IRM</a></li>
						<li><a href="theorie_aco.php#segmentation" title="La segmentation d'images">La segmentation d'images</a></li>
						<li><a href="theorie_aco.php#imagerie" title="La segmentation pour l'imagerie médicale">La segmentation pour l'imagerie médicale</a></li>
						<li><a href="theorie_aco.php#cadre" title="Cadre de notre travail d'études">Cadre de notre travail d'études</a></li>
					</ul>
				</li>
				<li <?php if ($title == "programmation") {echo 'class="active"';} ?>><a href="programmation.php" title="programmation"></a></li>
					<li class="dropdown">
						<a href="programmation.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="Algorithmique">Algorithmique<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="programmation.php#matlab" title="MATLAB">MATLAB</a></li>
							<li><a href="programmation.php#orga_simp" title="Organigramme simplifié des programmes">Organigramme simplifié des programmes</a></li>
							<li><a href="programmation.php#organigramme" title="Organigramme des programmes">Organigramme des programmes</a></li>
						</ul>
					</li>
				<li <?php if ($title == "interface") {echo 'class="active"';} ?>><a href="interface.php" title="Interface graphique"></a></li>
					<li class="dropdown">
						<a href="interface.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="Interface graphique">Interface graphique<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="interface.php#auto" title="Interface automatisée">Interface automatisée</a></li>
							<li><a href="interface.php#manuel" title="Interface manuelle">Interface manuelle</a></li>
						</ul>
					</li>
				<li <?php if ($title == "resultats") {echo 'class="active"';} ?>><a href="resultats.php" title="Résultats">Résultats</a></li>
				<li <?php if ($title == "discussion") {echo 'class="active"';} ?>><a href="discussion.php" title="discussion"></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="Typo">Discussion<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="discussion.php#analyse" title="Analyse des résultats">Analyse des résultats</a></li>
							<li><a href="discussion.php#tests" title="Tests">Tests</a></li>
							<li><a href="discussion.php#difficultes" title="Difficultés rencontrées">Difficultés rencontrées</a></li>
							<li><a href="discussion.php#ouverture" title="Ouverture">Ouverture</a></li>
						</ul>
					</li>
				<li <?php if ($title == "conclusion") {echo 'class="active"';} ?>><a href="conclusion.php" title="conclusion">Conclusion</a></li>
				<li <?php if ($title == "references") {echo 'class="active"';} ?>><a href="references.php" title="easter_egg">Références</a></li>
				<li <?php if ($title == "telechargements") {echo 'class="active"';} ?>><a href="telechargements.php" title="Fichiers">Fichiers</a></li>
			</ul>
		</div>
	</nav>
	