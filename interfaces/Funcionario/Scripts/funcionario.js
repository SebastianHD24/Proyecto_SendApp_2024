//Selecionamos el boton que esta en HTML
const expand_btn = document.querySelector(".expand-btn");

let activeIndex;

//Le agregamos un evento al boton
expand_btn.addEventListener("click", () => {
  document.body.classList.toggle("collapsed");
});

const current = window.location.href;

const allLinks = document.querySelectorAll(".sidebar-links a");

//Agregamos otro evento para cada vez que se de click esconda cada elemento que contiene el div 
allLinks.forEach((elem) => {
  elem.addEventListener("click", function () {
    const hrefLinkClick = elem.href;

    //Para cada link mostramos su nombre si el puntero del mouse esta encima de los contrario no.
    allLinks.forEach((link) => {
      if (link.href == hrefLinkClick) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  });
});

//Selecionamos el input de tipo busqueda del HTML
const searchInput = document.querySelector(".search__wrapper input");

//Le agregamos un evento al input para que cada vez de click se abra el menú
searchInput.addEventListener("focus", (e) => {
  document.body.classList.remove("collapsed");
});


//Calendario 
// Constructor de la aplicación del calendario
function CalendarApp(date) {
  
  // Si no se proporciona una fecha, se usa la fecha actual
  if (!(date instanceof Date)) {
    date = new Date();
  }
  
  // Definición de días de la semana, meses y citas inspiradoras
  this.days = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
  this.months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
  this.quotes = ['Todo lo que la mente del hombre pueda concebir y creer, puede lograrlo. –Napoleon Hill', 'Esfuérzate no por ser un éxito, sino por ser valioso. –Albert Einstein', 'Dos caminos se bifurcaban en un bosque, y yo—tomé el menos transitado, y eso ha marcado toda la diferencia. –Robert Frost', 'Atribuyo mi éxito a esto: nunca di ni acepté excusas. –Florence Nightingale', 'Te pierdes el 100% de los tiros que no intentas. –Wayne Gretzky', 'La decisión de actuar es lo más difícil; el resto es simplemente tenacidad. –Amelia Earhart', 'Cada golpe me acerca más al próximo jonrón. –Babe Ruth', 'La determinación del propósito es el punto de partida de todos los logros. –W. Clement Stone', 'La vida no se trata de obtener y tener, se trata de dar y ser. –Kevin Kruse', 'La vida es lo que te sucede mientras estás ocupado haciendo otros planes. –John Lennon', 'Nos convertimos en lo que pensamos. –Earl Nightingale', 'La vida es 10% lo que me sucede y 90% cómo reacciono ante ello. –Charles Swindoll', 'La forma más común en que la gente renuncia a su poder es pensando que no tienen ninguno. –Alice Walker', 'La mente lo es todo. Lo que piensas, te conviertes. –Buda', 'Ganar no lo es todo, pero querer ganar sí lo es. –Vince Lombardi', 'Cada niño es un artista. El problema es cómo seguir siendo un artista una vez que crecemos. –Pablo Picasso', 'Nunca puedes cruzar el océano hasta que tengas el coraje de perder de vista la costa. –Christopher Columbus', 'He aprendido que la gente olvidará lo que dijiste, olvidará lo que hiciste, pero nunca olvidará cómo los hiciste sentir. –Maya Angelou', 'O corres el día, o el día te corre a ti. –Jim Rohn', 'Ya sea que creas que puedes o que no puedes, tienes razón. –Henry Ford', 'Los dos días más importantes en tu vida son el día en que naces y el día en que descubres por qué. –Mark Twain', 'Todo lo que puedas hacer, o soñar que puedes, comiénzalo. La audacia tiene genio, poder y magia en sí misma. –Johann Wolfgang von Goethe', 'La mejor venganza es un éxito masivo. –Frank Sinatra', 'La gente a menudo dice que la motivación no dura. Bueno, tampoco lo hace bañarse. Por eso lo recomendamos diariamente. –Zig Ziglar', 'La vida se reduce o se expande en proporción a la valentía de uno. –Anais Nin', 'Si escuchas una voz dentro de ti que dice “no puedes pintar”, entonces pinta y esa voz será silenciada. –Vincent Van Gogh', 'Solo hay una forma de evitar la crítica: no hacer nada, no decir nada y no ser nada. –Aristóteles', 'Pide y se te dará; busca, y encontrarás; llama y se te abrirá. –Jesús', 'La única persona destinada a convertirse es la persona que decides ser. –Ralph Waldo Emerson', 'Ve con confianza en la dirección de tus sueños. Vive la vida que has imaginado. –Henry David Thoreau', 'Pocas cosas pueden ayudar más a un individuo que darle responsabilidad y hacerle saber que confías en él. –Booker T. Washington', 'La lógica te llevará de A a B. La imaginación te llevará a cualquier parte. –Albert Einstein', 'La ciencia es el conocimiento organizado. La sabiduría es vida organizada. –Immanuel Kant', 'Dos cosas son infinitas: el universo y la estupidez humana; y yo no estoy seguro sobre el universo. –Albert Einstein', 'Somos lo que hacemos repetidamente. La excelencia, entonces, no es un acto, sino un hábito. –Aristóteles', 'La ciencia y la tecnología revolucionan nuestras vidas, pero la memoria, la tradición y el mito nos marcan como seres humanos. –Arthur M. Schlesinger', 'Un pequeño cambio en la teoría, una pequeña modificación en un experimento, son a menudo suficientes para destruir una teoría entera o a menudo para abrir nuevas perspectivas. –Louis Pasteur', 'La ciencia es el gran antídoto contra el veneno del entusiasmo y la superstición. –Adam Smith'];
  
  // Lista de eventos y fechas de eventos
  this.apts = [];
  this.aptDates = [];
  
  // Referencias a elementos del DOM
  this.eles = {};

  // Referencias a elementos del DOM relacionados con el calendario
  this.calDaySelected = null; // Día seleccionado en el calendario
  this.calendar = document.getElementById("calendar-app"); // Contenedor principal del calendario
  this.calendarView = document.getElementById("dates"); // Vista de los días del calendario
  this.calendarMonthDiv = document.getElementById("calendar-month"); // Elemento para mostrar el mes actual
  this.calendarMonthLastDiv = document.getElementById("calendar-month-last"); // Elemento para mostrar el mes anterior
  this.calendarMonthNextDiv = document.getElementById("calendar-month-next"); // Elemento para mostrar el mes siguiente

  
  // Referencia al elemento del DOM donde se mostrará una cita inspiradora
  this.dayInspirationalQuote = document.getElementById("inspirational-quote");
   
  // Referencia al elemento del DOM donde se mostrará la fecha actual en el pie de página
  this.todayIsSpan = document.getElementById("footer-date");

  // Referencias a elementos del DOM relacionados con la vista diaria del calendario
  this.dayViewEle = document.getElementById("day-view"); // Contenedor de la vista diaria del calendario
  this.dayViewExitEle = document.getElementById("day-view-exit"); // Botón para salir de la vista diaria
  this.dayViewDateEle = document.getElementById("day-view-date"); // Elemento para mostrar la fecha en la vista diaria
  this.addDayEventEle = document.getElementById("add-event"); // Botón para agregar un evento en la vista diaria
  this.dayEventsEle = document.getElementById("day-events"); // Elemento para mostrar información sobre eventos en la vista diaria

  
  // Elementos del formulario para agregar eventos en la vista diaria del calendario
  this.dayEventAddForm = {
      cancelBtn: document.getElementById("add-event-cancel"), // Botón para cancelar la creación de un evento
      addBtn: document.getElementById("add-event-save"), // Botón para guardar la creación de un evento
      nameEvent:  document.getElementById("input-add-event-name"), // Campo para ingresar el nombre del evento
      startTime:  document.getElementById("input-add-event-start-time"), // Campo para ingresar la hora de inicio del evento
      endTime:  document.getElementById("input-add-event-end-time"), // Campo para ingresar la hora de fin del evento
      startAMPM:  document.getElementById("input-add-event-start-ampm"), // Campo para seleccionar la AM/PM de la hora de inicio
      endAMPM:  document.getElementById("input-add-event-end-ampm") // Campo para seleccionar la AM/PM de la hora de fin
  };

  // Elemento para mostrar la lista de eventos en la vista diaria del calendario
  this.dayEventsList = document.getElementById("day-events-list");

  // Elemento del formulario para agregar eventos en la vista diaria del calendario
  this.dayEventBoxEle = document.getElementById("add-day-event-box");

  
  /* Iniciar la aplicación */
  // Mostrar la vista del calendario con la fecha proporcionada
  this.showView(date);
  // Agregar event listeners para interactuar con la aplicación
  this.addEventListeners();
  // Establecer el texto del elemento todayIsSpan para mostrar la fecha actual
  this.todayIsSpan.textContent = "Hoy es " + this.months[date.getMonth()] + " " + date.getDate();
}

// Agregar event listeners para la interacción con la aplicación
CalendarApp.prototype.addEventListeners = function(){
  // Evento click en el calendario para cerrar la vista diaria
  this.calendar.addEventListener("click", this.mainCalendarClickClose.bind(this));
  // Evento click en el elemento todayIsSpan para mostrar la vista actual del calendario
  this.todayIsSpan.addEventListener("click", this.showView.bind(this));
  // Evento click en el elemento calendarMonthLastDiv para mostrar el mes anterior
  this.calendarMonthLastDiv.addEventListener("click", this.showNewMonth.bind(this));
  // Evento click en el elemento calendarMonthNextDiv para mostrar el mes siguiente
  this.calendarMonthNextDiv.addEventListener("click", this.showNewMonth.bind(this));
  // Evento click en el elemento dayViewExitEle para cerrar la vista diaria del calendario
  this.dayViewExitEle.addEventListener("click", this.closeDayWindow.bind(this));
  // Evento click en el elemento dayViewDateEle para mostrar el mes en la vista diaria del calendario
  this.dayViewDateEle.addEventListener("click", this.showNewMonth.bind(this));
  // Evento click en el elemento addDayEventEle para agregar un nuevo evento en la vista diaria del calendario
  this.addDayEventEle.addEventListener("click", this.addNewEventBox.bind(this));
  // Evento click en el botón cancelar del formulario para cerrar el formulario de creación de evento
  this.dayEventAddForm.cancelBtn.addEventListener("click", this.closeNewEventBox.bind(this));
  // Evento keyup en el botón cancelar del formulario para cerrar el formulario de creación de evento
  this.dayEventAddForm.cancelBtn.addEventListener("keyup", this.closeNewEventBox.bind(this));
  
  // Eventos keyup en los campos de tiempo del formulario para limitar la entrada de datos
  this.dayEventAddForm.startTime.addEventListener("keyup", this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.startAMPM.addEventListener("keyup", this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.endTime.addEventListener("keyup", this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.endAMPM.addEventListener("keyup", this.inputChangeLimiter.bind(this));
  // Evento click en el botón guardar del formulario para guardar la creación de un nuevo evento
  this.dayEventAddForm.addBtn.addEventListener("click", this.saveAddNewEvent.bind(this));
};

// Método para mostrar la vista del calendario
CalendarApp.prototype.showView = function(date){
  // Verificar si se proporcionó una fecha válida; de lo contrario, usar la fecha actual
  if (!date || !(date instanceof Date)) date = new Date();
  var now = new Date(date),
      y = now.getFullYear(),
      m = now.getMonth();
  var today = new Date();
  
  // Obtener el último día del mes actual y el día de inicio de la semana
  var lastDayOfM = new Date(y, m + 1, 0).getDate();
  var startingD = new Date(y, m, 1).getDay();
  var lastM = new Date(y, now.getMonth()-1, 1);
  var nextM = new Date(y, now.getMonth()+1, 1);
 
  // Restablecer las clases del mes anterior
  this.calendarMonthDiv.classList.remove("cview__month-activate");
  this.calendarMonthDiv.classList.add("cview__month-reset");
  
  // Eliminar todos los nodos hijos del calendario
  while(this.calendarView.firstChild) {
    this.calendarView.removeChild(this.calendarView.firstChild);
  }
  
  // Construir espaciadores
  for ( var x = 0; x < startingD; x++ ) {
    var spacer = document.createElement("div");
    spacer.className = "cview--spacer";
    this.calendarView.appendChild(spacer);
  }
  
  // Construir días del mes
  for ( var z = 1; z <= lastDayOfM; z++ ) {
    var _date = new Date(y, m ,z);
    var day = document.createElement("div");
    day.className = "cview--date";
    day.textContent = z;
    day.setAttribute("data-date", _date);
    day.onclick = this.showDay.bind(this);
    
    // Verificar si es la fecha de hoy
    if ( z == today.getDate() && y == today.getFullYear() && m == today.getMonth() ) {
      day.classList.add("today");
    }
    
    // Verificar si hay eventos para mostrar
    if ( this.aptDates.indexOf(_date.toString()) !== -1 ) {
      day.classList.add("has-events");
    }
    
    this.calendarView.appendChild(day);
  }
  
  // Activar la animación del mes actual después de un breve retraso
  var _that = this;
  setTimeout(function(){
    _that.calendarMonthDiv.classList.add("cview__month-activate");
  }, 50);
  
  // Establecer el nombre del mes y el año en el calendario
  this.calendarMonthDiv.textContent = this.months[now.getMonth()] + " " + now.getFullYear();
  this.calendarMonthDiv.setAttribute("data-date", now);

  // Establecer el nombre del mes anterior y su fecha en el calendario
  this.calendarMonthLastDiv.textContent = "← " + this.months[lastM.getMonth()];
  this.calendarMonthLastDiv.setAttribute("data-date", lastM);
  
  // Establecer el nombre del mes siguiente y su fecha en el calendario
  this.calendarMonthNextDiv.textContent = this.months[nextM.getMonth()] + " →";
  this.calendarMonthNextDiv.setAttribute("data-date", nextM);
};

// Método para mostrar el día seleccionado
CalendarApp.prototype.showDay = function(e, dayEle) {
  // Evitar la propagación del evento
  e.stopPropagation();
  // Obtener el elemento del día si no se proporciona
  if (!dayEle) {
    dayEle = e.currentTarget;
  }
  // Obtener la fecha del día seleccionado
  var dayDate = new Date(dayEle.getAttribute('data-date'));
  
  // Establecer el día seleccionado en el calendario
  this.calDaySelected = dayEle;
  
  // Abrir la ventana del día seleccionado
  this.openDayWindow(dayDate);
};

// Método para abrir la ventana del día seleccionado
CalendarApp.prototype.openDayWindow = function(date) {
  var now = new Date();
  var day = new Date(date);
  
  // Mostrar la fecha seleccionada en la ventana del día
  this.dayViewDateEle.textContent = this.days[day.getDay()] + ", " + this.months[day.getMonth()] + " " + day.getDate() + ", " + day.getFullYear();
  this.dayViewDateEle.setAttribute('data-date', day);
  this.dayViewEle.classList.add("calendar--day-view-active");
  
  /* Cambios lingüísticos contextuales basados en el tiempo. También mostrar botón para programar eventos futuros */
  var _dayTopbarText = '';
  if (day < new Date(now.getFullYear(), now.getMonth(), now.getDate())) {
    _dayTopbarText = "tuvo ";
    this.addDayEventEle.style.display = "none";
  } else {
    _dayTopbarText = "tiene ";
    this.addDayEventEle.style.display = "inline";
  }
  this.addDayEventEle.setAttribute("data-date", day);
  
  // Mostrar eventos del día seleccionado
  var eventsToday = this.showEventsByDay(day);
  if (!eventsToday) {
    _dayTopbarText += "0 ";
    var _rand = Math.round(Math.random() * ((this.quotes.length - 1) - 0) + 0);
    this.dayInspirationalQuote.textContent = this.quotes[_rand];
  } else {
    _dayTopbarText += eventsToday.length + " ";
    this.dayInspirationalQuote.textContent = null;
  }
  
  // Limpiar lista de eventos anteriores
  while (this.dayEventsList.firstChild) {
    this.dayEventsList.removeChild(this.dayEventsList.firstChild);
  }
  
  // Mostrar eventos del día en la lista
  this.dayEventsList.appendChild(this.showEventsCreateElesView(eventsToday));
  
  // Actualizar el texto que muestra la cantidad de eventos del día
  this.dayEventsEle.textContent = _dayTopbarText + "eventos en " + this.months[day.getMonth()] + " " + day.getDate() + ", " + day.getFullYear();
};


// Método para crear la vista de elementos de eventos del día
CalendarApp.prototype.showEventsCreateElesView = function(events) {
var ul = document.createElement("ul");
ul.className = 'day-event-list-ul';
events = this.sortEventsByTime(events);
var _this = this;
events.forEach(function(event) {
  var _start = new Date(event.startTime);
  var _end = new Date(event.endTime);
  var idx = event.index;
  var li = document.createElement("li");
  li.className = "event-dates";
  
  // Construir el HTML para mostrar la información del evento
  var html = "<span class='start-time'>" + _start.toLocaleTimeString(navigator.language, { hour: '2-digit', minute: '2-digit' }) + "</span> <small>a</small> ";
  html += "<span class='end-time'>" + _end.toLocaleTimeString(navigator.language, { hour: '2-digit', minute: '2-digit' }) + ((_end.getDate() != _start.getDate()) ? ' <small>on ' + _end.toLocaleDateString() + "</small>" : '') + "</span>";
  html += "<span class='event-name'>" + event.name + "</span>";
  
  // Crear un elemento div para contener la información del evento
  var div = document.createElement("div");
  div.className = "event-dates";
  div.innerHTML = html;
  
  // Crear el botón de eliminar evento
  var deleteBtn = document.createElement("span");
  var deleteText = document.createTextNode("borrar");
  deleteBtn.className = "event-delete";
  deleteBtn.setAttribute("data-idx", idx);
  deleteBtn.appendChild(deleteText);
  deleteBtn.onclick = _this.deleteEvent.bind(_this);
  
  // Agregar el botón de eliminar al elemento div
  div.appendChild(deleteBtn);
  
  // Agregar el elemento div al elemento li
  li.appendChild(div);
  
  // Agregar el elemento li a la lista ul
  ul.appendChild(li);
});
return ul;
};


// Método para eliminar un evento
CalendarApp.prototype.deleteEvent = function(e) {
  // Obtener el evento eliminado
  var deleted = this.apts.splice(e.currentTarget.getAttribute("data-idx"), 1);
  var deletedDate = new Date(deleted[0].day);
  
  // Verificar si quedan eventos para ese día
  var anyDatesLeft = this.showEventsByDay(deletedDate);
  
  // Si no quedan eventos para ese día, eliminarlo del array
  if (anyDatesLeft === false) {
    var idx = this.aptDates.indexOf(deletedDate.toString());
    if (idx >= 0) {
      this.aptDates.splice(idx, 1);
      // Quitar el punto del día del calendario
      var ele = document.querySelector('.cview--date[data-date="' + deletedDate.toString() + '"]');
      if (ele) {
        ele.classList.remove("has-events");
      }
    }
  }
  
  // Actualizar la ventana del día
  this.openDayWindow(deletedDate);
};


// Método para ordenar eventos por tiempo
CalendarApp.prototype.sortEventsByTime = function(events) {
  if (!events) return [];
  return events.sort(function compare(a, b) {
    if (new Date(a.startTime) < new Date(b.startTime)) {
      return -1;
    }
    if (new Date(a.startTime) > new Date(b.startTime)) {
      return 1;
    }
    // a must be equal to b
    return 0;
  });
};


// Método para mostrar eventos por día
CalendarApp.prototype.showEventsByDay = function(day) {
  var _events = [];
  this.apts.forEach(function(apt, idx){
    if (day.toString() == apt.day.toString()) {
      apt.index = idx;
      _events.push(apt);
    }
  });
  return (_events.length) ? _events : false;
};


// Método para cerrar la ventana del día
CalendarApp.prototype.closeDayWindow = function(){
  this.dayViewEle.classList.remove("calendar--day-view-active");
  this.closeNewEventBox();
};


// Método para cerrar la ventana del calendario principal al hacer clic
CalendarApp.prototype.mainCalendarClickClose = function(e){
  if ( e.currentTarget != e.target ) {
    return;
  }
  
  this.dayViewEle.classList.remove("calendar--day-view-active");
  this.closeNewEventBox();
};


// Método para agregar una nueva caja de evento
CalendarApp.prototype.addNewEventBox = function(e){
  var target = e.currentTarget;
  this.dayEventBoxEle.setAttribute("data-active", "true"); 
  this.dayEventBoxEle.setAttribute("data-date", target.getAttribute("data-date"));
};

// Método para cerrar la nueva caja de evento
CalendarApp.prototype.closeNewEventBox = function(e){
  if (e && e.keyCode && e.keyCode != 13) return false;
  
  this.dayEventBoxEle.setAttribute("data-active", "false");
  // reset values
  this.resetAddEventBox();
};

// Método para guardar un nuevo evento
CalendarApp.prototype.saveAddNewEvent = function() {
  var saveErrors = this.validateAddEventInput();
  if ( !saveErrors ) {
    this.addEvent();
  }
};


// Método para añadir un evento
CalendarApp.prototype.addEvent = function() {
  // Obtener el nombre del evento
  var name = this.dayEventAddForm.nameEvent.value.trim();
  // Obtener la fecha del día del evento
  var dayOfDate = this.dayEventBoxEle.getAttribute("data-date");
  var dateObjectDay = new Date(dayOfDate);
  // Limpiar las fechas de inicio y fin del evento
  var cleanDates = this.cleanEventTimeStampDates();
  
  // Añadir el evento a la lista de eventos
  this.apts.push({
      name: name,
      day: dateObjectDay,
      startTime: cleanDates[0],
      endTime: cleanDates[1]
  });
  
  // Cerrar la ventana de agregar evento
  this.closeNewEventBox();
  // Mostrar la ventana del día del evento
  this.openDayWindow(dayOfDate);
  // Marcar el día seleccionado en el calendario como que tiene eventos
  this.calDaySelected.classList.add("has-events");
  
  // Añadir la fecha del evento a la lista de fechas si no existe
  if (this.aptDates.indexOf(dateObjectDay.toString()) === -1) {
      this.aptDates.push(dateObjectDay.toString());
  }
};


// Método para convertir a hora de 0 a 23
CalendarApp.prototype.convertTo23HourTime = function(stringOfTime, AMPM) {
  // Dividir la cadena de tiempo en horas y minutos
  var mins = stringOfTime.split(":");
  var hours = stringOfTime.trim();
  // Verificar si se proporcionan minutos en la cadena de tiempo
  if (mins[1] && mins[1].trim()) {
      // Convertir las horas y minutos a enteros
      hours = parseInt(mins[0].trim());
      mins = parseInt(mins[1].trim());
  } else {
      hours = parseInt(hours);
      mins = 0;
  }
  // Convertir a formato de 24 horas según la indicación AM/PM
  hours = (AMPM == 'am') ? ((hours == 12) ? 0 : hours) : (hours <= 11) ? parseInt(hours) + 12 : hours;
  // Retornar las horas y minutos en formato de 24 horas
  return [hours, mins];
};


// Método para limpiar las fechas de tiempo del evento
CalendarApp.prototype.cleanEventTimeStampDates = function() {
  // Obtener los valores de los campos de inicio y fin del evento
  var startTime = this.dayEventAddForm.startTime.value.trim() || this.dayEventAddForm.startTime.getAttribute("placeholder") || '8';
  var startAMPM = this.dayEventAddForm.startAMPM.value.trim() || this.dayEventAddForm.startAMPM.getAttribute("placeholder") || 'am';
  startAMPM = (startAMPM == 'a') ? startAMPM + 'm' : startAMPM;
  var endTime = this.dayEventAddForm.endTime.value.trim() || this.dayEventAddForm.endTime.getAttribute("placeholder") || '9';
  var endAMPM = this.dayEventAddForm.endAMPM.value.trim() || this.dayEventAddForm.endAMPM.getAttribute("placeholder") || 'pm';
  endAMPM = (endAMPM == 'p') ? endAMPM + 'm' : endAMPM;
  var date = this.dayEventBoxEle.getAttribute("data-date");
  
  // Convertir las horas de inicio y fin a formato de 24 horas
  var startingTimeStamps = this.convertTo23HourTime(startTime, startAMPM);
  var endingTimeStamps = this.convertTo23HourTime(endTime, endAMPM);
  
  // Obtener la fecha del evento
  var dateOfEvent = new Date(date);
  // Crear objetos de fecha para la fecha y hora de inicio y fin del evento
  var startDate = new Date(dateOfEvent.getFullYear(), dateOfEvent.getMonth(), dateOfEvent.getDate(), startingTimeStamps[0], startingTimeStamps[1]);
  var endDate = new Date(dateOfEvent.getFullYear(), dateOfEvent.getMonth(), dateOfEvent.getDate(), endingTimeStamps[0], endingTimeStamps[1]);
  
  // Si la fecha de fin es anterior a la fecha de inicio, establecer la fecha de fin un día después
  if (startDate > endDate) endDate.setDate(endDate.getDate() + 1);
  
  // Retornar un arreglo con la fecha y hora de inicio y fin del evento
  return [startDate, endDate];
};


// Método para validar la entrada de agregar evento
CalendarApp.prototype.validateAddEventInput = function() {
  // Bandera para indicar si hay errores
  var _errors = false;
  // Obtiene los valores de los campos del formulario
  var name = this.dayEventAddForm.nameEvent.value.trim();
  var startTime = this.dayEventAddForm.startTime.value.trim();
  var startAMPM = this.dayEventAddForm.startAMPM.value.trim();
  var endTime = this.dayEventAddForm.endTime.value.trim();
  var endAMPM = this.dayEventAddForm.endAMPM.value.trim();
  
  // Verifica si el campo de nombre está vacío
  if (!name || name == null) {
      // Si está vacío, establece la bandera de errores en true y agrega una clase de error al campo de nombre
      _errors = true;
      this.dayEventAddForm.nameEvent.classList.add("add-event-edit--error");
      this.dayEventAddForm.nameEvent.focus();
  } else {
      // Si el campo de nombre no está vacío, elimina la clase de error
      this.dayEventAddForm.nameEvent.classList.remove("add-event-edit--error");
  }
  
  // Retorna la bandera de errores
  return _errors;
};

// Variables para el control del tiempo y el elemento activo
var timeOut = null;
var activeEle = null;


// Método para limitar el cambio de entrada en un campo de entrada
CalendarApp.prototype.inputChangeLimiter = function(ele) {
  
  // Si el evento proviene del elemento actual, asignarlo a 'ele'
  if ( ele.currentTarget ) {
    ele = ele.currentTarget;
  }
  
  // Limpiar el temporizador anterior si existe y el elemento activo es el mismo que el actual
  if (timeOut && ele == activeEle){
    clearTimeout(timeOut);
  }
  
  // Obtener la función de limitación de opciones del prototipo de CalendarApp
  var limiter = CalendarApp.prototype.textOptionLimiter;

  // Obtener las opciones de límite y el formato del atributo del elemento
  var _options = ele.getAttribute("data-options").split(",");
  var _format = ele.getAttribute("data-format") || 'text';
  
  // Establecer un temporizador para limitar el cambio de entrada después de 600 ms
  timeOut = setTimeout(function(){
    ele.value = limiter(_options, ele.value, _format);
  }, 600);
  
  // Establecer el elemento actual como el activo
  activeEle = ele;
  
};

// Método para limitar las opciones de texto en un campo de entrada
CalendarApp.prototype.textOptionLimiter = function(options, input, format){
  if ( !input ) return '';
  
  // Si el formato es datetime y la entrada contiene ':', se procesa la entrada de tiempo
  if ( input.indexOf(":") !== -1 && format == 'datetime' ) {
 
      var _splitTime = input.split(':', 2);
      if (_splitTime.length == 2 && !_splitTime[1].trim()) return input;
      var _trailingTime = parseInt(_splitTime[1]);
      
      // limpiar los datos finales
      if (options.indexOf(_splitTime[0]) === -1) {
          return options[0];
      }
      else if (_splitTime[1] == "0" ) {
          return input;
      }
      else if (_splitTime[1] == "00" ) {
          return _splitTime[0] +  ":00";
      }
      else if (_trailingTime < 10 ) {
          return _splitTime[0] + ":" + "0" + _trailingTime;
      }
      else if ( !Number.isInteger(_trailingTime) || _trailingTime < 0 || _trailingTime > 59 )  {
          return _splitTime[0];
      } 
      return _splitTime[0] + ":" + _trailingTime;
  }
  
  // Si la longitud de la entrada es mayor o igual a 3, se procesa la entrada como hora
  if ((input.toString().length >= 3) ) {
      var pad = (input.toString().length - 4) * -1;
      var _hour, _min;
      if (pad == 1) {
          _hour = input[0];
          _min = input[1] + input[2];
      } else {
          _hour = input[0] + input[1];
          _min = input[2] + input[3];
      }
      
      _hour = Math.max(1,Math.min(12,(_hour)));
      _min = Math.min(59,(_min));
      if ( _min < 10 ) { 
          _min = "0" + _min;
      }
      _min = (isNaN(_min)) ? '00' : _min;
      _hour = (isNaN(_hour)) ? '9' : _hour ;
  
      return _hour + ":" + _min;
  }
  
  // Si la entrada no está en las opciones, se devuelve la primera opción
  if (options.indexOf(input) === -1) {
      return options[0];
  }
  
  // Si la entrada está en las opciones, se devuelve la misma entrada
  return input;
};

// Método para restablecer el formulario de agregar evento
CalendarApp.prototype.resetAddEventBox = function(){
  // Reinicia los valores y elimina cualquier clase de error del campo de nombre del evento
  this.dayEventAddForm.nameEvent.value = '';
  this.dayEventAddForm.nameEvent.classList.remove("add-event-edit--error");
  
  // Reinicia los valores de los campos de hora de inicio y fin, y los campos de meridiano
  this.dayEventAddForm.endTime.value = '';
  this.dayEventAddForm.startTime.value = '';
  this.dayEventAddForm.endAMPM.value = '';
  this.dayEventAddForm.startAMPM.value = '';
};

// Método para mostrar el nuevo mes en el calendario
CalendarApp.prototype.showNewMonth = function(e){
  // Obtiene la fecha del atributo dataset del evento
  var date = e.currentTarget.dataset.date;
  // Crea un nuevo objeto Date con la fecha obtenida
  var newMonthDate = new Date(date);
  // Muestra la vista del nuevo mes en el calendario
  this.showView(newMonthDate);
  // Cierra la ventana del día actual, si está abierta
  this.closeDayWindow();
  return true;
};

// Instancia un nuevo objeto de la aplicación del calendario
var calendar = new CalendarApp();
console.log(calendar);


