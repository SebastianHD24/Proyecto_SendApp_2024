

// Agregar un evento de clic a los elementos "Áreas" para mostrar/ocultar el menú
document.querySelectorAll('li.dropdown').forEach(item => {
    item.addEventListener('click', function() {
        const submenu = this.querySelector('.areas-mas');
        submenu.classList.toggle('show');
    });
    
    // Agregar un evento de clic al elemento "Bienestar al aprendiz" para mostrar/ocultar el menú "Bienestar"
    const bienestarItem = item.querySelector('.areas-mas > li.dropdown');
    bienestarItem.addEventListener('click', function(e) {
        e.stopPropagation(); // Evitar que el clic se propague al menú "Áreas"
        const bienestarSubmenu = this.querySelector('.areas-bienestar');
        bienestarSubmenu.classList.toggle('show');
    });
});

// Cerrar todos los menús desplegables al hacer clic en cualquier parte de la página
window.addEventListener('click', function(e) {
    document.querySelectorAll('.areas-mas, .areas-bienestar').forEach(item => {
        if (!item.contains(e.target)) {
            item.classList.remove('show');
        }
    });
});

//Menu Hamburguesa
document.querySelector(".bars__menu").addEventListener("click", animarBar);

let line1_bars = document.querySelector(".line1__bars-menu");
let line2_bars = document.querySelector(".line2__bars-menu");
let line3_bars = document.querySelector(".line3__bars-menu");

//Funcion para animar la barra
function animarBar(){
    line1_bars.classList.toggle("activeline1__bars-menu");
    line2_bars.classList.toggle("activeline2__bars-menu");
    line3_bars.classList.toggle("activeline3__bars-menu");
}

//boton
