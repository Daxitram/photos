<!doctype html>
<?php 
/*include "includes/co.php";
 ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
  </head>
  <body>
    <form class="border border-light p-5" style="margin-left: 20%;margin-right: 20%" method="post">

    <p class="h4 mb-4 text-center">Sign up</p>

    <label for="textInput">Pseudo</label>
    <input type="text" id="textInput" class="form-control mb-4" placeholder="Pseudo" name="pseudo">

    <label for="passwdInput">Password</label>
    <input type="password" id="passwdInput" class="form-control mb-4" placeholder="Password" name="password">
    <input type="password" id="passwdInput" class="form-control mb-4" placeholder="Confirm Password" name="cpassword">

    <label for="emailInput">Email</label>
    <input type="email" id="emailInput" class="form-control mb-4" placeholder="Email" name="mail">

    <button class="btn btn-primary my-4 btn-block" type="submit" name="submit">Sign up</button>
</form>
<?php 
if (isset($_POST['submit'])) {
  if (!empty($_POST['pseudo'])&& !empty($_POST['password'])&& !empty($_POST['cpassword'])&& !empty($_POST['mail']) && $_POST['password']==$_POST['cpassword']) {
    $reqpseudo=$db->query('SELECT * FROM user');
    $c=0;
    while ($rowpseudo=$reqpseudo->fetch(PDO::FETCH_OBJ)) {
      if ($rowpseudo->pseudo==$_POST['pseudo']) {
        $c++;
      }
    }
    if ($c==0) {
      $reqaj=$db->query("INSERT into user(id, pseudo, mdp, mail, dateIns) VALUES (NULL, '".$_POST['pseudo']."', '".md5($_POST['password'])."', '".$_POST['mail']."', NOW() )");
      header("location:index.php");
    }else{
      echo "<p>non</p>";
    }
  }
}*/
 ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>