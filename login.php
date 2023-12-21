<?php
session_start();

if (isset($_POST['Sign up'])) {

  $connection = mysqli_connect('localhost', 'id20775124_root', 'Mohcen_18112003', 'id20775124_base_client');
  if (!$connection) {
    echo ("Connection to client failed");
  } else {
    $email = mysqli_real_escape_string($connection, $_POST['Email']);
    $password = mysqli_real_escape_string($connection, $_POST['Password']);

    $sql = "SELECT * FROM Client WHERE Mail_Clt='$email' AND Mot_Clt='$password'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      $name = $row['Nom'];
      $fname = $row['Prénom'];
      $_SESSION['Email'] = $email;
      echo "<center><body style='background-color: #ecbfea;'><div style='border-radius:15cm; font-size: 24px; background-color: #763a95; padding: 20px;'>
        <p style='font-weight: bold;'>Login successful</p>
        <p>Hello $name $fname!</p>
        <a style='color: rgb(26, 164, 176);' href='index.html'>Go to home page</a>
      </div></center></body>";
      exit();
    } else {
      echo 'Your email or password is incorrect.';
      echo "<a href='login.html'>Return to login page</a>";
    }
  }
}
