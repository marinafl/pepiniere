
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Enregistrez-Vous!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../public/css/loginStyle.css">
</head>
<body>
	<div class="contactcontainer">		

		<div class="contacttitre">
			<h3>Contactez-nous</h3>
		</div>
		<div class="contactlayout">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.655288047356!2d-73.5844829842308!3d45.55725953524971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91eace22b9bcf%3A0x18799aed17aa23d9!2sRosemont%20College!5e0!3m2!1sen!2sca!4v1597522447627!5m2!1sen!2sca" width="810" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			<div>
				<br>
				<hr>
				<h5>6400 16e Avenue, Montréal, QC H1X 2S9</h5>
				<h6>TEL: (514) 555-5472</h6>
				<hr>
			</div>
			<div class="formFlex contactformContent">
				<form id="contactform" action="../index.php?action=contactform" class="contactform" method="post">
					<h5>Envoyer un message: </h5>
					<div class="colForm flex100">
						<label for="name" class="contactLabel1">Nom<span  >&nbsp;* :</span></label>
						<input type="text" value="" maxlength="50" name="name" id="name" required />
					</div>
							
							
					<div class="colForm flex100">
						<label for="email" class="contactLabel">Adresse courriel<span >&nbsp;* :</span></label>
						<input type="text" value="" maxlength="150" name="email" id="email" placeholder="moi@travail.com" required />
					</div>
					
					<div class="colForm flex100">
						<label for="object" class="contactLabel">Object<span>&nbsp;* :</span></label>
						<input type="text" value="" maxlength="200" name="object" id="object" required />
					</div>

					<div class="colForm flex100">                
						<div class="relative">
							<label for="contactTexte" class="contactLabel">Message<span>&nbsp;* :</span></label>
							<textarea class="form-control" type="text" name="contactTexte" id="contactTexte" row="8" required></textarea>
						</div>
					</div>
					
					<button class="btn btn-secondary" type="submit">Envoyer</button>
					<p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>