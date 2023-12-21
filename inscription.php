<?php
$connection = mysqli_connect('localhost', 'id20775124_root', 'Mohcen_18112003', 'id20775124_base_client');

if (!$connection) {
    echo ("Connection to Base_client failed");
}

if (isset($_POST['wilaya'])) {
    $wilaya = $_POST['wilaya'];
    // Rest of your code
} else {
    echo ("Wilaya is not valid");
}

// Retrieve data from the registration form
$nom = $_POST['Nom'];
$prenom = $_POST['Prénom'];
$age = $_POST['Age'];
$wilaya = $_POST['wilaya'];
$tel = $_POST['Téléphone'];
$email = $_POST['Email'];
$adr = $_POST['Adress'];
$pass = $_POST['Password'];
$pass1 = $_POST['Confirm_password'];
$sex = $_POST['Sexe'];

// Send data to the server

$addition = mysqli_query($connection, "INSERT INTO Client(No_Clt, Pno_Clt, Age_Clt, Wi_Clt, Tel_Clt, Mail_Clt, Adr_Clt, Mot_Clt, Sexe_Clt)
VALUES('$nom','$prenom','$age','$wilaya','$tel','$email','$adr','$pass','$sex')");

if (mysqli_affected_rows($connection) == 1) {
    echo ("Client $nom $prenom has been successfully added.");
}

$a = $_POST('name');
