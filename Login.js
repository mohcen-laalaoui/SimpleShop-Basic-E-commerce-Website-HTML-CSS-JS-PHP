function validateLogin() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (email === "" && password === "") {
    alert("Email and password are empty!");
    return false;
  } else {
    if (email === "") {
      alert("Email is empty!");
      return false;
    }
    if (password === "") {
      alert("Password is empty!");
      return false;
    }
  }

  const passwordInput = document.getElementById("password");
  showPasswordCheckbox.addEventListener("change", () => {
    if (showPasswordCheckbox.checked) {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  });
}
