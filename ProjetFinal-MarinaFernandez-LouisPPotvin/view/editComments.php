
<?php ob_start(); ?>

<div id="con">
<div class="livreContainer">
		<?php
			$nom = $_POST['nom'];	
			$points = $_POST['points'];	
			$texte = $_POST['texte'];
			$idComment = $_POST['idComment'];		
			
			echo "
			<form class='editComment' method='POST' action='index.php?action=editTheComment'>
				<input type='hidden' name='nom' value='".$nom."'>
				<input type='hidden' name='idComment' value='".$idComment."'>
				<input type='hidden' name='points' value='".$points."'>
				<textarea name='texte'>".$texte."</textarea><br>
				<button class='editBtn' name='commentSubmit' type='submit'>Edit</button>
			</form>";

		?>

</div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>