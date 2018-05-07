<?php 
	include('entete.php');
	$title = 'resultats';
?>

	<div class="autre">					
		<h3>Les résultats changent-ils en fonction de la trace phéromonale ?</h3>
	
		<h4>Comparaison de différentes traces pour une même image</h4>
		<p class="texte">Nous avons testé le programme sur une même image, toute chose égale par ailleurs, en changeant uniquement les traces que laissent les fourmis. Si vous avez besoin d’un bref rappel sur les traces phéromonales veuillez suivre <a href="theorie_aco.php#formule_pheromone">ce lien</a> avant de lire la suite. L’image représente une IRM avec une tumeur de taille conséquente, une bonne segmentation permettrait de la mettre en évidence. Si l’image est bien segmentée, la tumeur ne devrait être présente que dans une unique couleur qui la distingue du reste de l'image. Si c’est le cas, nous pouvons utiliser des algorithmes d’analyse d’image pour estimer avec précision la taille de cette tumeur.</p>
	
		<h4 id="trace_lkt">Trace \(\frac{1}{L^k(t)}\)</h4>
		<p class="texte">L’article utilise \(\frac{1}{L^k(t)}\) comme trace, c'est-à-dire que chaque fourmi va déposer des phéromones ayant pour valeur l’inverse de la somme des seuils qu’elle propose. On obtient les résultats suivant :</p>
		
		</br><div class="image"><img src="images/trace_Lkt.png" height="500px"/></div>
		
		</br><p class="citation">Résultats obtenus après tests sur une image IRM avec la trace \(\frac{1}{L^k(t)}\)</p>
		
		<p class="texte">On peut observer que l’image est sur-segmentée, et que les seuils sont très petits. Ce résultat se base sur les paramètres présents dans l’article d’origine. L’image en soi, ne semble pas exploitable, et est en soi presque illisible. Ceci étant, elle permet de discriminer efficacement la tête du patient avec les éléments vides. Notons qu’il est très probable que l’erreur provienne de notre code, mais nous allons tenter de contourner le problème.</p>
		
		<h4>Trace \(MVar\)</h4>
		<p class="texte">Nous allons maintenant lancer l’ACO sur la même image, avec les mêmes paramètres. Le seul paramètre que nous allons modifier est la trace. Nous allons, et comme c’est le cas dans de nombreux ACO, apposer le critère d’évaluation à la trace. Ainsi, chaque fourmi va marquer son chemin avec des phéromones proportionnellement à la qualité de sa solution.</p>
		
		</br><div class="image"><img src="images/trace_mvar.png" height="500px"/></div>
		
		</br><p class="citation">Résultats obtenus après tests sur une image IRM avec la trace \(MVar\)</p>
		
		<p class="texte">Le programme nous renvoie des valeurs différentes qui semblent déjà plus exploitables. La tumeur est visible et on différentie le crâne de la matière cérébrale. La solution idéale selon cette trace est bien meilleure que la précédente, mais reste assez limitée. Nous pouvons aller encore plus loin.</p>
		
		<h4>Le critère mixte</h4>
		<p class="texte">Nous avons proposé une trace qui est hybride entre celle de l’article et celles de la littérature classique, \(\frac{MVar}{L^k(t)^2}\).</p>
		
		</br><div class="image"><img src="images/trace_mixte.png" height="500px"/></div>
		
		</br><p class="citation">Résultats obtenus après tests sur une image IRM avec la trace \(\frac{MVar}{L^k(t)^2}\)</p>
		
		<p class="texte">On observe ici encore d’autres seuils. Cette solution ici discrimine plutôt efficacement la tumeur mais ne permet pas réellement de visualiser autre chose.</p>
		
		<h4>Utilisation des différentes traces</h4>
		<p class="texte">Nous avons remarqué que sur chaque solution, les seuils sont assez proche. La première discrimine efficacement le vide du non-vide. La seconde discrimine efficacement les éléments clairs (comme le crâne, la tumeur) des autres éléments. Et la dernière enfin discrimine efficacement la tumeur du reste du matériel cérébral.</p>
		
		<p class="texte">Nous avons donc proposé de réaliser une segmentation à la main liant ces avantages :</p>
		
		</br><div class="image"><img src="images/segmentation_main.png" height="500px"/></div>
		
		</br><p class="citation">Résultats obtenus après segmentation à trois seuils (10, 125 et 200) sur une image IRM</p>
		
		<p class="texte">Nous avons gardé 3 segments, un par solution proposé par trace. Les résultats sont alors beaucoup plus encourageants. La tumeur est identifiable, tout comme le crâne, la matière cérébrale et la tête.</p>
		
		<p class="texte">Avec les différentes exécutions nous avons pu proposer des seuils de segmentations permettant de visualiser efficacement la tumeur de ce patient. Et ce, même malgré un probable problème au niveau du code.</p>
		
		<h4 id="opti">Optimisation visuelle et empirique</h4>
		<p class="texte">Après avoir opéré quelques essais manuellement sur cette même image, une des segmentations visuellement intéressante possède des seuils proches de celle donnée plus haut avec le mélange des traces.</p>
		
		</br><div class="image"><img src="images/opti.png" height="500px"/></div>
		
		</br><p class="citation">Résultats obtenus après segmentation à trois seuils (10, 170 et 200) sur une image IRM</p>
		
		<p class="texte">Cette segmentation semble idéale car elle permet de discriminer avec plus de précision la tumeur. Notre précédente valeur reste acceptable, et la recherche empirique de seuils de segmentation peut être longue.</p>
	</div>
	
<?php 
	include('pied.php');
?>