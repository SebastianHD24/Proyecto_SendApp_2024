const openMenu = document.querySelector("#open-menu");
const closeMenu = document.querySelector("#close-menu");
const aside = document.querySelector("aside");

// Agregar evento al botón de abrir menú
openMenu.addEventListener("click", () => {
    // Si el menú está visible, lo cerramos
    if (aside.classList.contains("aside-visible")) {
        aside.classList.remove("aside-visible");
    } else {
        // Si no está visible, lo abrimos
        aside.classList.add("aside-visible");
    }
});

// Agregar evento al botón de cerrar menú
closeMenu.addEventListener("click", () => {
    // Remover la clase para cerrar el menú
    aside.classList.remove("aside-visible");
});

// Iterar sobre cada botón de categoría para cerrar el menú al hacer clic
botonesCategorias.forEach(boton => boton.addEventListener("click", () => {
    aside.classList.remove("aside-visible");
}));
