<?php 
	include('entete.php');
	$title = 'discussion';
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-lg-2" id="side_menu">
				<nav class="navbar navbar-default navbar-fixed-side">
					<ul class="nav navbar-nav">
						<li><a href="#analyse">Analyse des résultats</a></li>
						<li><a href="#tests">Tests</a></li>
						<li><a href="#difficultes">Difficultés rencontrées</a></li>
						<li><a href="#ouverture">Ouverture</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-9 col-lg-10" id = "texte_droite">

				<div id = "analyse">
					<h2>Analyse des résultats</h2>
					
					<h3>La segmentation fonctionne-t-elle avec des images simples ?</h3>
					
					<p class="texte">Nous avons tenté de reproduire des résultats simples d’une segmentation idéale concernant une image conçue avec MATLAB.</p>
					
					</br><div class="image"><img src="images/carre.jpg" height="300px"/></div>
					
					</br><p class="citation">Image bruitée de carrés avec quatre niveaux de gris différents</p>
					
					<p class="texte">Nous avons généré une image constituée de 4 zones constituées de pixels dont la valeur fait partie d’un intervalle. Chaque zone peut être globalement attribuée à une nuance de gris précise, mais est en réalité constituée d’un ensemble de pixels qui individuellement ont une valeur plus ou moins proche de cette moyenne. L’effet ainsi obtenu est comparable à quatre carrés de couleurs différentes possédant un grain, ou du bruit. La segmentation idéale reviendrait à séparer clairement chacun des quatre carrés. Or, l’exécution de notre programme ne renvoie pas exactement ce que nous espérions.</p>
					
					<p class="texte">Le critère du Mvar n’est pas forcément plus élevé si l’image est « convenablement segmentée » en quatre parties distinctes. C'est-à-dire que le critère ne rend pas bien compte de la qualité visuelle de la segmentation de cette image.</p>
					
					<p class="texte">Comme nous a dit l’auteur, c’est un outil et un paramétrage qui fonctionne essentiellement sur les images IRM avec un spectre particulier (beaucoup de sombres et une luminosité moyenne assez basse par exemple). Il est donc normal, en un sens, que la généralisation à des images simples soit peu pertinente, même si de meilleurs résultats étaient attendus.</p>
				
				<div id = "tests">
					<h2>Tests</h2>
					<h3>Prise de recul concernant les paramètres</h3>
					
					<h4 id="alpha_beta">Peut-on atteindre la bonne solution ? Le problème vient-il des tuples ?</h4>
					<p class="texte">L’article propose un \(\alpha = 1\) et \(\beta = 5\) (voir <a href="">ici</a>). Or le \(\beta\) est tellement fort que les sauts de plus de 2 ou 3 seuils étaient improbables. On observait alors des solutions de seuils tels [2 5 7]. Ce genre de résultats nous empêchait évidemment d’avoir des images pertinentes, car elles étaient tout bonnement illisibles. </p>
					
					<p class="texte">Nous avons donc fait une analyse des tuples générés pour différents \(\alpha\) et \(\beta\). Nous avons généré un grand nombre de tuples et les avons représentés sur un axe en trois dimensions. Chaque dimension est un seuil, la donnée représentée est donc un tuple de taille 3.</p>
					
					</br><div class="image"><img src="images/alpha_beta.png" height="300px"/></div>
					
					</br><p class="texte">On observe donc ici un nuage de 2000 points avec \(\alpha = 1\) et \(\beta = 1\). Chaque point représente un tuple dans un espace à trois dimensions, composé de ces seuils. Ces tuples ont été générés à l’aide d’une matrice de transition naïve, remplie de 1. Cela veut dire que les sauts sont équiprobables, et que seule la fonction de visibilité <a href="programmation.php#visibilite">\(\eta\)</a> a une influence ici.</p>
					
					<p class="texte">La couleur des tuples donne la variance de l’écart entre les seuils. Ce critère n’a pas de sens concernant le MVar et n’est pas fonction de l’image sur laquelle on appose ces tuples. Si cet indicateur est faible, il souligne des classes de taille équitable, et on peut penser qu’en moyenne ces classes produiront des segmentations visuellement intéressantes.</p>
					
					<p class="texte">Sur ce critère, on peut voir que les segmentations intéressantes sont vers le milieu du graphique. On observe aussi la surabondance de tuples constitués de petits seuils, d’où une erreur probable dans le code.</p>
					
					<p class="texte">On observe néanmoins que les tuples sont plutôt bien répartis, et que le problème des petits seuils ne prend probablement pas sa source dans la construction même de tuples.</p>
					
					<h4>Le problème vient-il de beta trop important ?</h4>
					<p class="texte">L’article dit utiliser un réglage \(\alpha = 1\) et \(\beta = 5\). Or, sous ses paramètres, on observe souvent de tous petits seuils. Nous avons vu dans la partie précédente que pour \(\alpha = 1\) et \(\beta = 1\) les seuils restaient souvent petits, mais ne devraient pas être trop faibles.</p>
					
					<p class="texte">Nous avons tenté de représenter le même graphique que précédemment, mais pour des valeurs de \(\alpha\) et \(\beta\) différentes. Comme précédemment, la variance de la taille des sauts est toujours représentée en bleu et ces données ont été réalisées sur une matrice de transition naïve (<a href="#analyse">remplie de 1</a>).</p>
					
					</br><div class="image"><img src="images/different_alpha_beta.jpg" height="600px"/></div>
					</br><p class="citation">Variance des pas de seuils sur des tuples générés par une matrice de transition naïve pour différentes valeurs de \(\alpha\) et \(\beta\)</p>
					
					<p class="texte">On observe que l’augmentation du \(\beta\) réduit la taille des sauts, et qu’à \(\alpha = 1\) et \(\beta = 5\) les 2000 seuils générés sont extrêmement petits et ne sont par conséquent pas exploitables. Nous pensons donc, après reproduction des résultats, qu’une faute de frappe aurait pu se glisser dans le paramétrage de l’article d’origine. Nous supposons que l’auteur aurait pu vouloir dire \(\alpha = 5\) et \(\beta = 1\) ou bien \(\alpha = 1\) et \(\beta = 0.5\)</p>
					
					<h4>Analyse du critère Mvar</h4>
					<p class="texte">Nous allons étudier l’image de tumeur vue <a href="#analyse">précédemment</a>. La question que nous nous posons ici, c’est : « est-ce qu’en prenant le plus grand MVar l’image serait de bonne qualité ? » Pour ce faire, nous avons mis en place une méthode qui permet de générer un nombre important de tuples et de les représenter. Comme dans la partie où l’on discrimine les seuils en fonction des paramètres \(\alpha\) et \(\beta\) (voir <a href="#alpha_beta">ici</a>). Nous avons donc proposé un ensemble de tuples naïfs, issus d’une matrice de transition naïve (sans phéromones donc), qui sont discriminés selon le MVar appliqué à une image donnée.</p>
					
					</br><div class="image"><img src="images/analyse_mvar.jpg" height="600px"/></div>
					</br><p class="citation">Graphique représentant un ensemble de tuples de solutions pour un \(\alpha\) et un \(\beta\) donnés</p>
					
					<p class="texte">On observe ici un ensemble de tuples de solutions concernant l’image de tumeur vue <a href="#trace_lkt">précédemment</a>. La couleur donne le Mvar des solutions, allant du bleu pour un MVar mauvais, au jaune pour un Mvar optimum. Le Mvar maximum sur ce grand échantillon aléatoire est représenté sur le graphique suivant :</p>
					
					</br><div class="image"><img src="images/histo_mvar.jpg" height="400px"/></div>
					
					<p class="texte">On peut noter que la segmentation avec le Mvar le plus élevé est constituée de seuils très petits. Ces seuils vont sur-segmenter l’image et le rendu visuel sera très pauvre. On peut donc ici, sur cette image, remettre en cause la qualité du MVar pour rendre compte de la pertinence d’une segmentation. Lors de la précédente analyse de cette image (voir <a href="#opti">ici</a>), des seuils optimaux ont été trouvés empiriquement. Si ces seuils montrent un MVar relativement grand, il est toujours moins bon que les solutions constituées de petites classes, qui elles, n’ont aucun intérêt graphique.</p>
					
					<p class="texte">Nous sommes ici dans le cas où le critère de base de notre ACO n’optimise peut-être pas réellement les caractéristiques que nous souhaitons mettre en avant. L'algorithme que nous avons implémenté manque donc de validité.</p>
				</div>
				
				<div id = "difficultes">
					<h2>Difficultés rencontrées</h2>
					</br><p class="texte">Les résultats que nous proposons avec cette méthode ne reflètent pas ce que l’article propose. Une erreur d’implémentation doit s’être glissée parmi les différents éléments que nous avons programmés. Malgré tout, nous arrivons avec un peu d’imagination à répondre au problème qui pourrait nous être posé et à proposer une réponse de qualité toute relative.</p>
					
					<p class="texte">Chaque image possède des seuils optimaux qui lui sont propres et il est donc assez difficile de valider ou de réfuter le calcul de notre critère ou de nos paramètres.</p>
					
					<p class="texte">L’article sur lequel se base notre TER reste un article de recherche, et s’adresse à des chercheurs utilisant déjà ces méthodes. Nous nous sommes munis de la littérature des ACOs pour tenter de comprendre certains éléments et certains choix de l’article, même si certains choix restent inexpliqués. Suite au contact avec l’auteur, celui-ci nous a précisé que certains paramètres ont été établis de manière empirique. Ceux proposés n’ont donc pas forcément une explication théorique. La qualité de ce genre de critère est donc parfois fonction du temps qu’on alloue à cet objectif.</p>
					
					<p class="texte">Si la reproduction des résultats a été parfois un peu complexe, on peut cependant dire que les difficultés liées au langage se sont vites estompées avec le temps.</p>
				</div>
				
				<div id = "ouverture">
					<h2>Ouverture</h2>
					</br><p class="texte">Comme dans la plupart des projets de recherches, le volume des choses faites sera toujours insignifiant face au volume des choses à faire. Nous avons ici cherché à reproduire des résultats établis sur un domaine d’application très délimité. Nous pensions que la spécificité de l’application serait synonyme d’une relative facilité d’accès à la compréhension de ce qu’est un ACO. En réalité, la spécificité de ces applications apporte des critères et des paramètres particuliers qui ne font pas forcement partie de la littérature générale. Nous avons donc pu nous former et implémenter notre premier algorithme de fourmi sans pour autant dire que nous avons couvert le domaine. Ce qui nous amènerait à dire que nous pourrions très bien, dans l’avenir, avoir à reproduire un ACO sur un tout autre domaine, et par conséquent avec des paramètres différents.</p>
					
					<p class="texte">Ce projet de recherche pourrait bien évidemment être améliorable, notamment concernant les résultats. Ce projet gagnerait aussi à être étendu et à sortir d’avantage des gonds de l’article proposé. Nous avons tenté de prendre du recul par rapport à la méthode et notamment par rapport aux résultats aberrants que nous avons rencontrés. Mais tout comme l’auteur le souligne, les paramètres peuvent se trouver de manière empirique, et donc la qualité de la solution dépend aussi du temps passé à cherche à l’optimiser. Il est par conséquent fort possible qu’avec plus du temps de recherche, et moins de temps de reproduction des résultats, nous aurions peut-être pu obtenir des résultats plus intéressants.</p>
				</div>
			</div>
		</div>
	</div>
	</br>

<?php 
	include('pied.php');
?>