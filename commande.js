function validateOrder() {
  var selectedColor = document.getElementsByName("Color: ");
  var selectedQuantity = document.getElementsByName("Quantity")[0].value;

  var chosenColor = "";
  /*for (var i = 0; i < selectedColor.length; i++) {
    if (selectedColor[i].checked) {
      chosenColor += selectedColor[i].value + ", ";
    }
  }*/

  // If no color is selected, assign a default value
  if (chosenColor === "") {
    alert("Select a color!");
    return false;
  }

  // If no quantity is selected, assign a default value
  if (selectedQuantity === "Quantity") {
    selectedQuantity = null;
  }

  // Send data to the PHP script if at least one color and one quantity are selected
  if (chosenColor !== null && selectedQuantity !== null) {
    alert("You chose the color: " + chosenColor);
    alert("You chose the quantity: " + selectedQuantity);

    // Send data to the PHP script here...
  } else {
    alert("Please select a color and a quantity.");
    return false;
  }
}
