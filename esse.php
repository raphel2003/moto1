<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "moto");
if(isset($_POST["emailaddress"]) && isset($_POST["mot_passe"])){
    $email = $_POST['emailaddress'];
    $motpass = $_POST['mot_passe'];
    $q = "SELECT * FROM nv_compte WHERE adresse='$email' AND mot_passe='$motpass'";
    $result1 = mysqli_query($link, $q);
    $n = mysqli_num_rows($result1);
    if($n > 0){
        $info_client = mysqli_fetch_row($result1);
        $_SESSION['id'] = $info_client[0];
        $_SESSION['nom'] = $info_client[1];
        $_SESSION['prenom'] = $info_client[2];
        echo "<p>Bonjour $info_client[1] $info_client[2] </p>";
        echo"<p>  vous pouvez lancez votre comande</p><BR><a href=\"AAmomnlh motos.html\">ICI</a>";
    } else {
        echo "<p>Vérifiez votre email ou mot de passe SVP!</p>";
    }
} else {
    echo "<p>Les champs email et mot de passe ne sont pas définis.</p>";
}
?>
