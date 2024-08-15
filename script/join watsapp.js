
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
    }

    function joinWhatsAppGroup() {
      // Replace with the actual WhatsApp group link or number
      window.open("https://chat.whatsapp.com/YourWhatsAppGroupLink", "_blank");
      document.getElementById("popup-container").style.display = "none";
    }
  