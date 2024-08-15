
window.onload = function() {
  var popup = document.getElementById("popup-container");
  var closeButton = document.getElementsByClassName("close-button")[0];

  // Display the popup after 5 seconds
  setTimeout(function() {
    popup.style.display = "block";
  }, 5000);

  // Close the popup when the close button is clicked
  closeButton.onclick = function() {
    popup.style.display = "none";
  }

  // Close the popup when the user clicks outside of it
  window.onclick = function(event) {
    if (event.target == popup) {
      popup.style.display = "none";
    }
  }

  // Handle form submission
  var form = document.getElementById("contact-form");
  form.addEventListener("submit", function(event) {
    event.preventDefault();
    // Add your form submission logic here
    console.log("Form submitted!");
    popup.style.display = "none";
  });
}
