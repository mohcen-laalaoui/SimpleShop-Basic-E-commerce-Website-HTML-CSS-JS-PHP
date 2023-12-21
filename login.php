<?php
// Start a session to manage user authentication
session_start();

// Check if the "Sign up" form is submitted
if (isset($_POST['Sign up'])) {

  // Establish a connection to the database
  $connection = mysqli_connect('localhost', 'id20775124_root', 'Mohcen_18112003', 'id20775124_base_client');

  // Check if the connection to the database is successful
  if (!$connection) {
    echo ("Connection to client failed");
  } else {
    // Escape and retrieve user input for email and password
    $email = mysqli_real_escape_string($connection, $_POST['Email']);
    $password = mysqli_real_escape_string($connection, $_POST['Password']);

    // Query to check if the entered email and password exist in the database
    $sql = "SELECT * FROM Client WHERE Mail_Clt='$email' AND Mot_Clt='$password'";
    $result = mysqli_query($connection, $sql);

    // Check if there is a match in the database
    if (mysqli_num_rows($result) == 1) {
      // Fetch user information
      $row = mysqli_fetch_assoc($result);
      $name = $row['Nom'];
      $fname = $row['Prénom'];

      // Set email session variable for user authentication
      $_SESSION['Email'] = $email;

      // Display a success message and user information
      echo "<center><body style='background-color: #ecbfea;'><div style='border-radius:15cm; font-size: 24px; background-color: #763a95; padding: 20px;'>
        <p style='font-weight: bold;'>Login successful</p>
        <p>Hello $name $fname!</p>
        <a style='color: rgb(26, 164, 176);' href='index.html'>Go to home page</a>
      </div></center></body>";

      // Exit the script after successful login
      exit();
    } else {
      // Display an error message if login fails
      echo 'Your email or password is incorrect.';
      echo "<a href='login.html'>Return to login page</a>";
    }
  }
}
?>
