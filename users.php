<?php session_start();
include "includes/co.php";
$requse=$db->query("SELECT * FROM user WHERE id='".$_SESSION['id']."'");
$rowuse=$requse->fetch(PDO::FETCH_OBJ);
echo $rowuse->pseudo." ".$rowuse->mail;
if (!isset($_SESSION['id'])) {
	header('Location:index.php');
}
 ?>