<?php
session_start();
include "includes/co.php";
if (isset($_POST['sub'])) {
$pseudo = $_POST['pseudo'];
$pass = $_POST['pass'];
  if (empty($_POST['pseudo']) || empty($_POST['pseudo'])) {
  	header('location:index.php');
  }
if (!empty($pseudo) && !empty($pass)) {
    $req = $db->prepare('SELECT id FROM user WHERE pseudo = :pseudo AND mdp = :pass');
    $req->execute(array('pseudo' => $_POST['pseudo'],'pass' => md5($_POST['pass'])));
    $resultat = $req->fetch();
    if (!$resultat) {
        echo '<div class="error-login">Vos identifiants sont incorrects !</div>';
    }
    else {
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['co']='ok';
        
        header('location:menu.php');
    }
}} else{
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<br>

 <p class="h4 mb-4 text-center">Login</p>
<form method="POST" class="border border-light p-5" style="margin-left: 20%;margin-right: 20%">
	<label for="textInput">Pseudo</label>
	<input type="text" id="textInput" class="form-control mb-4" name="pseudo" placeholder="pseudo">
	<label for="passwdInput">Password</label>
	<input type="password" id="passwdInput" class="form-control mb-4" name="pass" placeholder="password"> 
	<input class="btn btn-primary my-4 btn-block" type="submit" name="sub">
</form><br><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
//<a href="inscr.php">s'inscrire</a>
}
if (isset($_SESSION['id']) && isset($_SESSION['pseudo'])) {
	if (!empty($_SESSION['id']) && !empty($_SESSION['pseudo'])) {
		header('location:menu.php');
	}
	
}
?>