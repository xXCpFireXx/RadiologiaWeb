//Las siguientes líneas de código, permite enviar las respuestas del formulario de PQRS a una hoja de cálculo de Google

document.getElementById("ContactUsForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Evita el envío de respuestas del formulario que están por defecto

  // Validar reCAPTCHA
  var recaptchaResponse = grecaptcha.getResponse();
  if (!recaptchaResponse) {
      showToast("Por favor, completa el reCAPTCHA.", "error");
      return; // Detener el envío del formulario si no se ha completado reCAPTCHA
  }

  // Realiza una petición AJAX para enviar el formulario
  var xhr = new XMLHttpRequest();
  xhr.open("POST", this.action);
  xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              document.getElementById("ContactUsForm").reset(); // Limpia los campos del formulario
              grecaptcha.reset(); // Reinicia el reCAPTCHA
              showToast("PQRS enviada correctamente.", "success"); // Muestra notificación de éxito
          } else {
              // Mensaje de error
              showToast("Error: Algo salió mal.", "error"); // Muestra notificación de error
          }
      }
  };
  xhr.send(new FormData(this));
});

// Función para mostrar notificaciones Toastify
function showToast(message, type) {
  if (type === "success") {
      Toastify({
          text: message,
          duration: 3000,
          backgroundColor: "green",
      }).showToast();
  } else if (type === "error") {
      Toastify({
          text: message,
          duration: 3000,
          backgroundColor: "red",
      }).showToast();
  }
}
