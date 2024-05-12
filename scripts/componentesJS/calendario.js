// Seleccionar elementos del DOM
const header = document.querySelector(".calendar h3"); // Encabezado del calendario
const dates = document.querySelector(".dates"); // Contenedor de fechas
const navs = document.querySelectorAll("#prev, #next"); // Botones de navegación
const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]; // Array de nombres de meses

// Variables de fecha
let date = new Date(); // Fecha actual
let month = date.getMonth(); // Mes actual
let year = date.getFullYear(); // Año actual

// Función para renderizar el calendario
function renderCalendar() {
    // Calcular el día de la semana en que comienza el mes y el número de días en el mes actual
    const start = new Date(year, month, 1).getDay();
    const endDate = new Date(year, month + 1, 0).getDate();
    const endDatePrev = new Date(year, month, 0).getDate();

    let datesHtml = ""; // Variable para almacenar el HTML de las fechas del calendario

    // Renderizar últimos días del mes anterior
    for (let i = start - 1; i >= 0; i--) {
        const day = endDatePrev - i;
        datesHtml += `<li class="inactive prev-month">${day}</li>`;
        fetchEventData(day, month, year, start); // Obtener datos de eventos para estos días
    }

    // Renderizar días del mes actual
    for (let i = 1; i <= endDate; i++) {
        let className = "";
        if (i === date.getDate() && month === new Date().getMonth() && year === new Date().getFullYear()) {
            className = 'class="today"';
        }
        datesHtml += `<li ${className}>${i}</li>`;
        fetchEventData(i, month, year, start); // Obtener datos de eventos para estos días
    }

    // Renderizar primeros días del mes siguiente
    const end = new Date(year, month, endDate).getDay();
    for (let i = 1; i <= 6 - end; i++) {
        datesHtml += `<li class="inactive next-month">${i}</li>`;
        fetchEventData(i, month + 1, year, start); // Obtener datos de eventos para estos días (mes siguiente)
    }

    // Actualizar el HTML del contenedor de fechas y el encabezado del calendario
    dates.innerHTML = datesHtml;
    header.textContent = `${months[month]} ${year}`;
}

// Función para obtener datos de eventos
function fetchEventData(day, month, year) {
    const fechaActual = {
        dia: day,
        mes: month + 1, // Ajustar el mes (0-indexed a 1-indexed)
        anio: year
    };

    // Realizar solicitud HTTP POST al servidor para obtener datos de eventos
    fetch('../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/obtener_notificaciones.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(fechaActual)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Hubo un error en la solicitud.');
        }
        return response.json();
    })
    .then(data => {
        console.log(data); // Manejar la respuesta del servidor si es necesario

        // Si hay eventos para este día, agregar la clase "event" al elemento correspondiente en el calendario
        if (data.respuesta === 'si') {
            // Calcular el índice del elemento <li> correspondiente al día actual
            const currentDate = new Date(year, month, day);
            const firstDayOfMonth = new Date(year, month, 1).getDay();
            let index = day + firstDayOfMonth - 1; // Restar 1 para ajustar el índice
            if (index < 0) index += 7; // Ajustar el índice si es negativo (día del mes anterior)

            // Buscar el elemento <li> correcto comprobando el día y el mes
            const dayElements = document.querySelectorAll(".dates li");
            for (let i = 0; i < dayElements.length; i++) {
                const elementDay = parseInt(dayElements[i].textContent);
                const elementMonth = months.indexOf(header.textContent.split(" ")[0]);
                if (elementDay === day && elementMonth === month) {
                    dayElements[i].classList.add("event");

                    // Si la fecha del evento ha pasado, agregar la clase "inactive"
                    const fechaEvento = new Date(year, month, day);
                    if (fechaEvento < new Date()) {
                        dayElements[i].classList.add("inactive");
                    }
                    break;
                }
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Añadir event listeners a los botones de navegación
navs.forEach((nav) => {
    nav.addEventListener("click", (e) => {
        const btnId = e.target.id;

        if (btnId === "prev" && month === 0) {
            year--;
            month = 11;
        } else if (btnId === "next" && month === 11) {
            year++;
            month = 0;
        } else {
            month = btnId === "next" ? month + 1 : month - 1;
        }

        // Actualizar la fecha y renderizar el calendario
        date = new Date(year, month, new Date().getDate());
        year = date.getFullYear();
        month = date.getMonth();

        renderCalendar();
        addDateClickListeners(); // Agregar event listeners después de renderizar el calendario
    });
});

// Función para añadir event listeners a los días del calendario
function addDateClickListeners() {
    document.querySelectorAll(".dates li").forEach((day) => {
        day.addEventListener("click", (e) => {
            const selectedDay = e.target.textContent;
            const selectedMonth = months.indexOf(header.textContent.split(" ")[0]);
            const selectedYear = parseInt(header.textContent.split(" ")[1]);

            // Realizar solicitud HTTP GET para obtener eventos específicos para este día
            fetch(`../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/obtener_eventos.php?day=${selectedDay}&month=${selectedMonth}&year=${selectedYear}`)
                .then(response => {
                    return response.text();
                })
                .then(data => {
                    // Mostrar eventos en algún lugar de la página web
                    if (data.trim() !== '') {
                        document.getElementById('eventos').innerHTML = data;
                    } else {
                        document.getElementById('eventos').innerHTML = '';
                    }
                })
                .catch(error => console.error('Error al obtener eventos:', error));
        });
    });
}

// Renderizar el calendario y añadir event listeners a los días del calendario
renderCalendar();
addDateClickListeners();
