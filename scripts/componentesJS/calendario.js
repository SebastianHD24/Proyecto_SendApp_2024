// Seleccionar elementos del DOM
const header = document.querySelector(".calendar h3");
const dates = document.querySelector(".dates");
const navs = document.querySelectorAll("#prev, #next");
const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

let date = new Date();
let month = date.getMonth();
let year = date.getFullYear();

function renderCalendar() {
    const start = new Date(year, month, 1).getDay();
    const endDate = new Date(year, month + 1, 0).getDate();
    const endDatePrev = new Date(year, month, 0).getDate();
    const today = new Date();

    let datesHtml = "";

    // Renderizar últimos días del mes anterior
    for (let i = start - 1; i >= 0; i--) {
        const day = endDatePrev - i;
        datesHtml += `<li class="inactive prev-month" data-day="${day}" data-month="${month === 0 ? 11 : month - 1}" data-year="${month === 0 ? year - 1 : year}">${day}</li>`;
    }

    // Renderizar días del mes actual
    for (let i = 1; i <= endDate; i++) {
        let className = "";
        if (i === date.getDate() && month === today.getMonth() && year === today.getFullYear()) {
            className = 'class="today"';
        }
        datesHtml += `<li ${className} data-day="${i}" data-month="${month}" data-year="${year}">${i}</li>`;
        fetchEventData(i, month, year);
    }

    // Renderizar primeros días del mes siguiente
    const end = new Date(year, month, endDate).getDay();
    for (let i = 1; i <= 6 - end; i++) {
        datesHtml += `<li class="inactive" data-day="${i}" data-month="${month === 11 ? 0 : month + 1}" data-year="${month === 11 ? year + 1 : year}">${i}</li>`;
    }

    dates.innerHTML = datesHtml;
    header.textContent = `${months[month]} ${year}`;
    addDateClickListeners();
}

function fetchEventData(day, month, year) {
    const fechaActual = {
        dia: day,
        mes: month + 1,
        anio: year
    };

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
        if (data.respuesta === 'si') {
            const dayElements = document.querySelectorAll(`.dates li[data-day="${day}"][data-month="${month}"][data-year="${year}"]`);
            const currentDate = new Date(year, month, day);
            dayElements.forEach(dayElement => {
                if (currentDate < new Date()) {
                    dayElement.classList.add("event", "past");
                } else {
                    dayElement.classList.add("event", "future");
                }
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


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

        date = new Date(year, month, new Date().getDate());
        year = date.getFullYear();
        month = date.getMonth();

        renderCalendar();
    });
});

function addDateClickListeners() {
    document.querySelectorAll(".dates li").forEach((day) => {
        day.addEventListener("click", (e) => {
            const selectedDay = parseInt(e.target.textContent);
            const selectedMonth = parseInt(e.target.dataset.month);
            const selectedYear = parseInt(e.target.dataset.year);

            // Verificar si el día pertenece al mes actual
            if (!e.target.classList.contains("inactive")) {
                fetch(`../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/obtener_eventos.php?day=${selectedDay}&month=${selectedMonth + 1}&year=${selectedYear}`)
                    .then(response => response.text())
                    .then(data => {
                        if (data.trim() !== '') {
                            document.getElementById('eventos').innerHTML = data;
                        } else {
                            document.getElementById('eventos').innerHTML = '';
                        }
                    })
                    .catch(error => console.error('Error al obtener eventos:', error));
            } else {
                // Si es un día inactivo, no mostrar eventos
                document.getElementById('eventos').innerHTML = '';
            }
        });
    });
}

renderCalendar();
addDateClickListeners();
