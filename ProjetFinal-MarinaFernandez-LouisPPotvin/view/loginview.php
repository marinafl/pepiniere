

<!DOCTYPE html>
<html id="login">
<head>
	<meta charset="utf-8">
	<title>Connectez-Vous!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../public/css/loginStyle.css">
</head>
<body id="login">
<?php require('templatehaut.php'); ?>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Connectez-Vous! </h3> <?php if (isset($result)){echo $result;} ?>
				</div>
				<div class="card-body">
					<form action="index.php?action=loginform" method="POST">
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
							<input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
						</div>
						<div class="form-group" >
							<input type="submit" value="Se Connecter" class="btn float-right login_btn">
						</div>
					</form>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						
						Pas de compte?<a href="index.php?action=register">Créer en un!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

