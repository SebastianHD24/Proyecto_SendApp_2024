// Ventana emergente
const alerta = document.getElementById('alerta');
const titulo = document.querySelector('.tituloDeInicioH1');
const texto = document.querySelector('.articuloContenedorDeParrafos');

// Ventana emergente de confirmación o negación
let ventanaConfirmacion = document.querySelector('.fondoPopUp');

// Contenedor de la tabla de servicios
let contenedorTabla = document.querySelector('.tablaServicios');

// Evento de confirmación
function confirmacionAd() {
    return new Promise((resolve, reject) => {
        // Mostrar el popup de confirmación
        ventanaConfirmacion.classList.remove('oculto');
        contenedorTabla.classList.add('oculto');
        titulo.classList.add('oculto');
        texto.classList.add('oculto');

        // Manejadores de eventos para los botones
        document.querySelector('.confirmacionAd.afir').addEventListener('click', () => {
            // Resolvemos la promesa con true
            resolve(true);
        });

        document.querySelector('.confirmacionAd.nega').addEventListener('click', () => {
            // Ocultar el popup
            ventanaConfirmacion.classList.add('oculto');
            contenedorTabla.classList.remove('oculto');
            titulo.classList.remove('oculto');
            texto.classList.remove('oculto');
            // Rechazamos la promesa
            reject(new Error('Se canceló la operación'));
        });
    });
}

// Función para actualizar el estado del servicio
function actualizarEstado(idServicio) {
    confirmacionAd().then(() => {
        fetch('../../bases/mainInterfaz/backend/cambiarEstado.php', {
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
                if (data.cambio === 1) {
                    ventanaConfirmacion.classList.add('oculto');
                    alerta.style.display = 'flex';
                    alerta.style.zIndex = '999';
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    console.log('Hubo un error al cambiar el estado del servicio');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
}