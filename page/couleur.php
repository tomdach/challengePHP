<?php
session_start();
include_once("connexion.php");



// color:rgba(120,120,120,0.7);



// titre
$titres1 = $_POST['titres1'];
$titres2 = $_POST['titres2'];
$titres3 = $_POST['titres3'];
$titres4 = $_POST['titres4'];
$titres = "rgba(".$titres1.",".$titres2.",".$titres3.",".$titres4.")";



// la navbar
$navbar1 = $_POST['navbar1'];
$navbar2 = $_POST['navbar2'];
$navbar3 = $_POST['navbar3'];
$navbar4 = $_POST['navbar4'];
$navbar = "rgba(".$navbar1.",".$navbar2.",".$navbar3.",".$navbar4.")";

	

// url
$urls1 = $_POST['urls1'];
$urls2 = $_POST['urls2'];
$urls3 = $_POST['urls3'];
$urls4 = $_POST['urls4'];
$urls = "rgba(".$urls1.",".$urls2.",".$urls3.",".$urls4.")";



// bouton
$boutton1 = $_POST['boutton1'];
$boutton2 = $_POST['boutton2'];
$boutton3 = $_POST['boutton3'];
$boutton4 = $_POST['boutton4'];
$boutton = "rgba(".$boutton1.",".$boutton2.",".$boutton3.",".$boutton4.")";


//police
$police = $_POST['police'];

$navb = $_POST['navb'];




$res = mysqli_query($cnx,"UPDATE couleur SET titre='".$titres."', navbar='".$navbar."', urls='".$urls."', boutton='".$boutton."', police='".$police."' ,navb='".$navb."'  WHERE id ='1' ");






header("location:admin.php");


?>