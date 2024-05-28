const container = document.getElementById('sin-responder');
const container_r = document.getElementById('respondidos');
const historial = document.getElementById('Historial');
const salir = document.getElementById('volver');
const mensaje = document.getElementById('mensaje');
const mensaje1 = document.getElementById('mensaje1');
const form = document.getElementById('formulario_notificaciones');
const formCitas = document.getElementById('formulario_citas');

console.log("Que esta pasando");

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
            let rol;
            if (usuario.id_rol == 3) {
                rol = 'Aprendiz';
            } else if (usuario.id_rol == 2) {
                rol = 'Funcionario';
            }
            document.querySelector('#contenedor-popup #sin_respuesta tbody').innerHTML += `
                <tr>
                    <td>${usuario.id_peticion}</td>
                    <td>${usuario.nombres}</td>
                    <td>${usuario.apellidos}</td>
                    <td>${rol}</td>
                    <td>${usuario.documento_identidad}</td>
                    <td>${usuario.fecha_solicitud}</td>
                    <td>${usuario.tipo_pqrs}</td>
                    <td>${usuario.descripcion}</td>
                    <td>
                        <form action="../../../../Proyecto_SendApp_2024/interfaces/Administrador/responderPQR.php" method="POST" class="form_respuesta" id="miFormulario">
                            <input type="hidden" name="fecha_respuesta" id="fecha_S">
                            <input type="hidden" name="id_peticion" id="id_pqr1">
                            <textarea type="text" name="respuesta_pqrs" class="Responder" rows="4" cols="80"></textarea>
                            <button type="submit" value="Responder" onclick="enviarIdPQR(${usuario.id_peticion});" class = "btnResponder" id = "btnEnviar">Responder</button>
                        </form>
                    </td>
                    </tr>
                    <div class="myModal" id="myModal">
                        <div class="confirmacion" id="confirmacion">
                            <p>Enviada con éxito</p>
                            <img src="../../../../Proyecto_SendApp_2024/bases/mainInterfaz/Usuario-img/senal-aprobada.png" alt="imagen de confirmacion del envio de la pqrs">
                        </div>
                    </div>`;
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
                    } else if (jsonData.success == 5){
                        alert("Por favor envía una respuesta");
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
    let modal = document.getElementById("myModal");
    modal.style.display = "block";
        setTimeout(function () {
            window.location.href = "../../interfaces/Usuario/usuarioSesion.php"; 
        }, 3000);
    };

function mostrarHistorial(){
    fetch('../../../../Proyecto_SendApp_2024/interfaces/Administrador/mostrarHistorial.php')
    .then(response => response.json())
    .then(data => {
        if (data.length === 0) {
            // Si la lista está vacía, puedes hacer lo que necesites, como mostrar un mensaje
            container_r.style.display = "none";
            salir.style.display = "block";
            mensaje1.style.display = "block";
            form.style.display = "none"
        } else {
            // Si hay elementos en la lista, puedes hacer otras operaciones
            container_r.style.display = "block";
            form.style.display = "block";
        }
    })
    .catch(error => console.error("Error al obtener datos: " + error));
}

