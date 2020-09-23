<! DOCTYPE html>
<html>
	<head>
		
	<link href="public/css/productStyle.css" rel="stylesheet" type="text/css">
	<link href="public/css/commentStyle.css" rel="stylesheet" type="text/css">
		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

		<script src="public/js/productScript.js" defer></script>
		<link rel="stylesheet" type="text/css" href="public/css/loginStyle.css">
		<title>Livre D'or</title>
	</head>

	<body>
		<! – NAVIGATION BAR –>
		<nav class="myNav" id="navB" >
			
				<div class="logoBox">
					<img class="logo" src="public/images/logo.png">
					<p  class="companyName">La Pépinière Labranche</p>
				</div>
			
			
			<ul class="uLinks">
				<li class ="uLinksList"><a class = "uLinksListElement" href="index.php?action=produit">Produit</a></li>
				<li class ="uLinksList"><a class = "uLinksListElement" href="index.php?action=getContactPage">Contact</a></li>
				<li class ="uLinksList"><a class = "uLinksListElement" href	="index.php?action=getComments">Livre d'or</a></li>
				<li class ="uLinksList"><a id="connect"; class = "uLinksListElement" href	="index.php?action=logout">Déconnexion</a></li>
				<a href	="#" onclick="changeFont()" class="button">Changer Thème</a>
			</ul>

			<a href="#" class="burger">
				<div class="line1"></div>
				<div class="line1"></div>
				<div class="line1"></div>
			</a>
		</nav>
		<script>
function connecter(){
document.getElementById("connect").innerHTML = "Connexion" ;

}
connecter();

</script>

	</body>


</html>