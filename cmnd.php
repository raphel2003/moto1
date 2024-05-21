<?php    
    $nom = $_POST['product_name'];
    $couleur = $_POST['couleur'];
    $opt = $_POST['option'];
    $qnt = $_POST['qnt'];
   
    $connexion =mysqli_connect("localhost","root","","moto");
    if (!$connexion) {
        echo("Échec de la connexion à la base de données : ");
    }			
$result=mysqli_query($connexion,"INSERT INTO comande(namec, optionc, couleur, qnt)
VALUES ('$nom', '$couleur', '$opt','$qnt')");
if($result)
{
    echo("la COMANDE a ete ajoute avec succes .");
}
else{
echo(" n est pas  ajoute .");}
mysqli_close($connexion);
?>


