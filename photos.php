<?php
session_start();
include "includes/co.php";
include "includes/entete.php";
if (!isset($_SESSION['id'])){
	header('Location:index.php');
}
?>
<h1>Voici mon site de partage de photos</h1>
<a href="ajout_photo.php">ajouter des photos</a>
<?php
$reqph=$db->query("SELECT * from photo INNER JOIN user on photo.auteur=user.id where auteur=".$_SESSION['id']." ORDER BY dateAjout desc ");
while($rowph=$reqph->fetch(PDO::FETCH_OBJ)){
	echo "<img src=photos/".$rowph->nomPhoto."><br>";
	}?>