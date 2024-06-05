
document.addEventListener('DOMContentLoaded', function() {
    const elementos = document.querySelectorAll('.izquierda, .derecha'); //se llaman las dos clases 
    
    //se crean dos variables para que la animación solo se ejecute una vez para cada contenedor.
    let animadoDerecha = false;
    let animadoIzquierda = false;

    function verificarScroll() {
        elementos.forEach(elemento => {
            const rect = elemento.getBoundingClientRect(); //sirve para obtener el tamaño y la posición del elemento, en este caso el contenedor.
            const ventanaAltura = window.innerHeight || document.documentElement.clientHeight; //sirve para obtener la altura de la ventana del navegador.

            // condicion para que se ejecute la animacion de mision
            if (elemento.classList.contains('izquierda') && !animadoIzquierda && rect.top <= ventanaAltura) {
                elemento.classList.add('animada');
                animadoIzquierda = true;  //sirve para que cuando se ejecute la animacion no se repita
            }

            // condicion para que se ejecute la animacion de vision
            if (elemento.classList.contains('derecha') && !animadoDerecha && rect.top <= ventanaAltura) {
                elemento.classList.add('animada');
                animadoDerecha = true; //sirve para que cuando se ejecute la animacion no se repita
            }

        });
    }

    window.addEventListener('scroll', verificarScroll);
    verificarScroll();
});
