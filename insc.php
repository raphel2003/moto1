<?php    
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $wilaya = $_POST['Wilaya'];
    $tel = $_POST['tel'];
    $adresse = $_POST['address'];
    $mot_passe = $_POST['mot_passe'];
    $sexe = $_POST['sexe'];
    $connexion =mysqli_connect("localhost","root","","moto");
    if (!$connexion) {
        echo("Échec de la connexion à la base de données : ");
    }
$result=mysqli_query($connexion,"INSERT INTO nv_compte(nom, prenom, age, wilaya, tel, adresse, mot_passe, sexe)
VALUES ('$nom', '$prenom', '$age', '$wilaya','$tel','$adresse', '$mot_passe', '$sexe')");
if($result)
{
    echo("le client $nom $prenom a ete ajoute avec succes .");
}
else{
echo("le client : $nom $prenom n est pas  ajoute .");}
mysqli_close($connexion);
?>


