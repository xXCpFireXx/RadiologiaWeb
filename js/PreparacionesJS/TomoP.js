function cargarExamenes() {
    var select = document.getElementById('examen');
    fetch('../../php/PreparacionesPHP/cargar_examenes_tomo.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(examen => {
            var option = document.createElement('option');
            option.value = examen.EXACOD;
            option.textContent = examen.EXANOM;
            select.appendChild(option);
        });
        // Después de cargar los exámenes, puedes obtener la preparación del primer examen automáticamente
        obtenerPreparacion();
    })
    .catch(error => console.error('Error al cargar los exámenes:', error));
}

function obtenerPreparacion() {
    var examenSeleccionado = document.getElementById('examen').value;
    // Realizar una solicitud AJAX para obtener la preparación del examen seleccionado desde PHP
    // Reemplaza 'consultar_preparacion.php' con la ruta correcta de tu archivo PHP
    fetch('../../php/PreparacionesPHP/consultar_preparacion.php?examen=' + examenSeleccionado)
    .then(response => response.json())
    .then(data => {
        document.getElementById('resultado').value = data.DESEYPDES;
    })
    .catch(error => console.error('Error al obtener la preparación:', error));
}

// Llamar a la función al cargar la página para cargar los exámenes
document.addEventListener('DOMContentLoaded', function() {
    cargarExamenes();
});
