<?php
require_once('controller/controller.php');

if (isset($_GET['action'])) {
		showVisitors();
	switch (($_GET['action'])) {
		case 'login':
			include "view/loginview.php";
			break;
		case 'loginform':
			login();
			break;
		case 'register':
			include "view/registerview.php";
			break;
		case 'registerform':
			registering();
			break;
		case 'getContactPage':
			getContactPage();
			break;
		case 'getCommentPage':
			getCommentPage();
			break;

		case 'getProductPage':
			include "view/product.php";
			break;
		case 'contactform':
			if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["object"]) && isset ($_POST["contactTexte"])){
				contactMessage($_POST["name"], $_POST["email"], $_POST["object"],$_POST["contactTexte"]);
			}else{ echo "Erreur: tous les champs ne sont pas remplis!";
			}
			break;
		case 'submitComment':
			if (isset($_POST["texte"])){
				submitComment($_POST['texte']);
			}else{ echo "Erreur: tous les champs ne sont pas remplis!";
			}
			break;
		case 'getComments':
			getComments();
			break;

		case 'changeLikes':
			if(isset($_POST['subtract'])){
				$idComment = $_POST['idComment'];
				$points = $_POST['points'];
				changeLikes($idComment, $points-1);
			}else if(isset($_POST['add'])){
				$idComment = $_POST['idComment'];
				$points = $_POST['points'];
				changeLikes($idComment, $points+1);
				
			}
			break;
		case 'produit':
			showProduits();
			break;
		case 'descproduit':
			showProduit();
			break;
		case 'editComment':
			if(isset($_POST['commentEdit'])){
				$idComment = $_POST['idComment'];
				$nom = $_POST['nom'];	
				$points = $_POST['points'];	
				$texte = $_POST['texte'];

				include "view/editComments.php";
			}
			break;

		case 'editTheComment':
			if(isset($_POST['commentSubmit'])){
				$idComment = $_POST['idComment'];
				$nom = $_POST['nom'];	
				$points = $_POST['points'];	
				$texte = $_POST['texte'];
				editTheComment($idComment,$nom,$points,$texte);
			}
		case 'deleteComment':
			if(isset($_POST['commentDelete'])){
				$idComment = $_POST['idComment'];
				deleteComments($idComment);
			}
			
			break;
		case 'contact':
			include "view/contactview.php";
			break;
		case 'logout':
			logout();
			break;
		default:
			include "view/loginview.php";
	}
}else {
	include "view/loginview.php";
}
?>
