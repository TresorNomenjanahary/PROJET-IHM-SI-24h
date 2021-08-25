<div>
	<?php for ($i=0; $i < count($vente); $i++) {  ?>
				<p>Nombre vendu : <?php echo $vente[$i]['nombre'];?></p>
				<p>Produit : <?php echo $vente[$i]['id'];?></p>
	<?php}?>
</div>