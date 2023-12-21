<?php
session_start();
if(isset($_SESSION['id'], $_SESSION['Prénom'], $_SESSION['Nom'])){
    $conn = mysqli_connect('localhost', 'id20775124_root', 'Mohcen_18112003', 'id20775124_base_client');
    $vend = $_POST['Vendeur'];
    $prix = $_POST['Prix'];
    $reference = $_POST['Réference'];
    $quantite = $_POST['Quantité'];
    $coul = "";
    foreach ($_POST['Couleur'] as $val){
        $coul = $coul . ' ' . $val;
    }
    $ajout = mysqli_query($conn, "INSERT INTO Commande_produit(Id_Clt, Vedeur_prod, Prix_prod, Ref_prod, Qant_prod, Colr_prod) 
    VALUES($id, $vend, $prix, $reference, $quantite, $coul)");
}
else{
    echo("<p style='color:green;'>AUTHENTIFICATION REUSSIE!</p><br>");
    echo("<a href='logIn.html'>Confirmer votre authentification</a>");
}
?>
