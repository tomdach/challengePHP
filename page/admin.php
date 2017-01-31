<?php

session_start();
include_once('connexion.php');

if (isset($_SESSION['connect'])) {
	# code...
if (isset($_GET["idok"])) {
	mysqli_query($cnx, "UPDATE form SET displayrepertory=1 WHERE 
		id=".$_GET["idok"]);
}

if (isset($_GET["idsup"])) {
	mysqli_query($cnx, "UPDATE form SET displayrepertory=0 WHERE 
		id=".$_GET["idsup"]);
}

if (isset($_GET["idsupdef"])) {
	mysqli_query($cnx, "DELETE FROM form WHERE 
		id=".$_GET["idsupdef"]);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<style type="text/css">
body{
	background-image: url(../img/slide3.jpg);
	background-size: 100%;

}

 #prout{
 	height: 600px;
 	width: 900px;
 	margin-left:15%;
 	border-radius: 10px;
 	margin-top: 2%;
 	background-color: #FEEDD7;
 	opacity: 0.8;
 	
	background-size: 100%;
	padding: 10px;

 }
 h1{
 	text-align: center;
 }
 input{
 	width: 50px;
 }
 #btn{
 	width: 60px;
 	margin-left: 45%;
 	text-align: center;
 }
 #police{
 	margin-left: 600px;	
 	margin-top:-525px;

 }
 #police2{
 	width: 100px;
 }
#navbf{
		margin-left: 600px;
		margin-top: 67px;
}

</style>

<a class="deco" href="logout.php">Déconnexion</a>
<br>
<a class="deco" href="../index.php">Retourne page principale</a>
<form method="post" action="couleur.php">

<div id="prout">
<h1>Table de commande</h1>
			<div>
				<h2>
					Titres
				</h2>
				code rgba (<input type="text" name="titres1">,<input type="text" name="titres2">,<input type="text" name="titres3">,<input type="text" name="titres4">);
			</div>
<br>
<br>
			<div>
				<h2>
					Navbar
				</h2>
				code rgba (<input type="text" name="navbar1">,<input type="text" name="navbar2">,<input type="text" name="navbar3">,<input type="text" name="navbar4">);
			</div>
<br>
<br>
			<div>
				<h2>
					urls
				</h2>
				code rgba (<input type="text" name="urls1">,<input type="text" name="urls2">,<input type="text" name="urls3">,<input type="text" name="urls4">);
			</div>
<br>
<br>
			<div>
				<h2>
					boutton
				</h2>
				code rgba (<input type="text" name="boutton1">,<input type="text" name="boutton2">,<input type="text" name="boutton3">,<input type="text" name="boutton4">)
			</div>
		    <br>	
			<br>
			<div>
				<input id="btn" type="submit" value="valider" name="submit">
			</div>

			<div id="police">
			<h2>
			 Police
			</h2>
				Police <select type="text" name="police" id="police2">
					<option>anton</option>
					<option>biter</option>
					<option>vt</option>
					
				</select>
			</div>
			<div id="navbf">
			 <h2>Position de la Navbar</h2>
					  
		  				<input type="checkbox" name="navb"  value=" navbar-fixed-top">
		 				 position fixe
					
			</div>

			


</div>

</form>

<title></title>
	<style type="text/css">
		
	th{
		border: 1px solid black;
	}
	td{
		border: 1px solid black;
	}
	tr{
		border: 1px solid black;
	}

	#img1{
		height: 200px;
		width: 200px;
	}
	table{
		margin-left: 350px;
		background-color: grey;
	}
	#taille{
		width: 100px;
	}



	</style>
</head>

<?php
echo"<table  method='post' action='contact.php' >";


