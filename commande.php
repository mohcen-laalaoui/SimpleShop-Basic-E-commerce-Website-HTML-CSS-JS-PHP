<?php
// Start a session to manage user authentication
session_start();

// Check if user is authenticated (session variables exist)
if(isset($_SESSION['id'], $_SESSION['First_Name'], $_SESSION['Last_Name'])){
    // Establish a connection to the database
    $connection = mysqli_connect('localhost', 'id20775124_root', 'Mohcen_18112003', 'id20775124_base_client');

    // Retrieve data from the form
    $seller = $_POST['Seller'];
    $price = $_POST['Price'];
    $reference = $_POST['Reference'];
    $quantity = $_POST['Quantity'];
    $color = "";

    // Loop through the selected colors
    foreach ($_POST['Color'] as $val){
        $color = $color . ' ' . $val;
    }

    // Insert data into the database
    $addition = mysqli_query($connection, "INSERT INTO Order_Product(Client_Id, Seller, Price, Reference, Quantity, Color) 
    VALUES($id, $seller, $price, $reference, $quantity, $color)");
}
else{
    // Display a message if authentication is not successful
    echo("<p style='color:green;'>AUTHENTICATION SUCCESSFUL!</p><br>");
    echo("<a href='logIn.html'>Confirm your authentication</a>");
}
?>
