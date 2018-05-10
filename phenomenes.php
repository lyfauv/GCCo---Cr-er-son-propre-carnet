<?php
	$title = "Phénomènes";
	include "includes/entete.php";
?>

<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-lg-2" id="side_menu">
				<nav class="navbar navbar-side navbar-default navbar-fixed-side">
					<ul class="nav navbar-nav">
						<li><a href="#pli">Phénomène de pli</a></li>
						<li><a href="#decoupe">Phénomène de découpe</a></li>
						<li><a href="#collage">Phénomène de collage</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-9 col-lg-10" id = "texte_droite">
				<h1 class="accueil">Diagramme des phénomènes</h1>
				<p>L'objectif de ce diagramme est d'expliquer les différents phénomènes auxquels nous avons recours dans notre activité.
				Cela permet d'expliquer quel système on peut obtenir en passant par ces phénomènes, et quels facteurs l'influencent.
				On peut alors comprendre comment le rendre plus efficace.</p>
				
				<p>Dans le cas de la création de son propre carnet, nous faisons face à trois phénomènes importants : le pli, la découpe et le collage.</p>
				
				<p> L'ensemble des trois diagrammes peut être téléchargé <a href="telechargements/phenomenes.zip" download="diagramme_phenomenes">ici</a>.</p>
				
				<h2 id="pli">Phénomène de pli</h2>
				<p>La première étape de la création de carnet consiste à plier les feuilles A4 en 4. Cela permet de marquer des lignes visibles qui se placent au milieu d'une feuille sans effectuer de mesure explicite.</p>
				<div class="center">
					<a href="diagramme/large/pli.png" title="Diagramme du phénomène de pli" data-spzoom>
						<img src="diagramme/petit/pli.png" alt="thumb">
					</a><br/><br/>
					<a href="telechargements/phenomene_pli.zip" download="phenomene_pli">>> Télécharger le diagramme du phénomène de pli</a><br/><br/>
				</div>

				<h2 id="decoupe">Phénomène de découpe</h2>
				<p>Après avoir effectué le pli, nous passons alors à la découpe. Dans notre activité, l'objectif est de passer d'une feuille, à 4 feuilles de dimensions plus petites.</p>
				<div class="center">
					<a href="diagramme/large/decoupe.png" title="Diagramme du phénomène de pli" data-spzoom>
						<img src="diagramme/petit/decoupe.png" alt="thumb">
					</a><br/><br/>
					<a href="telechargements/phenomene_decoupe.zip" download="phenomene_decoupe">>> Télécharger le diagramme du phénomène de découpe</a><br/><br/>
				</div>
				
				<h2 id="collage">Phénomène de collage</h2>
				<p>Le collage est alors un point crucial de la réalisation du carnet (selon la méthode que nous avons choisie).
				Nous nous en servons à la fois pour fixer les feuilles entre elles sur un côté commun, mais aussi pour fixer l'ensemble de feuille à sa couverture.</p>
				<div class="center">
					<a href="diagramme/large/colle.png" title="Diagramme du phénomène de pli" data-spzoom>
						<img src="diagramme/petit/colle.png" alt="thumb">
					</a><br/><br/>
					<a href="telechargements/phenomene_colle.zip" download="phenomene_colle">>> Télécharger le diagramme du phénomène de collage</a>
				</div>
			</div>
		</div>
	</div>
</div>
	</br>

<?php include "includes/pied.php";?>