//Las siguientes líneas de código, permite enviar las respuestas del formulario de PQRS a una hoja de cálculo de Google
// Función que se ejecuta al hacer clic en el botón de envío
function onSubmit(event) {
    event.preventDefault(); // Evita el envío predeterminado del formulario
    var captchaResponse = grecaptcha.getResponse();
    if (!captchaResponse) {
        showToast("Por favor, completa el reCAPTCHA.", "error");
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", document.getElementById("ContactUsForm").action);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                document.getElementById("ContactUsForm").reset();
                grecaptcha.reset();
                showToast("PQRS enviada correctamente.", "success");
            } else {
                showToast("Error: Algo salió mal.", "error");
            }
        }
    };
    xhr.send(new FormData(document.getElementById("ContactUsForm")), "g-recaptcha-response=" + captchaResponse);
}

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

