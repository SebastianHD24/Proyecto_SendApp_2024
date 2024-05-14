const container = document.getElementById('sin-responder');
const container_r = document.getElementById('respondidos');
const historial = document.getElementById('Historial');
const salir = document.getElementById('volver');
const mensaje = document.getElementById('mensaje');
const mensaje1 = document.getElementById('mensaje1');
const selector = document.getElementById('selector');

function verificar() {
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Administrador/consultar.php')
        .then(response => response.json())
        .then(jsonData => {
            if (jsonData.success == "1") {
                container.style.display = "block";
            } else if (jsonData.success == "2") {
                container.style.display = "none";
                mensaje.style.display = "block";
                historial.style.display = "block";
            }
        })
        .catch(error => console.error('Error fetching data:', error));
}

function cargarInicio(){
    verificar();
}
cargarInicio();

function ver() {
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Administrador/mostrarConsulta.php')
    .then(response => response.json())
    .then(data => {
        // Limpiar las tablas antes de agregar nuevos datos
        document.querySelector('#contenedor-popup #sin_respuesta tbody').innerHTML = '';

        // Iterar sobre los usuarios y agregarlos a las tablas correspondientes
        data.forEach(usuario => {
            document.querySelector('#contenedor-popup #sin_respuesta tbody').innerHTML += `
                <tr>
                    <td>${usuario.id_peticion}</td>
                    <td>${usuario.nombres}</td>
                    <td>${usuario.apellidos}</td>
                    <td>${usuario.documento_identidad}</td>
                    <td>${usuario.fecha_solicitud}</td>
                    <td>${usuario.tipo_pqrs}</td>
                    <td>${usuario.descripcion}</td>
                    <td>
                        <form action="../../../../Proyecto_SendApp_2024/interfaces/Administrador/responderPQR.php" method="POST" class="form_respuesta" id="miFormulario">
                            <input type="hidden" name="fecha_respuesta" id="fecha_S">
                            <input type="hidden" name="id_peticion" id="id_pqr1">
                            <input type="text" name="respuesta_pqrs">
                            <input type="submit" value="Responder" onclick="enviarIdPQR(${usuario.id_peticion});">
                        </form>
                    </td>
                    </tr>`;
        });

        // Agregar el evento de envío del formulario
        document.querySelectorAll('.form_respuesta').forEach(form => {
            form.addEventListener('submit', e => {
                e.preventDefault();
                let formData = new FormData(form);
                fetch(form.getAttribute('action'), {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(jsonData => {
                    if (jsonData.success == 3 || jsonData.success == 4) {
                        ver();
                        location.reload();
                    }
                })
                .catch(error => console.error("Error en la solicitud fetch: " + error));
            });
        });
        historial.style.display = "block";
    })
    .catch(error => console.error("Error al obtener datos: " + error));
}
ver();

function enviarIdPQR(id) {
    document.getElementById('id_pqr1').value = id;
}

function mostrarHistorial(){
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Administrador/mostrarHistorial.php')
    .then(response => response.json())
    .then(data => {
        if (data.length === 0) {
            // Si la lista está vacía, puedes hacer lo que necesites, como mostrar un mensaje
            container_r.style.display = "none";
            salir.style.display = "block";
            mensaje1.style.display = "block";
        } else {
            // Si hay elementos en la lista, puedes hacer otras operaciones
            container_r.style.display = "block";
        }
    })
    .catch(error => console.error("Error al obtener datos: " + error));
}

function verHistorial(){
    mostrarHistorial();
    historial.style.display = "none";
    mensaje.style.display = "none";
    container.style.display = "none";
    selector.style.display = "block";

    fetch('../../../../Proyecto_SendApp_2024/interfaces/Administrador/mostrarHistorial.php')
    .then(response => response.json())
    .then(data => {
        // Limpiar las tablas antes de agregar nuevos datos
        document.querySelector('#contenedor-popup #con_respuesta tbody').innerHTML = '';

        // Iterar sobre los usuarios y agregarlos a las tablas correspondientes
        data.forEach(historial => {
            document.querySelector('#contenedor-popup #con_respuesta tbody').innerHTML += `
                <tr>
                    <td>${historial.id_peticion}</td>
                    <td>${historial.nombres}</td>
                    <td>${historial.apellidos}</td>
                    <td>${historial.documento_identidad}</td>
                    <td>${historial.fecha_solicitud}</td>
                    <td>${historial.fecha_respuesta}</td>
                    <td>${historial.tipo_pqrs}</td>
                    <td>${historial.descripcion}</td>
                    <td>${historial.respuesta_pqrs}</td>
                </tr>`;
        });
        salir.style.display = "block";
    })
    .catch(error => console.error("Error al obtener datos: " + error));
}
function ocultarHistorial(){
    location.reload();
}