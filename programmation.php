<?php 
	include('entete.php');
	$title = 'programmation';
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-lg-2" id="side_menu">
				<nav class="navbar navbar-default navbar-fixed-side">
					<ul class="nav navbar-nav">
						<li><a href="#matlab">MATLAB</a></li>
						<li><a href="#orga_simp">Organigramme simplifié des programmes</a></li>
						<li><a href="#organigramme">Organigramme des programmes</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-sm-9 col-lg-10" id = "texte_droite">
				<div id = "matlab">
					<h2><a href="https://fr.mathworks.com/products/matlab.html"><img src="images/matlab.png" height="50px"/></a>MATLAB</h2>
					
					</br><p class="texte">Pour ce travail d'étude nous avons choisi d'implémenter les algorithmes sous le logiciel MATLAB, qui est un langage informatique destiné à résoudre les problèmes scientifiques.</p>
					
					<p class="texte">C'est un langage simple d'utilisation avec une interface ergonomique, qui est le plus souvent utilisé en mathématiques et en physique pour répondre à des problèmes d'optimisation. Ici, le fonctionnement ergonomique de MATLAB facilite grandement le traitement du sujet que l'on nous a proposé. Que ce soit la segmentation d'une image, son affichage, ou même l'implémentation d'un algorithme évolutif, toutes ces tâches sont réalisables à l'aide de MATLAB. </p>
					
					
					<p class="texte">Pédagogiquement, ce projet est une bonne occasion pour nous de nous former sur ce langage, et d'ainsi acquérir un bagage d'expérience pratique pour nos expériences futures.</p>
					
					<p class="texte">Ce langage n'est pas plus pertinent qu'un autre dans le cas présent. Il est vrai que nous aurions pu produire des résultats similaires en utilisant Python, R, ou encore Scilab. L'utilisation de MATLAB est purement une occasion de se familiariser avec ce langage plutôt qu'une recherche d'efficacité. La prise en main du logiciel a été répartie tout au long du semestre 6, et nous a permis de produire ce travail, d'appréhender et de maîtriser toutes les techniques propres à ses résultats. </p>
					
					<p class="texte">Nous avons notamment utilisé GUIDE sous MATLAB ce qui nous a permit de produire des interfaces graphiques et de les configurer pour exécuter notre code.</p>
					
					<p class="texte">De manière plus subjective, nous avons pris plaisir à développer sur MATLAB, et sommes persuadés que nous serons amenés à retravailler sur ce langage.</p>
				</div>
				
				<div id = "orga_simp">
					<h2>Organigramme simplifié des programmes</h2>
					
					</br><p class="texte">Dans cette partie nous allons présenter de manière simple le fonctionnement global de l'algorithme. Cette partie est d'avantage réservé aux non initiés et ne rentre pas dans le détail du code produit durant ce TER.</p>
					
					<p class="texte">Le programme est muni d'une interface graphique (que vous pouvez voir <a href="interface.php">ici</a>), l'utilisateur n'aura qu'à interagir avec cette interface. L'objectif est de proposer des seuils de segmentation (voir <a href="theorie_aco.php#segmentation">ici</a>) optimisant le critère du MVar (expliqué <a href="theorie_aco.php#cadre">ici</a>). Les seuils devraient permettre de mieux lire une image, et de mettre en évidence certaines structures notamment dans le cas d'un diagnostic basé sur une image IRM.</p>
					
					<p class="texte">Voici donc un organigramme des différentes fonctionnalités :</p>
					
					<div class="image"><img src="images/orga_simp.png" height="600px"/></div>
					
					</br><p class="citation">Schéma présentant l'organisation des différentes fonctionnalités des programmes</p>
					
					<p class="texte">Le fonctionnement global du RunACO (comprendre "lancer l'Algorithme de Colonie de Fourmis") se base sur un ensemble de fourmi. Chaque fourmi va proposer des seuils de segmentations. L'image issue de ces seuils va être évaluée pour chaque fourmi, et la meilleure image (optimisation le MVar) est conservée.</p>
					
					<p class="texte">Le déroulement de l'exécution se fait sur plusieurs tours, et à chaque tour chacune des fourmis va proposer un seuil et se faire évaluer.</p>
					
					<p class="texte">On peut voir sur l'organigramme une fourmi construisant ses seuils de segmentations, celle ci proposera les seuils [74 100 200]. Une image est effectivement constituée de pixels qui ont des valeurs entre 0 (noir) et 255 (blanc). Elle est donc construite sur 256 nuances de gris. La fourmi propose ici une segmentation à 4 classes : [0;74], [74;100], [100;200] et [200;255]. L'image segmentée aura donc 4 nuances de gris :  37 (la moitié de 0 et de 74), 87, 150 et 228.</p>
					
					<p class="texte">Pourquoi la fourmi propose-t-elle ces seuils ? En réalité elle saute d'un seuil à un autre avec une certaine probabilité. Chaque saut d'un seuil à un autre est affecté à une probabilité qui influence le choix de la fourmi. Les seuils proposés ne sont pas forcément les plus probables, mais ces probabilités peuvent mener les fourmis en moyenne à se diriger vers certaines solutions plutôt que d'autres.</p>
					
					<p class="texte">La fourmi va déposer des phéromones sur le chemin qu'elle a emprunté. Ici, le saut 0-74 recevra un peu de phéromones de la fourmi, tout comme les 3 autres sauts qu'elle a effectués. La probabilité d'un saut est directement liée au nombre de phéromones qu'il possède. Plus il est chargé en phéromones, plus il est probable (voir la partie sur l'<a href="theorie_aco.php#aco">ACO</a>) (Encore une fois, les fourmis ne suivent pas forcément le chemin le plus probable).</p>
					
					<p class="texte">La fourmi passe ensuite à une étape d'évaluation, ou la pertinence de sa proposition va être évaluée avec une fonction de critère, le MVar  (expliqué <a href="theorie_aco.php#cadre">ici</a>). La solution va être comparée aux autres solutions déjà trouvées, et le programme conservera la meilleure.</p>
					
					<p class="texte">Cette opération se répète un certain nombre de fois pour chaque fourmi. A chaque itération, un pourcentage des hormones s’évapore. Si ce phénomène peut paraître purement bio-inspiré, il reste intéressant pour le programme. En effet, cette évaporation permet de ne pas trop favoriser des solutions moyennes, qui n'ont été proposées qu'une fois par exemple.</p>
				</div>
				
				<div id = "organigramme">
					<h2>Organigramme des programmes</h2>
					
					</br><div class="image"><img src="images/organigramme.png" height="600px"/></div>
					
					</br><p class="citation">Schéma présentant l'organisation des différents programmes</p>
					
					<p class="texte">Cet organigramme vient compléter l'organigramme précédent, mais s'adresse aux personnes souhaitant d'avantage rentrer dans la compréhension des choix algorithmiques de l'ACO. Les programmes sont téléchargeables <a href="telechargements.php">ici</a>.</p>
					
					<h3>L'initialisation</h3>
					
					<p class="texte">Les paramètres de l'interface graphique sont récupérés à l'aide d'une méthode "get" et sont placés de manière intelligible dans RunACO.m.</p>
					
					<p class="texte">On récupère les données de l'image, le nombre de seuils, le taux d'évaporation des phéromones, le nombre de fourmis, et les conditions d'arrêt, ainsi que l'alpha et le beta, que nous aborderons plus tard. Les conditions d'arrêts sont établies en nombre d'itérations, ou en nombres d'itérations sans changement de meilleure solution.</p>
					
					<p class="texte">Tout l'algorithme repose sur une matrice de 256x256, qui est la matrice des phéromones. Elle porte le nom "transi" dans le code. Elle prend, pour chaque \(i,j \), la quantité de phéromones sur le saut du seuil \(i \) au seuil \(j \). Nous rappelons que la construction d'une solution est un ensemble de seuils, et que chaque seuil s'ajoute à la solution jusqu'à atteindre le nombre de seuils souhaités. Chaque saut a donc une probabilité, qui est fonction de la quantité de phéromones. On peut donc dire, en un sens, que la matrice transi est une matrice d'incidence, même si ces valeurs ne représentent pas des probabilités, mais des poids. La construction de ces tuples se fait dans le programme "tupleseuilparam.m", mais s'accompagne de deux autres paramètres.</p>
					
					<p class="texte" id="trace">Il manque deux paramètres pour générer des tuples de seuils : le alpha et le beta. Ils correspondent respectivement à la pondération de l'importance des phéromones et à la pondération de la visibilité des fourmis. Dans la fonction de déplacement, deux paramètres composent la probabilité d'un saut d'un seuil \(i \) à un autre seuil \(j \).  D'un côté le \(\tau_{i,j} \) et de l'autre le \(\eta_{i,j} \) :
					</br>$$ p_{i,j}^k = \left\{
						\begin{array}{ll}
						\frac{\tau_{i,j}(t)^\alpha . \eta_{i,j}^\beta }{\sum_{l \in J_i^k} \tau_{i,l}(t)^\alpha . \eta_{i,l}^\beta} & \mbox{si } j \in J_i^k \\
						0 & \mbox{si } j \notin J_i^k 
						\end{array}
						\right. $$
					 </p>
					
					<p class="texte" id="visibilite">Le \(\tau_{i,j} \) représente la quantité de phéromone, et est mise à la puissance \(\alpha \). De l'autre côté, le \(\eta_{i,j} \) représente la visibilité entre les seuils \(i \) et \(j \). Cette valeur prend l'inverse de la distance entre \(i \) et \(j \). C'est à dire que \(\eta_{1,21} = \frac{1}{21-1} = 0.05 \), et que \(\eta_{1,51} = 0.02 \). Cette valeur est à la puissance \(\beta\). La probabilité de faire un grand saut est donc assez faible si \(\beta\) est élevé, par rapport au \(\alpha\).</p>
					
					<h3>Conception de la solution</h3>
					
					<p class="texte">Ces paramètres rentrent en compte dans la conception de la solution. Tupleseuilparam.m sélectionne une ligne de la matrice de transition (phéromones) et y applique l'\(\alpha\). On multiplie ensuite chaque élément de la liste par la visibilité à la puissance \(\beta\). On divise ensuite la liste par la somme de ses termes, on obtient alors une loi de probabilité (La somme des termes vaut 1 et chacune des valeurs positives ou nulles donne une probabilité)</p>
					
					<p class="texte">Cette loi de probabilité est utilisée dans une simulation (simustep.m) qui va générer un seuil aléatoire. Cette démarche est répétée plusieurs fois par fourmi, afin de constituer des tuples de seuils. </p>
					
					<h3>Evaluation de la solution</h3>
					
					<p class="texte" id="mvar">Cette partie est plus technique et tient lieu de présentation de l'implémentation du critère MVar.</p>
					
					<p class="texte">$$ MVar(t_1,\ldots,t_{N-1}) = \alpha . \sum_{j = 1}^N \beta_j^{-1} . \sigma_{int}^2 (j) + \gamma_j $$</p>
					
					</br><p class="texte">où N représente le nombre de classes à segmenter (supposé connu a priori), \(\sigma_{int}^2 (j)\) la variance intraclasse de la classe j, \(t_1\) à \(t_{N-1}\) les seuils de segmentation sélectionnés, et \(\beta_j\), \(\gamma_j\) les paramètres de correction de la variance intraclasse utilisée dans la méthode <a href="references.php">Otsu.</a></p>
					
					<p class="texte">\(\alpha\) est égal à \({(1000 * M)}^{-1} . \sqrt{NR}\) où M est le nombre total de pixels dans l’image et NR le nombre de régions, c’est-à-dire le nombre de composantes connexes dans l’image segmentée. Ce terme est utilisé pour normaliser et pénaliser les images sursegmentées.</p>
					
					<p class="texte">Le terme \(\beta_j = (1+\log{N_j}) \) est choisi de telle sorte que le terme \(\beta_j^{-1} . \sigma_{int}^2 (j)\) soit faible pour les grandes classes. \(N_j\) est le nombre de pixels dans la classe j.</p>
					
					<p class="texte">Le terme \(\gamma_j = (C(N_j)/N_j)\) est élevé lorsque l’image segmentée comporte beaucoup de régions de même taille, surtout si elles sont petites. \(C(N_j)\) est le nombre de régions dont le cardinal est égal à \(N_j\) Pour les grandes régions, \(C(N_j)\) est, dans la plupart des cas, égal à 1, alors que, pour les régions de petites tailles, il devient supérieur à 1.</p>
					
					<p class="citation">Voir la formule (10.2) de la <a href="references.php">référence 1</a></p>
					
					</br>
					
				</div>
			</div>
		</div>
	</div>
	</br>
	
<?php 
	include('pied.php');
?>