<?php
require_once("model/model.php");

function login()
{
		$logins = new Login();
		$result = $logins->getlogin();
		
		if ($result == "login"){
			showProduits();	
		}
		else {
			include "view/loginview.php";
		}
}
function logout()
{
	$logout = new Login();
	$result = $logout ->logout();
	include "view/loginview.php";
}

function commentForm()
{
	$commentForms = new comments();
	$result = $commentForms->getComments();
}
function registering(){
	$logins = new Login();
	$result = $logins->register();
		
		if ($result == "Nouveau utilisateur ajouté"){
			include "view/loginview.php" ;	
		}
		else {
			include "view/registerview.php";	
		}
}

function contactMessage($name, $email,  $object, $texte){
	$contact = new Contact();
	$affectedLines = $contact-> sendMessage($name, $email, $object, $texte);
		
		if ($affectedLines === true){
			require ("view/contactview2.php");	
		}
		else {
			include "view/contactview.php";	
		}
}

function submitComment($texte){

	$commentManager = new CommentManager();
	$comment = $commentManager -> submitComment($texte);
	$firstQuery = $commentManager -> getComments();
	
	require('view/commentView.php');
}
function getComments(){
	$commentManager = new CommentManager();
	$firstQuery = $commentManager -> getComments();
	
	require('view/commentView.php');
}

function deleteComments($idComment){
	$commentManager = new CommentManager();
	$comment = $commentManager -> deleteComments($idComment);
	if($comment =="deleted"){
		getComments();
	}else{
		echo "could not delete";
	}
	
}
function editTheComment($idComment,$nom,$points,$texte){
	$commentManager = new CommentManager();
	$comment = $commentManager -> editTheComment($idComment,$nom,$points,$texte);
	if($comment =="edited"){
		getComments();
	}else{
		echo "could not delete";
	}
}
function changeLikes($idComment, $point){
	$commentManager = new CommentManager();
	$comment = $commentManager -> changeLikes($idComment, $point);
	if($comment =="edited"){
		getComments();
	}else{
		echo "could not delete";
	}
}

function getContactPage(){
	require ('view/loggedinContactView.php');
}

function getCommentPage(){
	require ('view/commentView.php');
}

function getProductPage(){
	require ('view/product.php');
}

function showProduits(){
	$produits = new Produit();
	$result = $produits->getproduits();
	$result2 = $produits->getproduits();
	$result3 = $produits->getproduits();
	include "view/product.php";
	
}
function showProduit(){
	$produit = new Produit();
	$result = $produit->getProduit($_GET['id']);
	
	require "view/descriptionview.php";	
}

function showVisitors(){
	$counterManager = new CounterManager;
	$visitors = $counterManager -> addVisitor();	
	$_SESSION["visitors"] = $visitors;

}
?>