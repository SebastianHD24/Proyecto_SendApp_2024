//Selecionamos el boton que esta en HTML
const expand_btn = document.querySelector(".expand-btn");

let activeIndex;

//opcion de los botones ocultos
const inicio = document.getElementById('inicio');
const perfil = document.getElementById('perfil');

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

    //Para cada link mostramos su nombre si el puntero del mouse esta encima de lo contrario no.
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