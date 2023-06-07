<?php session_start();

if (!isset($_SESSION['id'])) {
	header('Location:index.php');
}include "includes/entete.php";
echo "<h1>".$_SESSION['pseudo']."</h1>";
 ?>
 <style type="text/css">
li
{
list-style-type: none;
}
</style>

<ul>
	<li ><a href="users.php">Infos utilisateur</a></li>
	<li><a href="photos.php">Photos</a></li>
	<?php
	if ($_SESSION['id']<5) {
		?><br>
		<?php
	}
	?><br>
	<li ><a href="deco.php">Deconnexion</a></li>
</ul>
<?php
include "includes/pied.php";
?>