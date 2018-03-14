<?php
session_start();

$host = "db.ist.utl.pt";
include('../../../.config.php');
$user = $CONFIG['istid'];
$password = $CONFIG['pass'];
$dbname = $user;

$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_SESSION['user']) && $_SESSION['user']!=''){header("Location:../../../php/home");}

$email=$_POST['mail'];
$password=$_POST['pass'];




if(isset($_POST) && $email!='' && $password!=''){
 $sql=$db->prepare("SELECT id,password FROM users WHERE username=?");
 $sql->execute(array($email));
 $nrows = $sql->rowCount();
 
 /* New user */
 if($nrows==0){
 	$hash = password_hash($password, PASSWORD_DEFAULT);
 	$stmt = $db->prepare("INSERT INTO users(username, password) VALUES(:username, :password)");
	$stmt->execute(array(':username' => $email, ':password' => $hash));
	header("Location:../../../");
 }
 else{
 	echo "<h2>Username already exists.</h2>";
 }
  
 }

?>