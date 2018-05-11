<?php
	$title = "Tâches";
	include "includes/entete.php";
?>

<div class = "container">
    <h2>Diagramme des tâches</h2>
    <p>Le diagramme des tâches permet de décrire toutes les étapes nécessaires à la réalisation du carnet. Il vient préciser les tâches citées dans le diagramme des activités.</p>
    <p>On représente ici par un rond noir les tâches exécutées de façon sérielle, et les droites parallèles représentent les tâches effectuées en parallèle.</p>
	<p>La lecture de ce diagramme se fait de haut en bas et de gauche à droite.</p>
	<br/><br/><br/><br/><br/>
	<div class="center">
		<a href="diagramme/large/taches.png" title="Diagramme des taches" data-spzoom>
			<img src="diagramme/petit/taches.png" alt="thumb">
		</a><br/><br/>
		<a href="telechargements/taches.zip" download="taches">>> Télécharger le diagramme des tâches</a>
	</div>

	<br/><br/><br/><br/><br/>
	</div>
<?php include "includes/pied.php";?>