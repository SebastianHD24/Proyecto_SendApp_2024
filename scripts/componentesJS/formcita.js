let buttonBienestar = document.getElementById('Bienestar');
let contenedor = document.querySelector('.container');
let div_container = document.querySelector('.div__content');

buttonBienestar.addEventListener('click', function(){
    contenedor.classList.remove('oculto');
    div_container.classList.add('oculto');
});
console.log("hola puto")
