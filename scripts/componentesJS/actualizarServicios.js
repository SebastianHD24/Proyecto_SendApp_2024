//ETIQUETAS OBTENIDAS EN LA PAGINA

//ventana emergente de confirmacion o negacion
let ventanaConfirmacion = document.querySelector('.popUpSeguro');

//Contenedor de la tabla de servicios
let contenedorTabla = document.querySelector('.tablaServicios');


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
            ventanaConfirmacion.classList.add('oculto')
            contenedorTabla.classList.remove('oculto');
            // Rechazamos la promesa
            reject(new Error('Se canceló la operación'));
        });
    });
}


// Bloque de codigo que cambia el estado del servicio seleccionado y maneja los posibles errores y como manejarlos al realizar la accion
function actualizarEstado(idServicio) {
    confirmacionAd().then(() => {
        // Se ejecuta cuando se hace clic en el botón "Sí"
        fetch('../../../Proyecto_SendApp_2024/', {
            method: 'POST',
            body: JSON.stringify({ 
                idServicio: idServicio 
            })
        })
    })
}


// Bloque de codigo que cambia al admin de un area especifica y maneja los posibles errores y como manejarlos al realizar la accion
/*function actualizarAdmin(idServicio, posicion) {
    // Obtener el select de la misma fila del boton
    let selectAdmin = document.querySelectorAll('.posibles_admin')[posicion];
    // Obtener el valor seleccionado del select
    let admin = selectAdmin.value;

    confirmacionAd().then(() => {
        // Realizar la solicitud AJAX con los datos del servicio y el admin seleccionado
        $.ajax({
            url: './actualizarServicios.php',
            type: 'POST',
            data: {
                idServicio: idServicio,
                admin: admin
            },
            success: function(response) {
                console.log(response)
                let jsonData = JSON.parse(response);
                switch (jsonData.success) {
                    case 0:
                        $('.tablaServicios').load('../../../Proyecto_SendApp_2024/bases/mainInterfaz/baseInterfaz.php .tablaServicios > * ');
                        break;
                    case 1:
                        $('.mensajeCambio').eq(posicion).removeClass('oculto').text('No se enviaron datos nuevos para actualizar');
                        break;
                    default:
                        break;
                }
            }
        });
    }).catch(error => {
        // Se ejecuta cuando se hace clic en el botón "No" o se cancela la operación
        console.error(error.message);
        // Aquí puedes manejar el caso en el que se cancela la operación
    });
};



function consultar(idAdmin) {
    $.ajax({
        url: 'mostrarAdmin.php',
        type: 'POST',
        data: {
            admin: idAdmin,
        },
        success: function(response) {
            console.log(response);
            // Limpiar la tabla antes de agregar nuevos datos
            $('.popUp').removeClass('oculto');
            $('.cerrar').removeClass('oculto');
            $('.tablaAdmin tbody').empty();

            let adminData = JSON.parse(response);

            // Iterar sobre los usuarios y agregarlos a las tablas correspondientes
            if (adminData === '') {
                $('.mensajeAdmin').removeClass('oculto');
            } else {
                $('.tablaAdmin').removeClass('oculto');

                // Mostrar la imagen
                $('.tablaAdmin tbody').append('<tr><td><img src="' + adminData.imagen + '" alt="Imagen de usuario"></td><td>' + adminData.nombres + '</td><td>' + adminData.apellidos + '</td><td>' + adminData.correo + '</td><td>' + adminData.celular + '</td></tr>');
            }
        },
        error: function(xhr, status, error) {
            console.error("Error al obtener datos: " + error);
        }
    });
} */