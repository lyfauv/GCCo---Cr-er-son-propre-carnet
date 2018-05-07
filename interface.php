<?php 
	include('entete.php');
	$title = 'interface';
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-lg-2" id="side_menu">
				<nav class="navbar navbar-default navbar-fixed-side">
					<ul class="nav navbar-nav">
						<li><a href="#auto">Interface automatisée</a></li>
						<li><a href="#manuel">Interface manuelle</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-9 col-lg-10" id = "texte_droite">
			
				</br><p class="texte">L'objectif ici est de proposer une segmentation pour une image selon un critère. Nous avons donc réalisé deux interfaces graphiques, l'une utilisant le critère, l'autre permettant de générer soit même des segmentations. (voir la partie concernant les <a href="theorie-aco.php#segmentation">segmentations</a>)</p>
				
				<div id = "auto">
					<h2>Interface automatisée (avec ACO)</h2>
					
					<p class="texte">Cette interface graphique a pour but de proposer une segmentation à une image. C'est-à-dire, qu'en principe, l'algorithme renvoie la segmentation qui maximise son critère. Le critère ici choisis est le MVar (voir <a href="programmation.php#mvar">cette partie</a>), et le programme va retenir la plus grande valeur qu'il aura trouvé sur son temps d'exécution. La plus grande valeur de ce critère devrait renvoyer l'image la "mieux" segmentée.</p>
					
					</br><div class="image"><img src="images/interface_auto.png" height="600px"/></div>
					
					</br><p class="citation">Interface graphique permettant de lancer l'ACO suivant certains paramètres</p>
					
					<ol id="interface">
						<li><b><p class="texte">Le choix de l'image</p></b></li>
						<p class="texte">L'utilisateur clique sur le bouton "choisissez une image", qui va ouvrir une fenêtre d'exploration des fichiers. L'utilisateur.ice pourra alors sélectionner l'image de son choix (en format jpg, ou png par exemple). Le chemin d'accès à l'image s'écrit alors juste en-dessous et permet au programme d'y accéder. La segmentation s'effectue sur une image en noir et blanc, mais l'importation est souple sur ce critère. L'utilisateur.rice, peut effectivement importer des images de couleurs, et la taille de l'image n'aura d'influence que sur le temps de traitement du programme.</p>
						
						<li><b><p class="texte">Un premier visuel</p></b></li>
						<p class="texte">Dès que l'utilisateur.rice a choisit son image, elle va s'afficher dans la zone graphique en haut à gauche. Ici on peut voir une image IRM d'une coupe horizontale d'un cerveau humain. Les teintes sont bleues et jaunes car elles correspondent à une échelle de couleur MATLAB, l'image est en réalité en noir et blanc.</p>
						
						<li><b><p class="texte">Le paramétrage</p></b></li>
						<p class="texte">L'article que nous avons étudié défini certains paramètres que nous avons tentés de réutiliser. La reproduction des résultats n'a pas abouti à la hauteur de nos espérances et même si tous les paramètres ont été implémentés, nous observons toujours un biais dans les résultats optimaux. Pour pallier se problème et pour tenter de trouver une solution, l'essentiel de notre période de recherche a constitué à faire varier les différents paramètres. L'utilisateur.rice doit à présent sélectionner les paramètres de l'exécution. Le nombre de seuils est le fondement de la segmentation. S’il n'y a qu'un seuil, l'image sera découpée en deux couleurs différentes, c'est ce qu'on appelle la binarisation (voir <a href="theorie_aco.php#segmentation">ici</a>). On peut ici choisir entre 1 et 10 seuils pour la segmentation. Le programme est ici paramétré pour une image segmentée en trois seuils, c'est à dire de 4 couleurs. Nous avons appliqué la propriété proposée dans l'article disant que le nombre de seuils influencera directement le nombre de fourmis.</p>
						
						<p class="texte">L'évaporation est ici un taux qui va affecter les <a href="programmation.php#trace">traces phéromonales</a> des fourmis. Les fourmis vont effectivement laisser des phéromones à chaque passage, et une part de ceux-ci va s'évaporer au court du temps. </p>
						
						<p class="texte">Le temps d'exécution est directement fonction des conditions d'arrêt de l'algorithme. Le temps d'exécution souhaité peut avoir ou non une influence sur la qualité des résultats. Changer ce paramètre va changer le tuple "Itérations", qui correspond au nombre minimum d'itération et au nombre maximum. Le nombre minimum compte les itérations sans changement du MVar maximum. Et le nombre maximum marque les conditions d'arrêts finales. La validation d'une seule de ces conditions suffit à quitter le programme en donnant une proposition de segmentation.</p>
						
						<p class="texte">L'utilisateur.rice a alors le choix de la trace. Chaque chemin de fourmi est ponctué par le dépôt d'une trace phéromonale sur ce même chemin. Cette trace est la plupart du temps liée à la qualité de la solution. Dans notre article, la trace est de \(\frac{1}{L^k(t)}\) ce qui signifie que chaque fourmi dépose l'inverse de la somme des seuils qu'elle propose. Si une fourmi propose une solution [15 35 195], la somme vaut \(0+15+35+195+255\) donc son dépôt phéromonal est de \(0.002\). Nous avons proposé une trace mêlant les paramètres de l'article et la littérature sur les ACO : \(\frac{MVar}{L^k(t)^2}\)</p>
						
						<li><b><p class="texte">Lancement du programme </p></b></li>
						<p class="texte">Une fois que les paramètres ont été choisis, le programme peut être lancé. Les données défilent alors dans la console, le nb1 et le nb2 sont l'évolution des critères d'arrêt. Ces critères d'arrêts sont visibles dans l'interface. Le nb2 marquera l'arrêt du programme s'il est égal au critère minimum de même pour le nb1 avec le critère maximum. A la fin de l'execution, le résultat se présentera dans la commande avec la forme suivante : \(win = [seuil_1, seuil_2, seuil_3, ..., seuil_n, MVar]\). La valeur proposée renvoie les n seuils, ainsi que le MVar en dernier. Si le win renvoie \([0,0]\) cela signifie que le programme n'a pas trouvé de valeurs où le MVar est calculable. C'est souvent le cas quand le \(\beta\) est trop élevé.</p>
						
						<li><b><p class="texte">Image segmentée</p></b></li>
						<p class="texte">Cette image s'affiche une fois que le programme a fini de s'exécuter. Elle affiche l'image segmentée ayant le plus fort critère MVar.</p>
						
						<li><b><p class="texte">L'histogramme de l'image d'origine et les marqueurs rouges</p></b></li>
						<p class="texte">Le graphique en bas à droite donne l'histogramme de l'image d'origine. L'histogramme d'une image donne la répartition des pixels par valeur. C'est à dire que pour chaque valeur entre 0 et 255 on peut lire sur ce graphique le nombre de pixel ayant cette valeur. On retrouve donc à gauche le nombre de pixels sombres, et à droite le nombre de pixels clairs (comme indiqué avec le nuancier de gris au pied du graphique). Les traits rouges marquent les segmentations proposées, on peut ainsi facilement visualiser les résultats trouvés par l'algorithme.</p>
					</ol>
				</div>	
				
				<div id = "manuel">
					<h2>Interface manuelle (sans ACO)</h2>
					<p class="texte">Tout comme l'interface graphique précédent, ce programme permet de segmenter une image. Cette version propose de choisir soit même les seuils de segmentation et de les saisir manuellement. Les résultats graphiques sont les mêmes, mais ne dépendent alors pas du MVar, mais uniquement du bon vouloir de l'utilisateur.rice. Cet outil permet de segmenter simplement une image selon ses propres critères.</p>
					
					</br><div class="image"><img src="images/interface_manu.png" height="600px"/></div>
					
					</br><p class="citation">Interface graphique permettant de lancer une segmentation manuelle (où on choisit les seuils de segmentation)</p>
					
					<ol id="interface">
						<li><b><p class="texte">Sélection de l'image.<p></b></li>
						<li><b><p class="texte">Représentation de l'image<p></b></li>
						
						<li><b><p class="texte">Sélection des seuils de segmentation manuelle<p></b></li>
						<p class="texte">Les seuils doivent être rentrés en ordre croissant, séparés par des espaces et compris entre deux crochets. Les seuils doivent être compris entre 1 et 254.</p>
						
						<li><b><p class="texte">Lancement de la segmentation<p></b></li>
						<p class="texte">La segmentation est très rapide, et nécessite peu de ressources.</p>
						
						<li><b><p class="texte">Image segmentée<p></b></li>
						<li><b><p class="texte">Histogramme et seuils de segmentation<p></b></li>
					</ol>

				</div>
			</div>
	</div>
</br>
<?php 
	include('pied.php');
?>