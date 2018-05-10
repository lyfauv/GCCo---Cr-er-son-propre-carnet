<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
		<link rel="icon" type="image/png" href="images/Icone carnet transparent.ico" />
        <title><?php echo 'Carnet DIY - '.$title; ?></title>
        <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
		<link href="dist/spzoom/jquery.spzoom.css" rel="stylesheet"/>
		<link href="css/ter.css" rel="stylesheet" type="text/css" media="all"/>
    </head> 

	<body>
		<div class="banniere">
			<div class="container">
				<h1><strong>GCCo</strong></h1>
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10">
						<p><strong>Gestion des Compétences et des Connaissances</strong></p>
						<p><i>Découvrez notre notre livre de connaissances sur la création de son propre carnet</i></p>
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
				<li <?php if ($title == "Accueil") {echo 'class="active"';} ?>><a href="index.php" title="Accueil">Accueil</a></li>
				<li <?php if ($title == "OIDC") {echo 'class="active"';} ?>><a href="OIDC.php" title="OIDC">OIDC</a></li>
				<li <?php if ($title == "concepts") {echo 'class="active"';} ?>><a href="concepts.php" title="concepts">Concepts</a></li>
				<li <?php if ($title == "phenomenes") {echo 'class="active"';} ?>><a href="phenomenes.php" title="phenomenes">Phénomènes</a></li>
				<li <?php if ($title == "activite") {echo 'class="active"';} ?>><a href="activite.php" title="activite">Activités</a></li>
				<li <?php if ($title == "taches") {echo 'class="active"';} ?>><a href="taches.php" title="taches">Tâches</a></li>
				<li <?php if ($title == "telechargements") {echo 'class="active"';} ?>><a href="telechargements.php" title="Fichiers">Mind Maps</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
	