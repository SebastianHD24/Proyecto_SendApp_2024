const container = document.getElementById('sin-responder');
const container_r = document.getElementById('respondidos');
const historial = document.getElementById('Historial');
const salir = document.getElementById('volver');
const mensaje = document.getElementById('mensaje');
const mensaje1 = document.getElementById('mensaje1');

function verificar() {
    console.log("hola");
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Administrador/consultar.php')
        .then(response => response.json())
        .then(jsonData => {
            if (jsonData.success == "1") {
                container.style.display = "block";
                mensaje.style.display = "none";
            } else if (jsonData.success == "2") {
                container.style.display = "none";
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
        document.querySelector('#contenedor-popup #con_respuesta tbody').innerHTML = '';

        // Iterar sobre los usuarios y agregarlos a las tablas correspondientes
        data.forEach(usuario => {
            if (usuario.respuesta_pqrs === null) {
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
            } else {
                document.querySelector('#contenedor-popup #con_respuesta tbody').innerHTML += `
                    <tr>
                        <td>${usuario.id_peticion}</td>
                        <td>${usuario.nombres}</td>
                        <td>${usuario.apellidos}</td>
                        <td>${usuario.documento_identidad}</td>
                        <td>${usuario.fecha_solicitud}</td>
                        <td>${usuario.fecha_respuesta}</td>
                        <td>${usuario.tipo_pqrs}</td>
                        <td>${usuario.descripcion}</td>
                        <td>${usuario.respuesta_pqrs}</td>
                    </tr>`;
            }
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
    })
    .catch(error => console.error("Error al obtener datos: " + error));
}
ver();

function enviarIdPQR(id) {
    document.getElementById('id_pqr1').value = id;
}

function mostrarHistorial(){
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Administrador/mostrarConsulta.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(usuario => {
            if (usuario.respuesta_pqrs != null) {
                container_r.style.display = "block";
                mensaje1.style.display = "none";
            } else {
                container_r.style.display = "none";
            }
        })
    })
}

function verHistorial(){
    mostrarHistorial();
    historial.style.display = "none";
    salir.style.display = "block";
    mensaje.style.display = "none";
    mensaje1.style.display = "block";
    container.style.display = "none";
}
function ocultarHistorial(){
    location.reload();
}