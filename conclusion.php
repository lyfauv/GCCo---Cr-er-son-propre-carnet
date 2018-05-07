<?php 
	include('entete.php');
	$title = 'conclusion';
?>
	<div class="autre">
		<h2>Conclusion</h2>
		</br><p class="texte">Nous avons essayé lors de se travail d'étude de reproduire et d'approfondir les éléments développés dans l'article « Les fourmis pour la segmentation d'images médicales par résonance magnétique ».</p>
		
		<p class="texte">Il a été décidé d'implémenter les algorithmes décrits dans ce même article sous MATLAB, ce qui nous a permis d'obtenir des résultats intéressants, même si quelque peu différents de ceux de l'article.</p>
		
		<p class="texte">Afin d'avoir un meilleur rendu et de pouvoir mieux comparer les résultats, nous avons créé deux interfaces graphiques. Elles permettent de visualiser l'image d'origine, l'image segmentée obtenue et l'histogramme de l'image de base avec les seuils de segmentation. Le premier interface propose des seuils calculés par l'algorithme, et le second permet d'appliquer soit-même des seuils. Ces interfaces offrent aussi une manière plus simple et plus ergonomique de modifier les différents paramètres de l'algorithme et ainsi de pouvoir tester différentes conditions de recherche des seuils de segmentation. Effectivement chaque image est unique, même si l'ACO MVar semble souple, il ne s'applique pas efficacement à toutes les images. Ce problème de souplesse a été réglé ici en mettant en premier plan les choix utilisateurs.</p>
		
		<p class="texte">Cependant, les segmentations obtenues avec nos algorithmes sont à nuancer : en effet, certains points de code restent peut être améliorables, ce qui pourrait aussi augmenter la qualité de nos résultats.</p>
		
		<p class="texte">Pour essayer de trouver une autre méthode donnant de meilleurs résultats, nous avons donc essayer de coupler plusieurs critères issus de la littérature et nous les avons comparés au critères dont nous disposions déjà (critère MVar de l'article étudié et critère de Borsotti).</p>
		
		<p class="texte">Si la méthode des algorithmes de colonie de fourmis semble complexe, possède des erreurs, et reste longue à executer, on pourra tout de même noter l'élégance de la méthode. Ce TER ne cherche effectivement pas à répondre de manière optimale à un problème, mais plus à explorer les méthodes annexes, notamment bio-inspirées, qui pourraient répondre de manière acceptable à ces mêmes problèmes.</p>
	</div>
	</br>
	
<?php 
	include('pied.php');
?>