//Las siguientes líneas de código, permite enviar las respuestas del formulario de PQRS a una hoja de cálculo de Google

//Añadir Un agente de escucha de eventos (event listener) al envío del formulario
document.getElementById("ContactUsForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evita el envío de respuestas del formulario que estan por defecto


     // Validar reCAPTCHA
     var recaptchaResponse = grecaptcha.getResponse();
     if (!recaptchaResponse) {
         showModal("Por favor, completa el reCAPTCHA.");
         return; // Detener el envío del formulario si no se ha completado reCAPTCHA
     }
 
    // Realiza una petición AJAX para enviar el formulario
    var xhr = new XMLHttpRequest();
    xhr.open("POST", this.action);
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {          
          document.getElementById("ContactUsForm").reset(); //Limpia los campos del formulario
          grecaptcha.reset(); // Reinicia el reCAPTCHA
        } else {
          // Mensaje de error
          showModal("Error: Something went wrong."); // Muestra un mensaje de error
        }
      }
    };
        xhr.send(new FormData(this));
    });
