<?php 
	include('entete.php');
	$title = 'theorie';
?>
	
	<div class="container-fluid">
	  <div class="row">
		<div class="col-sm-3 col-lg-2" id="side_menu">
			<nav class="navbar navbar-default navbar-fixed-side">
				<ul class="nav navbar-nav">
					<li><a href="#objectifs">Objectifs</a></li>
					<li><a href="#aco">Algorithme de colonie de fourmis</a></li>
					<li><a href="#images_irm">Les images IRM</a></li>
					<li><a href="#segmentation">La segmentation d'images</a></li>
					<li><a href="#imagerie">La segmentation pour l'imagerie médicale</a></li>
					<li><a href="#cadre">Cadre de notre travail d'études</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-sm-9 col-lg-10" id = "texte_droite">
			<div id = "objectifs">
				<h2>Objectifs de notre TER</h2>
				
				</br><p class="texte">Ce TER a pour objectif de découvrir pédagogiquement les métaheuristiques et leurs applications à des cas réels. La méthode qui nous a été proposée de découvrir est la méthode dite des algorithmes de colonie de fourmis (ACO). C'est une méthode d'optimisation visant à laisser évoluer l'algorithme vers une solution optimale, ou acceptable. C'est un algorithme bio-inspiré qui se base sur les mouvements des fourmis durant la recherche de nourriture.</p>
				
				<p class="texte">Le principe des métaheuristiques est de proposer et d'optimiser des indicateurs permettant de répondre à un problème. L'objectif est ici de découvrir et d'appliquer l'algorithme de colonie de fourmis, pour optimiser un critère de segmentation d'image afin de rendre plus lisible une image IRM.</p>
				
				<p class="texte">Si une des notions vous est inconnue dans ce résumé, nous vous invitons à les découvrir sur cette page avant de parcourir la suite du site.</p>
			</div>
						
			<div id = "aco">
				<h2>Les algorithmes de colonies de fourmis (ACO)</h2>
				
				</br><p class="texte">Les algorithmes de colonie de fourmis sont des outils informatiques qui permettent de proposer des solutions à des problèmes complexes, ou des problèmes coûteux en temps d'exécution. Les premiers algorithmes de colonie de fourmis ont été développés durant les années 90 par l’équipe de Dorigo afin de résoudre certains problèmes d’optimisation.</p>
				
				<p class="texte">Ces algorithmes font partie de la famille des algorithmes évolutifs. Ils permettent de proposer des solutions à des problèmes trop denses pour être traités exhaustivement.</p>
				
				<p class="texte">Ce genre d'algorithme est inspiré d'observations biologiques du comportement des fourmis. On s'intéresse en particulier à leur faculté à trouver le chemin le plus court de leur nid à une source de nourriture, et à converger vers ce point d'intérêt.</p>
				
				<p class="texte">Lorsque les fourmis cherchent de la nourriture, elles vont tout d'abord explorer les environs de façon plus ou moins aléatoire jusqu'à trouver une source de nourriture acceptable (donc assez nutritive et de bonne qualité). Une fois que la nourriture a été jugée comme bonne, elle doit être ramenée au nid. Partout où elles passent, les fourmis vont déposer sur le chemin des phéromones qui vont permettre de guider les fourmis suivantes. Cette trace phéromonale permet d'orienter les fourmis vers la source de nourriture à partir du nid. Elle peut être fonction de la qualité de la nourriture, ou de sa quantité.</p>
				
				<p class="texte">De plus, les phéromones déposées sur le chemin de retour vont encore renforcer la trace phéromonale. Plus le chemin est court, plus les fourmis peuvent renforcer la trace phéromonale du chemin. En effet, comme les fourmis peuvent "sentir" les phéromones, elles auront une probabilité plus grande de choisir les chemins étant très concentrées en phéromones (donc le chemin où a priori le plus de fourmis sont déjà passées).</p>
				
				<p class="texte">Cependant, les phéromones ne restent pas éternellement là où elles ont été déposées : elles s'évaporent. Cette évaporation se produit au court du temps, et va réduire l'intensité de la trace phéromonale, rendant le chemin proposé de moins en moins intéressant. Si le chemin est long, le temps de trajet l'est aussi, le chemin long sera plus sujet à l'évaporation par opposition à un chemin plus court. Ce qui va favoriser le chemin court et efficace après un certain temps.</p>
				
				<p class="texte">Voici un exemple simple permettant d'illustrer ce phénomène :</p>
				
				<div class="row">
					<div class="col-md-6" id="schemas_fourmis_gauche">
						<ul class="list-group text-justify">
							<li class="list-group-item"><div class="image"><img src="images/chemin_fourmis1.png" height="100px"/></div></li>
							<li class="list-group-item"><p class="legende" id="gauche1">Voici un premier schéma présentant un exemple de chemins possibles du nid (nest) vers la nourriture (food). Ici, toutes les fourmis sont dans le nid (il n'y a donc pas de phéromones sur le chemin)</p></li>
						</ul>
					</div>
					
					<div class="col-md-6" id="schemas_fourmis_droite">
						<ul class="list-group text-justify">
							<li class="list-group-item"><div class="image"><img src="images/chemin_fourmis2.png" height="100px"/></div></li>
							<li class="list-group-item"><p class="legende">On se base ici sur le même schéma que précédemment, les fourmis vont commencer à explorer : pour le moment, chaque chemin a 50% de chances d'être sélectionné par la fourmi. Donc 50% des fourmis vont sélectionner le chemin le plus court (représentées avec des ronds) et les 50% restantes vont choisir le chemin le plus long (elles sont représentées par des carrés). Chaque fourmi va déposer des phéromones sur son chemin (les phéromones sont représentées en rouge).</p></li>
						</ul>
					</div>
				</div>
				
				<div class="row">
					<div class="col-md-6" id="schemas_fourmis_gauche">
						<ul class="list-group text-justify">
							<li class="list-group-item"><div class="image"><img src="images/chemin_fourmis3.png" height="100px"/></div></li>
							<li class="list-group-item"><p class="legende" id = "gauche">On peut voir ici que les fourmis ayant emprunté le chemin le plus court sont arrivées en premier à la nourriture, donc après être retournées dans le nid, la probabilité de reprendre ce même chemin va augmenter.</p></li>
						</ul>
					</div>
					
					<div class="col-md-6" id="schemas_fourmis_droite">
						<ul class="list-group text-justify">
							<li class="list-group-item"><div class="image"><img src="images/chemin_fourmis4.png" height="100px"/></div></li>
							<li class="list-group-item"><p class="legende">La trace phéromonale du chemin le plus court va être renforcée par les fourmis sur le chemin du retour (il y aura donc plus de phéromones sur ce chemin -phénomène représenté en traits gras-), ce qui augmente la probabilité de prendre ce chemin. De plus, les phéromones qui s'évaporent sur le chemin le plus long vont, à terme, mener toutes les fourmis à emprunter le chemin le plus court. </p></li>
						</ul>
					</div>
				</div>
				
				<p class="texte">L'intérêt d'une telle méthode est qu'elle permet d'optimiser un indicateur et de faire converger les solutions vers ce maximum, ou du moins une solution acceptable. L'évaporation et le caractère aléatoire de l'algorithme permet une bonne souplesse du programme, ce qui lui évite en principe de stagner dans des solutions locales. En effet, une trace ne fait qu'augmenter les probabilités d'un chemin, ce qui permet à la colonie de fourmi de continuer à explorer l'ensemble des solutions même si une solution acceptable a été trouvée.</p>
			</div>
						
			<div id = "images_irm">
				<h2>Les images IRM</h2>
				
				</br><p class="texte">Comme nous utilisons des images IRM dans nos travaux, voici un extrait de l'article de l'équipe d'Amir Nakib expliquant le principe de l'Imagerie par Résonance Magnétique (ou IRM) :</p>
				
				<i><p class="texte">"L’imagerie par résonance magnétique nucléaire (IRM ou RMN) est une technique d’imagerie médicale d’apparition récente, qui consiste à étudier les modifications d’aimantation des protons d’hydrogène d’une substance, sous l’action d’un champmagnétique. Elle repose sur les propriétés magnétiques des noyaux, que l’on étudie grâce à l’application d’un champ magnétique et d’une excitation par une onde de radiofréquence.</p>
				
				<p class="texte">Dès la fin de l’excitation, un retour à l’état d’équilibre se produit. La localisation spatiale des atomes est obtenue en ajoutant un gradient directionnel au champ magnétique de base. La relaxation des protons est alors modifiée par la variation du champ magnétique. Les techniques de traitement du signal utilisant des algorithmes de transformées de Fourier rapides permettent alors de localiser l’événement. En modifiant les paramètres d’acquisition IRM, notamment le temps de répétition entre deux excitations et le temps d’écho (temps entre le signal d’excitation et la réception de l’écho), l’utilisateur peut différencier les tissus de l’organisme : on sait en effet que des tissus différents ont des caractéristiques IRM différentes.</p>
				
				<p class="texte">L’IRM a l’avantage d’apporter une bonne visualisation de l’eau, donc de l’oedème et de l’inflammation, avec une bonne résolution et un bon contraste. Les tissus graisseux sont également bien explorés par cette technique. A contrario, cette imagerie est moins adaptée à l’étude des tissus pauvres en protons, comme les tissus osseux."</p></i>
				
				<div class="citation"><p>Extrait des Traités IC2 sur les fourmis artificielles - <a href="references.php" class="ref">Voir la référence</a></p></div>
				
				<p class="texte">Voici un exemple d'appareil et d'images utilisés en IRM : </p>
				
				<div class="image"><img src="images/image_irm.png" height="350px"/></div>
				
				</br><p class="citation">Image extraite de la thèse de Laurent Vezard (2013)</p>
				
				<p class="texte">Pour en savoir plus sur le fonctionnement de l'IRM, voir <a href="https://www.imaios.com/fr/e-Cours/e-MRI" class="ref">ici</a></p>
			</div>
						
			<div id = "segmentation">
				<h2>La segmentation d'images</h2>
				
				</br><p class="texte">Nous allons, tout au long de ce TER travailler sur des images en noir et blanc. Une image est constituée de pixels qui ont chacun une valeur comprise entre 0 (noir) et 255 (blanc) correspondant à un niveau de gris. Une image, du point de vue informatique, n'est qu'une matrice de deux dimensions remplie exclusivement de valeurs entre 0 et 255.</p>
				
				<p class="texte">La segmentation d'une image consiste à réduire le nombre de couleur parmi une palette donnée. Cette nouvelle palette contient un nombre limité de couleurs, que l'on va affecter à chaque pixel. La binarisation consiste par exemple à réduire la valeur des pixels d'une image à des <i>uns</i> ou des <i>zéros</i>, soit des pixels noirs ou blancs.</p>
				
				<p class="texte">Voici à gauche une image en niveaux de gris de Marilyn Monroe, et à droite la même image binarisée :</p>

				<div class="image"><img src="images/marylin_binaire_final.png" height="300px"/></div>
				
				<p class="citation">Image de base et binarisée de Marilyn Monroe</p>
				
				<p class="texte">Il peut aussi s'agir de segmenter une image en un certain nombre donné de couleurs. On définit des seuils de classe, et chaque pixel dans une classe donnée prendra une valeur propre à sa classe. Cette méthode permet de réduire le poids des images après une compression, et permet aussi d'augmenter visuellement le contraste entre différents éléments. </p>
				
				<p class="texte">Si on reprend la même image de Marilyn et qu'on la segmente selon trois seuils (75, 120 et 200) on obtient l'image suivante constituée de 4 classes, soit 4 niveaux de gris :</p>
				
				<div class="image"><img src="images/marilyn_segmentee.png" height="300px"/></div>
				
				</br><p class="citation">Image de base et segmentée selon les seuils [75, 120, 200] de Marilyn Monroe</p>
				
				<p class="texte">Cette méthode simplifie l'image de manière globale, ce qui peut simplifier sa lecture. Notons que bruit présent dans une image peut être corrigée avec une segmentation. On peut voir ici l'histogramme d'une image, c'est-à-dire que l'on recense en abscisse l'intensité des pixels (les niveaux de gris de 0 à 255), et en ordonnée le nombre de pixels avec cette intensité. On peut voir sur l'histogramme que l'image se découpe en quatre zones relativement uniformes, mais possédant du bruit. Une segmentation pertinente permet de nettoyer l'image et de la rendre plus claire, si la segmentation est bien faite.</p>
				
				<p class="texte">Voici un exemple : </p>
				
				<div class="image"><img src="images/carre_histo.png" height="300px"/></div>
				
				</br><p class="citation">Image bruitée (image altérée par des grains) de carrés avec quatre niveaux de gris différents et l'histogramme associé</p>
				
				<p class="texte">Et lorsqu'on segmente l'image (avec des seuils [75, 120, 200]) : </p>
				
				<div class="image"><img src="images/carre_segment_histo.png" height="350px"/></div>
				
				</br><p class="citation">Image avec en haut à gauche une image constituée de carrés avec quatre niveaux de gris différents, </p>
				<p class="citation">en bas à gauche son équivalent segmenté et en bas à droite l'histogramme associé à l'image avec en rouge les seuils de l'image segmentée.</p>
				<p class="citation">L'image apparaît en couleur (cela est dû au logiciel MATLAB) : <p>
				<p class="citation">chaque couleur correspond à un niveau de gris différent (l'avantage est de pouvoir mieux discerner les différents niveaux de gris)</p>
				
				<p class="texte">Certains indicateurs permettent de quantifier la qualité d'une segmentation, selon plusieurs cirtères. On peut se baser sur la variance des pixels de chaque classe, sur le nombre de régions présentes sur la nouvelle image etc. Nous allons explorer un de ces indicateurs durant notre TER, l'indicateur MVar (Variance intraclasse) qui est un dérivé du critère de Borsotti.</p>
			</div>
						
			<div id = "imagerie">
				<h2>La segmentation pour l'imagerie médicale</h2>
				
				</br><p class="texte">La segmentation d'image est une méthode assez fréquemment utilisée en imagerie médicale. Les images issues d'IRM (Imagerie par Résonnance Magnétique) possèdent en effet certains enjeux de taille. Leur lecture peut être crucial pour le diagnostic de certaines maladies neurodégénératives, comme la maladie de Parkinson ou d'Alzheimer.</p>
				
				<p class="texte">L'augmentation de la résolution spatiale d'une image (augmentation de la qualité de la mesure, et de la précision de l'image) semble à première vue un outil efficace pour améliorer la pertinence d'un diagnostic. L'augmentation de la résolution spatiale se caractérise par l'utilisation d'un aimant plus puissant, par conséquent plus coûteux. Or, cette résolution se traduit par une sensibilité accrue de la machine, elle sera donc plus sensible au bruit. L'image gagne en précision et paradoxalement va posséder une forme de bruit pouvant à son tour gêner la lecture de l'image, et ainsi le diagnostic.</p>
				
				<p class="texte">Heureusement, la correction de ce bruit peut se faire par segmentation. L'application de cette méthode permet alors de profiter de la bonne résolution spatiale de l'image, et de corriger le bruit qu'on peut observer sur la mesure. Chaque image possède un bruit qui lui est propre, ainsi une bonne segmentation pour une image n'est que peu réutilisable concernant une autre image.</p>
				
				<p class="texte">Si l'utilisation d'une segmentation semble pertinente dans ce cas, elle reste sensible à un certain nombre de paramètres, comme le nombre de classes et leurs compositions. L'unicité de chaque solution pose problème, car il n'existe pas de bonne méthode universelle pour la segmentation d'image IRM. La résolution de ce genre de problème peut être long, et peut mener à des erreurs d'interprétations.</p>
				
				<p class="texte">Voici un exemple de segmentation d'une image irm : </p>
						
				<div class="image"><img src="images/img_irm_segment.png" height="300px"/></div>
						
				</br><p class="citation">Image avec à gauche l'image IRM originale et à droite l'image IRM segmentée selon les seuils [75, 120, 200]</p>
			</div>
						
			<div id = "cadre">
				<h2>Cadre de notre travail d'études</h2>
				
				</br><p class="texte">Nous allons, lors de ce TER tenter de proposer des segmentations concernant des images issues d'IRM afin d'améliorer leur rendu global. Pour ce faire, nous allons utiliser un algorithme de colonie de fourmis avec pour critère le MVar proposé par A.Nakib dans l'article "Les fourmis pour la segmentation d'images médicales par résonance magnétique".</p>
				
				<p class="texte">Afin de mieux comprendre le fonctionnement global des programmes, nous allons expliquer ci-après la base théorique derrière le critère Mvar et le déplacement des fourmis.</p>
				
				<p class="texte">Le but va être pour une image donnée de trouver les niveaux de gris pour lesquels l’image sera la plus "nette" possible c’est-à-dire où les différents objets sur l’image seront le plus différentiables. </p>
				
				<p class="texte">Cela est particulièrement utile dans le cadre des images IRM : en effet, cela pourrait permettre de mieux visualiser les endroits du cerveau où il y a des lésions (soit des "trous") et donc de détecter plus rapidement d’éventuelles anomalies.</p>
				
				<h3>Maintenant, comment appliquer cette segmentation particulière au cas des algorithmes de colonie de fourmis ? </h3>
				
				<p class="texte">Les images en niveaux de gris, comme son nom l’indique, sont constituées de nuances de noir et de blanc allant de 0 pour le noir à 255 pour le blanc. Les niveaux de gris d’une image peuvent être visualisés sur l’histogramme associé à l’image. Les seuils qui vont être utilisés et trouvés par l’algorithme pour la segmentation seront donc situés entre 0 et 255.</p>
				
				<p class="texte">Les fourmis vont se déplacer sur ces niveaux de gris, comme on peut le voir sur le schéma suivant :</p>
				
				</br><div class="image"><img src="images/seuils_fourmis.png" height="300px"/></div>
				
				</br><p class="citation">Schéma illustrant le déplacement des fourmis sur les niveaux de gris. En 0, on a le point de départ des fourmis (qui ne sera ensuite pas pris en compte, car peut intéressant). Ensuite, les fourmis vont d'un niveau de gris à l'autre avec une certaine probabilité (entre autres déterminée par la quantité de phéromones). Une fois leur parcours terminé, les fourmis possèdent un tuple de plusieurs seuils qu'elle va proposer.</p>
				
				<h3>Fonctionnement de l'algorithme</h3>
				
				</br><p class="texte">Les fourmis vont donc se déplacer sur les niveaux de gris, ce qui va nous être utile afin de sélectionner les "meilleurs" seuils de segmentation.</p>
				
				<p class="texte">Au départ, \(m\) fourmis vont se déplacer de façon aléatoire sur les niveaux de gris. Ensuite, on laisse \(m\) autres fourmis se déplacer sur les niveaux de gris \(n\) fois selon une probabilité donnée, et dépose une quantité \(\Delta\tau_{i,j}(t)\) de phéromones à chaque déplacement. \(\tau_{i,j}\) représente la probabilité de sauter d'un seuil \(i\) à un seuil \(j\). On a donc la formule :</p>
				
				<p class="texte" id ="formule_pheromone">$$ \Delta\tau_{i,j}(t) = \left\{
						\begin{array}{ll}
						\frac{1}{L^k(t)} & \mbox{si } (i,j) \in T_k(t) \\
						0 & \mbox{si } (i,j) \notin T_k(t)
						\end{array}
						\right. $$</p>
				
				<p class="texte">où \(T_k(t)\) est la solution fournie par la fourmi \(k\) à l'itération \(t\), et \(L^k(t)\) est la somme des seuils de segmentation contenus dans la solution. Ce qui veut dire que sur son passage, la fourmi va déposer à chacun de ses sauts l'inverse de la somme des seuils qu'elle aura parcouru.</p>
				
				<p class="texte">A chaque tour de boucle, les phéromones s'évaporent (comme vu dans la partie sur les <a href="#aco">algorithmes de colonie de fourmis</a>) selon l'expression suivante : </p>
				
				<p class="texte">$$ \tau_{i,j} (t+1) = (1-\rho)\tau_{i,j}(t) + \sum_{k=1}^m \Delta\tau_{i,j}(t) $$ avec \(\Delta\tau_{i,j}(t)\) la quantité de phéromones déposée par la fourmi, \(m\) le nombre de fourmis utilisées à l’itération \(t\) et \(\rho\) le taux d'évaporation qui est fixé. Au départ, les phéromones sont initialisées par une petite quantité \(\tau_{0} \ge 0\).</p>
				
				<p class="texte">De plus, à chaque itération, les meilleurs seuils seront sélectionnés grâce au critère MVar.</p>
				
				<p class="texte">L'algorithme s'arrête lorsque le critère d'arrêt est dépassé (c'est-à-dire un nombre donné d'itérations pour lesquels le critère MVar ne permet pas de trouver de meilleurs seuils de segmentation : en d'autres termes, lorsqu'il n'est plus avantageux de laisser tourner l'algorithme).</p>
				
				<h3>Qu'est-ce-que le critère MVar ?</h3>
				
				<p class="texte">Pour construire le critère MVar, on se base sur le fait qu'un même objet possède une intensité qui est différente de celle d'un objet différent. Cela est caractérisé dans l'histogramme par des pics où un pic représenterait donc un objet. Chaque pic peut donc être considéré comme une classe de niveaux de gris.</p>
				
				<p class="texte">Dans l'idéal, il faudrait que les seuils de segmentation soient choisis au niveau des "creux" dans l'histogramme (ce qui permettrait de bien séparer les différents objets de l'image).</p>
				
				<p class="texte">Si on reprend l'histogramme précédent, les meilleurs seuils de segmentation seraient en rouge :</p>
				
				</br><div class="image"><img src="images/histo_exemple.png" height="300px"/></div>
				
				<p class="texte">Cependant, ce genre de segmentation ne peut se faire que dans le cas d'histogrammes où les pics et les creux sont bien différenciés. Dans le cas de pics qui se chevauchent, la segmentation serait plus compliquée à faire et donnerait de mauvais résultats. Cela est valable en particulier pour les images où les différents objets ont des intensités très proches ou dans le cas des images bruitées (ce qui est le cas le plus fréquent).</p>
				
				<p class="texte">D'où l'utilité du critère MVar, qui va permettre de trouver des seuils optimums pour la construction d'une image segmentée (la meilleure possible).</p>
				
				<p class="texte">On va donc chercher grâce au critère MVar à maximiser la variance intra-classe. Nous allons donc tenter d'avoir pour chaque classe une grande variabilité, or les classes vont rentrer en concurrence et ainsi s'équilibrer. -voir <a href="references.php">référence 4</a> pour plus d'informations-. 
				
				<p class="texte">Cela aura pour effet de bien distinguer les différents objets sur l'image et ainsi permettre de trouver les seuils pour l'image segmentée comme expliqué précedemment.</p>
				
				<p class="texte">Cette méthode est dérivée du critère de Borsotti (voir <a href="references.php">référence 8</a> pour plus d'informations) et inspirée de la méthode d'Otsu (voir <a href="references.php">référence 7</a> pour plus d'informations).</p>
			</div>
	    </div>
	</div>
	</br>
	
<?php 
	include('pied.php');
?>