$ress = mysqli_query($cnx,"SELECT * FROM form");
echo"<th>id</th> <th>pseudo</th> <th>prenom</th> <th>mess</th> <th>mail</th> <th>jeux</th> <th>anniv</th><th>img</th><th>valider</th><th>suprimé</th>  ";
while($data = mysqli_fetch_assoc($ress))
{
?>
  <tr id='tr1'>
	  <td><?= $data['id'] ?></td>
	  <td><?= $data['pseudo'] ?></td>
	  <td><?= $data['prenom'] ?></td>
	  <td><?= $data['mess'] ?></td>
	  <td><?= $data['mail'] ?></td>
	  <td><?= $data['jeux'] ?></td>
	  <td><?= $data['anniv'] ?></td>
	  <td><img id='img1' src='../img/<?= $data['img'] ?>'></td>
	  <td>
	  	<a href="?idok=<?= $data['id'] ?>"><button>Valider</button></a>
	  </td>
	  <td>
	  	<a href="?idsup=<?= $data['id'] ?>"><button>
	  		supprimer
	  	</button>
	  	</a>
	  	<a href="?idsupdef=<?= $data['id'] ?>">
	  	<button >
	  		supprimer DEF
	  	</button>
	  	</a>
	  </td>
  </tr>
<?php
}

echo"</table>";




echo ' <form method="post" action="admin.php">
       <label>Modifier un contact</label>
       <input type="text" name="mod" placeholder="ID">
       <input type="submit" name="modBtn">
       </form>';

       if (isset($_POST['modBtn'])) {

           $_SESSION["mod"] = $_POST['mod'];

       echo '<form method="post" id="taille" action="admin.php">
       <label>Modifier le pseudo</label>
       <input type="text" name="modPseudo" placeholder="Nouveau pseudo">
       <input type="submit" name="modPseudoBtn">
       </form>';

       echo '<form method="post" id="taille" action="admin.php">
       <label>Modifier le prenom</label>
       <input type="text" name="modPrenom" placeholder="Nouveau Prenom">
       <input type="submit" name="modPrenomBtn">
       </form>';
       echo '<form method="post" id="taille" action="admin.php">
       <label>Modifier l\'image</label>
       <input type="text" name="modImg" placeholder="Nom de l\'image">
       <input type="submit" name="modImgBtn">
       </form>';
       echo '<form method="post" id="taille" action="admin.php">
       <label>Modifier le Mail</label>
       <input type="text" name="modMail" placeholder="Nouveau Mail">
       <input type="submit" name="modMailBtn">
       </form>';
       echo '<form method="post" id="taille" action="admin.php">
       <label>Modifier les jeux</label>
       <input type="text" name="modJeux" placeholder="Nouveaux Jeux">
       <input type="submit" name="modJeuxBtn">
       </form>';
       echo '<form method="post" id="taille" action="admin.php">
       <label>Modifier la date d\'anniversaire</label>
       <input type="text" name="modDate" placeholder="Nouvelle date">
       <input type="submit" name="modDateBtn">
       </form>';

       }


       if (isset($_POST["modPseudoBtn"])) {
           mysqli_query($cnx, "UPDATE form SET pseudo='".$_POST['modPseudo']."' WHERE id='".$_SESSION['mod']."' ");
       }

       if (isset($_POST["modPrenomBtn"])) {
           mysqli_query($cnx, "UPDATE form SET prenom='".$_POST['modPrenom']."' WHERE id='".$_SESSION['mod']."' ");
       }

       if (isset($_POST["modImgBtn"])) {
           mysqli_query($cnx, "UPDATE form SET image='".$_POST['modImg']."' WHERE id='".$_SESSION['mod']."' ");
       }

       if (isset($_POST["modMailBtn"])) {
           mysqli_query($cnx, "UPDATE form SET mail='".$_POST['modMail']."' WHERE id='".$_SESSION['mod']."' ");
       }

       if (isset($_POST["modJeuxBtn"])) {
           mysqli_query($cnx, "UPDATE form SET jeux='".$_POST['modJeux']."' WHERE id='".$_SESSION['mod']."' ");
       }

       if (isset($_POST["modDateBtn"])) {
           mysqli_query($cnx, "UPDATE form SET anniv='".$_POST['modDate']."' WHERE id='".$_SESSION['mod']."' ");
       }



?>








</body>
</html>

<?php
}


?>