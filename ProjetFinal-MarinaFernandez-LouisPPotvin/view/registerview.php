<!DOCTYPE html>
<?php
require_once('controller/controller.php');

session_start();

?>

<html id="login">
<head>
	<meta charset="utf-8">
	<title>Enregistrez-Vous!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../public/css/loginStyle.css">
</head>
<?php require('templatehaut.php'); ?>
<body id="login">
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card" id="registerCard">
				<div class="card-header">
					<h3>Enregistrez-Vous! </h3>
				</div>
				<div class="card-body">
					<form action="index.php?action=registerform" method="POST">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" name="username" placeholder="Nom d'usager" required>
							
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" id="regpassword" name="regpassword" placeholder="Mot de passe" required>
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" id="regpassword2" name="regpassword2" placeholder="Confirmer mot de passe" required>
						</div>
						<div class="form-group" >
							<input type="submit" id="submit" value="S'enregistrer" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						
						Bienvenue à la Pépinière Labranche
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/public/js/jquery.js"></script>
	<script>
	var password = document.getElementById("regpassword");
	var confirm = document.getElementById("regpassword2");

	function validatePassword(){
	  if(password.value != confirm.value) {
		confirm.setCustomValidity("Mots de passe ne sont pas identiques");
	  } else {
		confirm.setCustomValidity('');
	  }
	}

	regpassword.onchange = validatePassword;
	regpassword2.onkeyup = validatePassword;
	</script>
</body>
</html>


