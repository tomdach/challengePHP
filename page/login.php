<?php
session_start();
include_once("connexion.php");


$username = $_POST['username'];
$password = $_POST['password'];

$usr = "admin";

$pwd = "admin";

$username = mysqli_real_escape_string($cnx, $username); // Pour éviter le '#
$password = mysqli_real_escape_string($cnx, $password);

$usr = mysqli_query($cnx,"SELECT * FROM chall1 WHERE username='".$username."' AND password='".$password."'");

$data = mysqli_fetch_assoc($usr);

if (isset($data)) {
	$_SESSION['connect']=true;
	header("location:../index.php");
}
else {
	
$_SESSION['connect']=false;
header("location:../index.php");

}


// 

 













?>