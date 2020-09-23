<?php
require_once("model/model.php");


function connexionBD(){
    try
    {
        $bdd = mysqli_connect("localhost","root","","labranche");
        return $bdd;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }	
}

class Contact {
	
	public function sendMessage($name, $email, $object, $texte)
	{
			$db = new PDO('mysql:host=localhost;dbname=labranche;charset=utf8;', 'root', '');
			
			$requete= $db->prepare('INSERT INTO contact(nom, courriel, objetmessage, message) VALUES(?, ?, ?, ?)');
			$affectedLines = $requete->execute(array($name, $email, $object, $texte));

        return $affectedLines;
		
			
	}
	
}

class Login {
	
	public function getlogin()
	{
		if(isset($_POST["username"]) && isset($_POST["password"])){
			$username = $_POST['username'];
			$password = $_POST['password'];

			//Protection from injection
			$username = stripcslashes($username);
			$password = stripcslashes($password);

			$conn =mysqli_connect('localhost', 'root', '', 'labranche');
			$res= mysqli_query($conn,"SELECT username, password FROM usager WHERE username = '".$username."' AND  password = '".$password."'");
			$count  = mysqli_num_rows($res);
				if($count > 0 )
				{ 
					session_start();
					$_SESSION["user"] = $username;
					
					return "login";
				}else{
					return "Utilisateur invalide";
					}
		}
	}
	
	public function register()
	{
		if(isset($_POST["username"]) && isset($_POST["regpassword"])){
			
			$username = $_POST['username'];
			$password = $_POST['regpassword'];
			
			//Protection from injection
			$username = stripcslashes($username);
			$password = stripcslashes($password);
			
			$conn = connexionBD();
			$res= mysqli_query($conn,"SELECT username FROM usager WHERE username = '".$username."'");
			$count  = mysqli_num_rows($res);
			if($count > 0 )
			{ 
				return "Nom d'utilisateur existe déjà";
				
			}else{

				$query = "INSERT INTO usager (username, password) VALUES('$username', '$password')";
				$res= mysqli_query($conn,$query);
				return "Nouveau utilisateur ajouté";
				}
			}
	}
	
	public function logout() {
		session_start();
		session_destroy();
	}
}

class Produit{
	public function getProduits(){
	
	$conn = mysqli_connect("localhost","root","","labranche");
    if(!$conn){
			die("Connection failed: " .mysqli_connect_error());
		}
	$query = "SELECT * FROM produits ORDER BY nomProduits;";
	$result = $conn->query($query);
	
	return $result;
	}


    public function getProduit($prodId)
    {
		$query ='SELECT * FROM produits WHERE idProduits = ?';
		$conn = mysqli_connect("localhost","root","","labranche");
        $stmt = $conn->prepare($query); 
		$stmt->bind_param("i", $prodId);
		$stmt->execute();
		$result = $stmt->get_result();

        return $result;	
    }
}
class CommentManager
{
	
	public function submitComment($texte)
	{
		session_start();
		$conn =mysqli_connect('localhost', 'root', '', 'labranche');

		if(!$conn){
			die("Connection failed: " .mysqli_connect_error());
		}
		$nom = $_SESSION["user"];
		$sql = "INSERT INTO livredor (texte, points, nom) VALUES ('$texte', 0, '$nom')";

		$result = $conn->query($sql)or die($conn->error);

		
	}

	public function getComments()
	{
		if(!isset($_SESSION)) {
			session_start();
		}
		$conn =mysqli_connect('localhost', 'root', '', 'labranche');

		if(!$conn){
			die("Connection failed: " .mysqli_connect_error());
		}

		$sql = "SELECT * FROM livredor ORDER BY idComment DESC LIMIT 10";
		$result = $conn -> query($sql)or die($conn->error);
		return $result;

	}

	
	
	public function deleteComments($idComment)
	{
	
		$conn =mysqli_connect('localhost', 'root', '', 'labranche');

		if(!$conn){
			die("Connection failed: " .mysqli_connect_error());
		}
		$sql = "SELECT * FROM livredor WHERE idComment='$idComment'";
		$result = $conn->query($sql);
		if(mysqli_num_rows($result) == 1){
			if ($row = $result -> fetch_assoc()){
				$sql1 = "DELETE FROM livredor WHERE idComment ='$idComment'";
				$conn -> query($sql1);
				return "deleted";
			}
		}

	}

	public function editTheComment($idComment,$nom,$points,$texte)
	{
		$conn =mysqli_connect('localhost', 'root', '', 'labranche');

		if(!$conn){
			die("Connection failed: " .mysqli_connect_error());
		}
		$sql = "SELECT * FROM livredor WHERE idComment='$idComment'";
		$result = $conn->query($sql);
		if(mysqli_num_rows($result) == 1){
			if ($row = $result -> fetch_assoc()){
				$sql1 = "UPDATE livredor SET texte ='$texte' WHERE idComment ='$idComment'";
				$conn -> query($sql1);
				return "edited";
			}
		}
	}
	

	public function changeLikes($idComment, $point)
	{
		session_start();
		$conn =mysqli_connect('localhost', 'root', '', 'labranche');

		if(!$conn){
			die("Connection failed: " .mysqli_connect_error());
		}
		$sql = "SELECT * FROM livredor WHERE idComment='$idComment'";
		$result = $conn -> query($sql) or die($conn->error);;
		if(mysqli_num_rows($result) == 1){
			if ($row = $result -> fetch_assoc()){
				$sql1 = "UPDATE livredor SET points ='$point' WHERE idComment='$idComment'";
				$conn -> query($sql1);
				return "edited";
			}
		}

	}

}

	class CounterManager {
	public function addVisitor() {
	$conn =mysqli_connect('localhost', 'root', '', 'labranche');

	if(!$conn){
			die("Connection failed: " .mysqli_connect_error());
		}
	$visitorIp = $_SERVER['REMOTE_ADDR'];

	$query="SELECT * FROM counter where ipAddress = '$visitorIp'";
	$result=mysqli_query($conn,$query);
	$totalVisitors=mysqli_num_rows($result);
	if($totalVisitors<1){
		$query="INSERT INTO counter (ipAddress) values ('$visitorIp')";
		$result=mysqli_query($conn,$query);
	}

	$query="SELECT * FROM counter";
	$result=mysqli_query($conn,$query);
	$totalVisitors=mysqli_num_rows($result);

	return $totalVisitors;

	}
}
	
?>