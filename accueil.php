<?php 
	$title = "accueil";
	include('entete.php');
?>

	<div class="citation">
		<p>"Explorateur, il a été la patte</p>
		<p>Sur place, il a été l'oeil,</p>
		<p>De retour, il est le stimulus nerveux."</p>
		<p>"Les fourmis" de Bernard Werber</p>
	</div>
	
	<div class="autre" id = "abstract">
		<h2>Abstract</h2>
		</br><p class="text">Some problems are too complex to be solved with classical methods. Indeed, exhaustive methods could be way too long to operate to be fonctionnal.  Metaheuristic propose ways to find acceptable answers to those complex problem with a shorten time. Among those methods, some of them are bioinspired, as the Ant Colony Optimization algorithm (ACO) (Dorigo, 1996). This algorithm mimics the foraging behavior of ants, and simulate the seeking process of the colony.  </p>
		
		<p class="text">The MRI scan images quality may suffer from some noise in the signal. Segmentation (reducing a picture to a given number of colors) is a way to reduce this noise and  thus ease the lecture by a clinician. Segmentation is a quite challenging problem, because a lot of different solutions might be proposed. The aim of this research project is to reproduce results from an article « Les fourmis pour la segmentation d'images médicales par résonance magnétique » by Amir Nakib using the ACO algorithm and the MVar criteria to optimize the segmentation of medical images.</p>
		
		<p class="text">We used MATLAB to reproduce those results and create a graphic interface. This interface allows to produce segmented picture, using either the MVar based ACO, or by selecting manual threshold.</p>
		
		<p class="text">Automated ACO results don’t match neither the expectations nor the original article. Indeed, the visual quality of segmented images produced is poor, even if the MVar is optimized. However, we proposed other pheromonal trace that, when combined, can show some pertinent results. </p>
		
		<p class="text">The MVar might not be correctly coded, however, good solutions are still valorized. Our MVar seems to not efficiently quantify the visual quality of a segmentation. Finding a better, simpler, criteria would be a good answer to that problem.</p>
	<h2> Résumé </h2>
	</br>
	<p class="text">Certains problèmes sont trop complexes pour être résolus avec des méthodes classiques. En effet, les méthodes exhaustives perdent leurs intérêts car deviennent trop longues pour être fonctionnelles. La Metaheuristique permet de trouver des résultats acceptables à ces problèmes complexes en un temps d'éxecution raisonnable. Parmi ces méthodes, certaines s'insipirent de comportements biologiques observables, comme l'algorithme des colonies de fourmis (ACO) (Dorigo, 1996). Cet algorithme imite le comportement de recherche de nourriture des fourmis et ainsi de toute la colonie.</p>
	
	<p class="text">La qualité des images de scan IRM peuvent souffrir de bruit dans le signal acquis. L'image pourra paraître floue, ce qui est un problème pour le diagnostique. La segmentation d'image (la réduction du nombre de couleurs d'une image), peut réduire le bruit d'une image, et ainsi faciliter le diagnostique du clinicien. Une bonne segmentation reste complexe à trouver. Le but de ce TER est de reproduire les résultats d'un article « Les fourmis pour la segmentation d'images médicales par résonance magnétique » en utilisant un algorithme ACO et le critère MVar pour optimiser la segmentation de l'image médicale. </p>
	
	<p class="text">Pour ce faire, nous avons utilisé MATLAB pour proposer des solutions et mettre en place des interfaces graphiques. La première permet de segmenter une image avec la méthode automatisée, et la seconde permet de la segmenter manuellement.</p>
	
	<p class="text">Les résultats de la méthode automatisée de l'ACO ne renvoie pas les résultats attendus dans la littérature. Effectivement, la qualité visuelle des segmentations proposées est très variable, et souvent peu adaptée, même lorsque le MVar est optimisé. Nous avons, pour pallier ce problème, proposé des traces phéromonales hybrides, mélangeant les critères de l'article et de la littérature. Ces résultats sont alors beaucoup plus encourageants.</p>
	
	<p class="text"> Notre critère MVar semble être mal implémenté et ne valorise pas assez les bonnes solutions. Ces solutions sont tout de même valorisées mais ne ressortent que peu souvent. Un critère plus simple et quantifiant plus pertinemment la qualité visuelle d'une segmentation pourrait peut être bonne réponse à ce problème.</p>
	</div>
	</br>
	
	

<?php 
	include('pied.php');
?>