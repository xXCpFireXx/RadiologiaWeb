
    function cargarExamenes(consulta) {
        var select = document.getElementById('examen');
        fetch('consultas.php?consulta=' + consulta)
        .then(response => response.json())
        .then(data => {
            data.forEach(examen => {
                var option = document.createElement('option');
                option.value = examen.EXACOD;
                option.textContent = examen.EXANOM;
                select.appendChild(option);
            });
        })
        .catch(error => console.error('Error al obtener los exámenes:', error));
    }

    function mostrarPreparacion(consulta) {
        var seleccionado = document.getElementById('examen').value;
        fetch('consultas.php?consulta=' + consulta + '&exacod=' + seleccionado)
        .then(response => response.json())
        .then(data => {
            document.getElementById('resultado').value = data.DESEYPDES;
        })
        .catch(error => console.error('Error al obtener la preparación:', error));
    }


