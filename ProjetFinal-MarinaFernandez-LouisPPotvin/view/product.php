<?php
if(!isset($_SESSION['user'])) {
	session_start();
	if(!isset($_SESSION['user'])) {

		header ("location: index.php?action=login");
	} else {

	}
}?>

<?php ob_start(); ?>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<meta charset="UTF-8">	
<div id="con">
	<div class="contenu">
		<p class="title">Nos produits populaires</p><br>
		<div class="arbresFruitiers">
			<?php $categorie = 'Arbres Fruitiers';?>
			<h3 class="soustitre1">Arbres Fruitiers</h3><br>
			<div class="imgArbresContainer">
				<?php
			
				while( $row = $result->fetch_array() )
				{
					if ($categorie == $row['categorie'])
					{

				?>	
					
					<a href="index.php?action=descproduit&amp;id=<?= $row['idProduits'] ?>">
						<div class="imgContainer">
						
							<img alt="picture" style="width:430px; height: 300px;"src="public\images\<?= htmlspecialchars($row['image']) ;?>" class="treeImage">
							<div id="myHover" class="textHover">
								<h4><?php  echo $row['nomProduits']; ?></h4>
								<p>Regarder</p>
							</div>
						</div>
					</a>
				<?php
					}	
				}
			
			?>
			</div>
		</div><br>
			
		<div class="arbresFruitiers">
			<?php $categorie = 'Arbres a Noix';?>
			<h3 class="soustitre1">Arbres à Noix</h3><br>
			<div class="imgArbresContainer">
				<?php
			
				while( $row = $result2->fetch_array() )
				{
					if ($categorie == $row['categorie'])
					{

				?>	
					
					<a href="index.php?action=descproduit&amp;id=<?= $row['idProduits'] ?>">
						<div class="imgContainer">
						
							<img alt="picture" style="width:430px; height: 300px;"src="public\images\<?= htmlspecialchars($row['image']) ;?>" class="treeImage">
							<div id="myHover" class="textHover">
								<h4><?php  echo $row['nomProduits']; ?></h4>
								<p>Regarder</p>
							</div>
						</div>
					</a>
				<?php
					}	
				}
				?>
			</div>
		</div><br>
			
		<div class="arbresFruitiers">
			<?php $categorie = 'Arbustes Fruitiers';?>
			<h3 class="soustitre1">Arbustes Fruitiers</h3><br>
			<div class="imgArbresContainer">
				<?php
			
				while( $row = $result3->fetch_array() )
				{
					if ($categorie == $row['categorie'])
					{

				?>	
					
					<a href="index.php?action=descproduit&amp;id=<?= $row['idProduits'] ?>">
						<div class="imgContainer">
							<img alt="picture" style="width:430px; height: 300px;"src="public\images\<?= htmlspecialchars($row['image']) ;?>" class="treeImage">
							<div id="myHover" class="textHover">
								<h4><?php  echo $row['nomProduits']; ?></h4>
								<p>Regarder</p>
							</div>
						</div>
					</a>
				<?php
					}	
				}
				?>
			</div>
		</div>
				
				<?php 
				$result->free();
				?>
	</div>
</div>
<script src="public/js/jquery.js"></script>
<script>
$(document).mousemove(function(e) {
    $('.logo').offset({
        left: e.pageX,
        top: e.pageY + 20
    });
});
</script>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
