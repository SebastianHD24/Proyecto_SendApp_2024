//Cambiar color de la tarjeta
function cambiarColor(){
    let tarje = document.getElementById("Tarjeta");
    tarje.classList.toggle("cambio");
}

//para expandir
document.addEventListener("DOMContentLoaded", function() {
    let BotonLeerMas = document.querySelectorAll('.leerMas');
    let BotonLeerMenos = document.querySelectorAll('.leerMenos');

    BotonLeerMas.forEach(function(button, index) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            let expandirContenido = this.nextElementSibling;
            let botonLeerMenos = BotonLeerMenos[index];

            expandirContenido.style.display = 'block';
            botonLeerMenos.style.display = 'inline';
            this.style.display = 'none'; 
        });
    });
//Para contraer
     BotonLeerMenos.forEach(function(button) {
          button.addEventListener('click', function(event) {
              event.preventDefault();
              let ContraerCintenido = this.previousElementSibling;
              let botonLeerMas = ContraerCintenido.previousElementSibling;

              ContraerCintenido.style.display = 'none';
              botonLeerMas.style.display = 'inline'; 
              this.style.display = 'none'; 
          });
      });
 });