<?php 
ini_set("display_erros",1);
 error_reporting(E_ALL);
session_start();
include_once("connexion.php");



$pseudo = $_POST['pseudo'];

$prenom = $_POST['prenom'];






$mail = $_POST['mail'];

$jeux = $_POST['jeux'];

$date = $_POST['date'];

$imgName = $_FILES['img']['name'];
$imgTmpName = $_FILES['img']['tmp_name'];
$imgType = $_FILES['img']['type'];
$mess = $_POST['mess'];

if ( preg_match("/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/", $date ) )
{
	$date= implode('-', array_reverse( explode("/", $date)));
$ok1 = true;
}else{
	$ok1 = false;
}


if (preg_match("#^[^0-9][a-zA-Z0-9]+$#", $pseudo))   //"#^[========>^<====== sa veux dire qu'il veux pas            0-9]#" 
{
$ok2 = true;
}else{
	$ok2 = false;
}

if (preg_match("#^[^0-9]+$#", $prenom)) 
{
$ok3 = true;
}else{
	$ok3 = false;
}

if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $mail)) 
{
$ok4 = true;
}else{
	$ok4 = false;
}


echo $ok1."<br>";
echo $ok2."<br>";
echo $ok3."<br>";
echo $ok4."<br>";

if ($ok1==true && $ok2==true && $ok3==true && $ok4==true) {
	 $res = mysqli_query($cnx, "INSERT INTO form (pseudo, prenom, mail, jeux, anniv, img, displayrepertory ,mess) VALUES 
		('".$pseudo."', '".$prenom."', '".$mail."', '".$jeux."', '".$date."','".$imgName."','0', '".$mess."' )");
	 $res2 = move_uploaded_file($imgTmpName, $_SERVER['DOCUMENT_ROOT'] . '/challengePHP/img/' . $imgName);

	 echo "y'a bon";
	   header("location:contact.php");
}
else{
	 header("location:contact.php");

}



















?>