<?php 
	include('includes/entete.php');
	$title = 'telechargements';
?>

	<h2 class="dl">Consignes pour lancer les programmes</h2>
	</br>
	<ul class="dl">
		<li><p class="texte">Si vous souhaitez obtenir une segmentation d'une image à partir de la console, tapez les lignes de code suivantes :</p></li>
		<div class="content">
			<pre class="codeinput">im = <span class="string">'votre_image.extension'</span> </br>imagesc(segmentation(im, [vos_seuils])) <span class="comment">% affiche l'image donnée après segmentation avec imagesc</span></pre>
		</div>
		<li><p class="texte">Si vous souhaitez obtenir une segmentation d'image en utilisant notre algorithme à partir de la console, tapez les lignes de code suivantes :</p></li>
		<div class="content">
			<pre class="codeinput">im = <span class="string">'votre_image.extension'</span> </br>importation.m <span class="comment">%les paramètres sont à modifier à la main directement dans le programme,</span>
            <span class="comment">  % de plus le programme importation.m doit être ouvert</span></pre>
		</div>
		<li><p class="texte">Si vous souhaitez obtenir une segmentation d'une image à partir de l'interface graphique, il suffit de taper dans la console : IG3()</p></li>
		<li><p class="texte">Si vous souhaitez obtenir une segmentation d'image en utilisant notre algorithme à partir de l'interface graphique, il suffit de taper dans la console : IG2()</p></li>
	</ul>
	
	<h2 class="dl">Quelques conseils concernant nos algorithmes</h2>
	
	</br>
	<ul class="dl">
		<li><p class="texte">Lorsque vous souhaitez lancer une nouvelle ACO ou segmentation depuis l'interface graphique, fermez la fenêtre déjà existante (si vous avez déjà lancé le programme) et entrez de nouveau IG2() ou IG3() dans la console MATLAB</p></li>
		<li><p class="texte">Les résultats de la segmentation apparaissent dans la console MATLAB sous la forme : <i>win</i> suivi des n seuils de segmentation trouvés puis de la valeur du meilleur MVar</p></li>
		<li><p class="texte">Les tuples doivent être entrés dans l'ordre croissant</p></li>
		<li><p class="texte">La différence entre temps d'éxecution court et long consiste à modifier le nombre de fourmis utilisées ainsi que le nombre d'itérations. Nous précisons que le temps d'éxecution "long" est peut être vraiment TRES long (en effet, l'ACO est souvent gourmande pour des résultats pouvant être obtenus de manière plus élégante)</p></li>
		<li><p class="texte">La segmentation manuelle est de meilleure qualité lorsque des seuils de faible intensité sont choisis (qui se traduisent par les "trous" dans l'histogramme)</p></li>
		<li><p class="texte">Si le programme dans l'interface graphique IG2 venait à ne pas se lancer ou à provoquer des erreurs, essayez de changer les paramètres de l'interface graphique avant de ré-appuyer sur le bouton de lancement</p></li>
		<li><p class="texte">Si le résultat de la segmentation donne que des seuils valant 0, c'est probablement qu'il n'y a pas de segments sur lesquels le MVar pouvait être calculé</p></li>
	</ul>
	
	</br><p class="texte">Pour télécharger l'archive contenant les codes seulement : <a href="telechargements/code_only.zip" download="only_code">Télécharger les codes</a></p>
	<p class="texte">Pour télécharger l'archive contenant les images seulement : <a href="telechargements/images.zip" download="images_only">Télécharger les images</a></p>
	<p class="texte">Pour télécharger l'archive contenant les codes et les images : <a href="telechargements/codes_et_images.zip" download="codes_et_images">Télécharger les codes et les images</a></p>
</br>
<?php 
	include('includes/pied.php');
?>