function Validation_infos() {
  // Get values from input fields
  var firstName = document.getElementById("nom").value;
  var lastName = document.getElementById("prenom").value;
  var age = document.getElementById("age").value;
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confirm_passwor").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("tele").value;
  var gender = document.querySelector('input[name="Sexe"]:checked').value;
  var region = document.getElementById("wilaya").value;

  // Check if required fields are empty
  if (firstName === "" || lastName === "" || email === "") {
    alert("Please fill in all required fields (First Name, Last Name, Email).");
    return false;
  }

  // Check if age is within a valid range
  if (age === "") {
    alert("Your age is empty");
    return false;
  } else if (age < 17 || age > 100) {
    alert("Your age should be between 17 and 100 years.");
    return false;
  }

  // Check if the phone number is valid
  if (
    (isNaN(phone) && phone.length !== 9) ||
    (phone.length !== 9 && phone.length !== 10)
  ) {
    alert(
      "The phone number must contain 9 digits for a landline and 10 digits for a mobile phone."
    );
    return false;
  }

  // Check if passwords match and meet length requirements
  if (password === "" || confirmPassword === "") {
    alert("Please fill in both password and confirm password fields.");
    return false;
  } else if (password.length < 8 || confirmPassword.length < 8) {
    alert("Password must be at least 8 characters long.");
    return false;
  } else if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return false;
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

  // Display region and gender information
  alert("Region: " + region + "\nGender: " + gender);

  // Validation successful
  return true;
}
