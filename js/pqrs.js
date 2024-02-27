// Add event listener to the form submission
document.getElementById("ContactUsForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Perform an AJAX request to submit the form
    var xhr = new XMLHttpRequest();
    xhr.open("POST", this.action);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {          
          document.getElementById("ContactUsForm").reset(); //Clear the form fields
        } else {
          // Error response
          showModal("Error: Something went wrong."); // Show a generic error message
        }
      }
    };
        xhr.send(new FormData(this));
    });
