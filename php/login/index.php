<?php
session_start();

$host = "db.ist.utl.pt";
include('../../.config.php');
$user = $CONFIG['istid'];
$password = $CONFIG['pass'];
$dbname = $user;

$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Ola";
if(isset($_SESSION['user']) && $_SESSION['user']!=''){header("Location:../home");}

$email=$_POST["mail"];
$pass=$_POST['pass'];
echo "Tudo bem";

echo "isset: " . isset($_POST) . "\n";
echo "email: " . $email . "";
echo "pass: " . $pass . "";
echo var_dump($_POST);

if(isset($_POST) && $email!='' && $pass!=''){
 $sql=$db->prepare("SELECT id,password FROM users WHERE username=?");
 $sql->execute(array($email));
echo "dentro procura na base de dados";
 while($r=$sql->fetch()){
  $p=$r['password'];
  $id=$r['id'];
 }

 //$hash = password_hash($password, PASSWORD_BCRYPT);
echo "antes verificacao da pass";
 if(password_verify($pass, $p)){
  $_SESSION['user']=$id;
  header("Location:../home");
 }else{
  echo "<h2>Username/Password is Incorrect.</h2>";
 }
}
?>
