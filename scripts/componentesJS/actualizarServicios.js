//ETIQUETAS OBTENIDAS EN LA PAGINA

//Ventana emergente
const alerta = document.getElementById('alerta');

// ventana emergente de confirmacion o negacion
let ventanaConfirmacion = document.querySelector('.fondoPopUp');

// Contenedor de la tabla de servicios
let contenedorTabla = document.querySelector('.tablaServicios');

// contenedor de los datos del admin
let popUp = document.querySelector('.popUp');

// boton para cerrar el contenedor de la info del admin
let botonCerrar = document.querySelector('.cerrar');

// tabla con la info del admin
let tablaAdmin = document.querySelector('.tablaAdmin');

// mensaje predeterminado en caso de que el servicio no cuente con un admin
let mensajeAdmin = document.querySelector('.mensajeAdmin');

// nombre del servicio
let nomServicio = document.getElementById('tituloServicio');


//EVENTOS Y FUNCIONES

// Muestra una ventana emergente para confirmar la accion 
function confirmacionAd() {
    return new Promise((resolve, reject) => {
        // Mostrar el popup de confirmación
        ventanaConfirmacion.classList.remove('oculto');
        contenedorTabla.classList.add('oculto');

        // Manejadores de eventos para los botones
        document.querySelector('.confirmacionAd.afir').addEventListener('click', () => {
            // Resolvemos la promesa con true
            resolve(true);
        });

        document.querySelector('.confirmacionAd.nega').addEventListener('click', () => {
            // Ocultar el popup
            ventanaConfirmacion.classList.add('oculto');
            contenedorTabla.classList.remove('oculto');
            // Rechazamos la promesa
            reject(new Error('Se canceló la operación'));
        });
    });
}


// Bloque de codigo que cambia el estado del servicio seleccionado y maneja los posibles errores al realizar la accion
function actualizarEstado(idServicio) {
    confirmacionAd().then(() => {
    fetch('../../bases/mainInterfaz/backend/cambiarEstado.php', { // Reemplaza 'ruta_a_tu_archivo_php.php' con la ruta correcta a tu archivo PHP
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ idServicio: idServicio })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Hubo un error en la solicitud.');
        }
        return response.json();
    })
    .then(data => {
        if (data.cambio === 0) {
            ventanaConfirmacion.classList.add('oculto');
            alerta.style.display = 'block';
            alerta.style.zIndex = '999';
            setTimeout(function(){
                location.reload();
            },2000);
        } else {
            console.log(data);
            console.log('Hubo un error al cambiar el estado del servicio');
        }
    })
});
}


// Bloque de codigo que cambia al admin de un area especifica y maneja los posibles errores al realizar la accion
function actualizarAdmin(idServicio, posicion) {
    // Obtener el select de la misma fila del botón
    let selectAdmin = document.querySelectorAll('.posibles_admin')[posicion];
    // Obtener el valor seleccionado del select
    let admin = selectAdmin.value;

    confirmacionAd().then(() => {
        // Realizar la solicitud fetch con los datos del servicio y el admin seleccionado
        fetch('../../bases/mainInterfaz/backend/actualizarAdministrador.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ idServicio: idServicio,
                admin: admin
             })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Hubo un error en la solicitud.');
            }
            return response.json();
        })
        .then(data => {
            switch (data.success) {
                case 0:
                    ventanaConfirmacion.classList.add('oculto');
                    alerta.style.display = 'block';
                    alerta.style.zIndex = '999';
                    setTimeout(function(){
                        location.reload();
                    },2000);
                    break;
                case 1:
                    let mensajeCambio = document.querySelectorAll('.mensajeCambio')[posicion];
                    mensajeCambio.classList.remove('oculto');
                    mensajeCambio.textContent = 'No se enviaron datos nuevos para actualizar';
                    contenedorTabla.classList.remove('oculto');
                    ventanaConfirmacion.classList.add('oculto');
                    break;
                default:
                    console.log(data.data)
                    break;
            }
        })
    });
}

// Bloque de codigo que oculta el contenedor de la info del admin
botonCerrar.addEventListener('click', function () {
    // Limpiar la tabla antes de agregar nuevos datos
    popUp.classList.add('oculto');
    contenedorTabla.classList.remove('oculto');
    mensajeAdmin.classList.remove('oculto');
    tablaAdmin.classList.remove('oculto');
    nomServicio.classList.remove('oculto');
    tablaAdmin.querySelector('tbody').innerHTML = '';
})


// Bloque de codigo que muestra la info del admin de un area
function consultar(idAdmin, servicio) {
    fetch('../../bases/mainInterfaz/backend/mostrarAdmin.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ admin: idAdmin })
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Hubo un error en la solicitud.');
        }
        return response.json();
    })
    .then(adminData => {
        // Limpiar la tabla antes de agregar nuevos datos
        popUp.classList.remove('oculto');
        contenedorTabla.classList.add('oculto');
        tablaAdmin.querySelector('tbody').innerHTML = '';

        // Verificación si existe o no un Admin
        if (adminData.adminNotFound) {
            tablaAdmin.classList.add('oculto');
            nomServicio.classList.add('oculto');
        } else {
            // Se ordenan los datos del admin para mostrarlos ordenadamente
            mensajeAdmin.classList.add('oculto');
            const tr = document.createElement('tr');

            const tdNombres = document.createElement('td');
            tdNombres.textContent = adminData.nombres;

            const tdApellidos = document.createElement('td');
            tdApellidos.textContent = adminData.apellidos;

            const tdCorreo = document.createElement('td');
            tdCorreo.textContent = adminData.correo;

            const tdCelular = document.createElement('td');
            tdCelular.textContent = adminData.celular;

            tr.appendChild(tdNombres);
            tr.appendChild(tdApellidos);
            tr.appendChild(tdCorreo);
            tr.appendChild(tdCelular);

            tablaAdmin.querySelector('tbody').appendChild(tr);
            nomServicio.textContent = "Adminitrador del servicio: " + servicio;
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}