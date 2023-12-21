function validateLogin() {
  // Get values from input fields
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  // Check if both email and password are empty
  if (email === "" && password === "") {
    alert("Email and password are empty!");
    return false;
  } else {
    // Check if email is empty
    if (email === "") {
      alert("Email is empty!");
      return false;
    }
    // Check if password is empty
    if (password === "") {
      alert("Password is empty!");
      return false;
    }
  }

  // Get password input element and show password checkbox
  const passwordInput = document.getElementById("password");
  const showPasswordCheckbox = document.getElementById("show-password");

  // Add an event listener to the showPasswordCheckbox
  showPasswordCheckbox.addEventListener("change", () => {
    // Toggle password visibility based on checkbox state
    if (showPasswordCheckbox.checked) {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  });
}
