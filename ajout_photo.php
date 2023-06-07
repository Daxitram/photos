<?php
session_start();
include "includes/co.php";
include "includes/entete.php";
if (!isset($_SESSION['id'])){
	header('Location:index.php');
}
?>
<a href="./">Retour</a><br>
<h1>Ajouter une photo</h1>
<form method="post" enctype="multipart/form-data" action="">
<p>
<input type="file" name="fichier" size="30">
<input type="submit" name="upload" value="Uploader">
</p>
</form>
<?php
if( isset($_POST['upload']) ) // si formulaire soumis
{
    $content_dir = 'photos/'; // dossier où sera déplacé le fichier

    $tmp_file = $_FILES['fichier']['tmp_name'];

    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }
    if ($_FILES['fichier']['type'] == 'image/jpeg') { $extention = '.jpeg'; }
	if ($_FILES['fichier']['type'] == 'image/jpeg') { $extention = '.jpg'; }
	if ($_FILES['fichier']['type'] == 'image/png') { $extention = '.png'; }
	if ($_FILES['fichier']['type'] == 'image/gif') { $extention = '.gif'; }
	if ($_FILES['fichier']['type'] == 'image/bmp') { $extention = '.bmp'; }
	if ($_FILES['fichier']['type'] == 'image/jpg') { $extention = '.jpg'; }
	if ($_FILES['fichier']['type'] == 'image/ico') { $extention = '.ico'; }
	$d = date("d-m-Y-H-i-s");
	
    // on vérifie maintenant l'extension
    $type_file = $_FILES['fichier']['type'];

    if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') && !strstr($type_file, 'png') && !strstr($type_file, 'PNG') && !strstr($type_file, 'JPG') && !strstr($type_file, 'JPEG') && !strstr($type_file, 'BMP') && !strstr($type_file, 'GIF') && !strstr($type_file, 'SVG') && !strstr($type_file, 'svg') )
    {
        exit("Le fichier n'est pas une image");
    }

    // on copie le fichier dans le dossier de destination
     //$nom_fichier= $_FILES['fichier']['name'];
    $name_file=$_FILES['fichier']['name'];	 
$name_file = $d.$extention;
    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
    {
        exit("Impossible de copier le fichier dans $content_dir");
    }

//$name_file= date_timestamp_get().$extention;
    echo "Le fichier a bien été uploadé";
    $ajoutph= $db->query("INSERT INTO photo(idPhoto, nomPhoto, auteur, dateAjout) values(NULL, '".$name_file."', '".$_SESSION['id']."', NOW())");
}
               

?>