function verHistorial(){
    mostrarHistorial();
    historial.style.display = "none";
    mensaje.style.display = "none";
    container.style.display = "none";

    fetch('../../../../Proyecto_SendApp_2024/interfaces/Administrador/mostrarHistorial.php')
    .then(response => response.json())
    .then(data => {
        // Limpiar las tablas antes de agregar nuevos datos
        document.querySelector('#contenedor-popup #con_respuesta tbody').innerHTML = '';

        // Iterar sobre los usuarios y agregarlos a las tablas correspondientes
        data.forEach(historial => {
            let rol = "";
            if (historial.id_rol == 3) {
                rol = "Aprendiz";
            } else if (historial.id_rol == 2) {
                rol = "Funcionario";
            }
            document.querySelector('#contenedor-popup #con_respuesta tbody').innerHTML += `
                <tr>
                    <td>${historial.id_peticion}</td>
                    <td>${historial.nombres}</td>
                    <td>${historial.apellidos}</td>
                    <td>${rol}</td>
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


function historialDesde(){
    //Para obtener los datos desde un tiempo especifico

    // Agregar un evento de escucha para el evento submit del formulario
    form.addEventListener('submit', function(e) {
        // Prevenir el comportamiento por defecto del formulario (enviar y recargar la página)
        e.preventDefault();
        // Obtener datos del formulario
        let formData = new FormData(form);
        // Realizar una solicitud POST al servidor
        fetch('../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/enviarHistorial.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(data => {

            if (data.length === 0) {
                // Si la lista está vacía, puedes hacer lo que necesites, como mostrar un mensaje
                container_r.style.display = "none";
                salir.style.display = "block";
                mensaje1.style.display = "block";
                form.style.display = "block";
            } else {
                // Si hay elementos en la lista, puedes hacer otras operaciones
                container_r.style.display = "block";
                mensaje1.style.display = "none";
                // Limpiar las tablas antes de agregar nuevos datos
                document.querySelector('#contenedor-popup #con_respuesta tbody').innerHTML = '';

                // Iterar sobre los usuarios y agregarlos a las tablas correspondientes
                data.forEach(historial => {
                    let rol = "";
                    if (historial.id_rol == 3) {
                        rol = "Aprendiz";
                    } else if (historial.id_rol == 2) {
                        rol = "Funcionario";
                    }
                    document.querySelector('#contenedor-popup #con_respuesta tbody').innerHTML += `
                        <tr>
                            <td>${historial.id_peticion}</td>
                            <td>${historial.nombres}</td>
                            <td>${historial.apellidos}</td>
                            <td>${rol}</td>
                            <td>${historial.documento_identidad}</td>
                            <td>${historial.fecha_solicitud}</td>
                            <td>${historial.fecha_respuesta}</td>
                            <td>${historial.tipo_pqrs}</td>
                            <td>${historial.descripcion}</td>
                            <td>${historial.respuesta_pqrs}</td>
                        </tr>`;
                });
            }

        })
        .catch(error => console.error('Error:', error));
    });
}


function ocultarHistorial(){
    location.reload();
}


function historialCita(){
    //Para obtener los datos desde un tiempo especifico
    // Agregar un evento de escucha para el evento submit del formulario
    console.log("holaa aqui estoy");
    formCitas.addEventListener('submit', function(e) {
        // Prevenir el comportamiento por defecto del formulario (enviar y recargar la página)
        e.preventDefault();
        // Obtener datos del formulario
        let formCita = new FormData(formCitas);
        // Realizar una solicitud POST al servidor
        fetch('../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/historialCitas.php', {
            method: 'POST',
            body: formCita
        })
        .then(response => response.json()) // Convertir la respuesta a JSON
        .then(data => {
            console.log(data)
            document.querySelector('.notifications-panel').innerHTML = '';
            data.forEach(row => {
                    document.querySelector('.notifications-panel').innerHTML += `
                    <div class="notifications">
                        <figure>
                            <img src="../../Styles/Img/Componentes-img/Schedule.png" class="notifications-logo" alt="Icono de Calendario"/>
                        </figure>
                        <span></span>
                        <article>
                            <p>Área: ${row.nombre_servicio} </p>
                        </article>
                        <span></span>
                        <article>
                            <p>Día: ${row.fecha} "Aún no te han asignado el dia" : ${row.fecha} </p>
                        </article>
                        <span></span>
                        <article>
                        <p>Hora: ${row.hora} "Aún no te han asignado hora" : ${row.hora}  </p>
                        </article>
                        <span></span>
                        <article>
                            <p>Estado: ${row.estado_cita}</p>
                        </article>
                        <span></span>
                        <article>
                            <p>Motivo: ${row.descripcion}</p>
                        </article>
                        <span></span>
                        <article>
                            <p>jornada: ${row.jornada}</p>
                        </article>
                        <span></span>
                        <article>
                        <p>  Funcionario: ${row.nombre_funcionario_cita}  ${row.apellido_funcionario_cita}></p>
                        </article>
                    </div>`;
            });

        })
        .catch(error => console.error('Error:', error));
    });
}