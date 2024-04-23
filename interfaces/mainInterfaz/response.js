const openMenu = document.querySelector("#open-menu");
const closeMenu = document.querySelector("#close-menu");
const aside = document.querySelector("aside");


openMenu.addEventListener("click", () => {
    // Cuando se hace clic en el botón de abrir menú, agrega la clase "aside-visible" al elemento "aside".
    aside.classList.add("aside-visible");
});


closeMenu.addEventListener("click", () => {
    // Cuando se hace clic en el botón de cerrar menú, remueve la clase "aside-visible" del elemento "aside".
    aside.classList.remove("aside-visible");
});

// Itera sobre cada botón de categoría.
botonesCategorias.forEach(boton => boton.addEventListener("click", () =>{
    // Agrega un event listener para el evento "click" a cada botón de categoría.
    // Cuando se hace clic en cualquier botón de categoría, remueve la clase "aside-visible" del elemento "aside".
    aside.classList.remove("aside-visible");
}));
