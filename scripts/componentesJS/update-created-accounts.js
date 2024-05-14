let form_update_users = document.querySelector('.form-update-users');
document.getElementById('id_rol').addEventListener('change', function() {
  let servicioSelect = document.getElementById('servicio_select');
  let campoPrograma = document.querySelector('.campo_programa');
  let campoFicha = document.querySelector('.campo_ficha');
  if (this.value == 3) {
    servicioSelect.style.display = 'none';
    campoPrograma.style.display = 'block';
    campoFicha.style.display = 'block';
  } else {
    servicioSelect.style.display = 'block';
    campoPrograma.style.display = 'none';
    campoFicha.style.display = 'none';
  }
})
form_update_users.addEventListener('submit', function(e){
  e.preventDefault();
  let form = new FormData(form_update_users);
  fetch('../../../../Proyecto_SendApp_2024/bases/mainInterfaz/backend/update-created-accounts.php', {
    method: 'POST',
    body: form
  })
  .then(response => {
    if (!response.ok){
      throw new Error('Hubo un error en la solicitud');
    }
    return response.json();
  })
  .then(data => {
    if (data.respuesta === 0) {
      let mensajeDiv = document.querySelector('.mensaje');
      let menuLink = document.querySelector('.users-form a');
      mensajeDiv.classList.remove('oculto');
      form_update_users.classList.add('oculto');
      menuLink.classList.add('oculto');
      setTimeout(function() {
      window.location.href = '../../../../Proyecto_SendApp_2024/interfaces/Administrador/Administrador.php';
      }, 1000); // 1000 milisegundos = 1 segundos
    }else {
      console.log('Error!!! 404');
    }
  })
  .catch(Error => {
    console.error(Error);
  })
})

// Función para confirmar activar usuario
function confirmarActivar(documento_identidad) {
    let confirmacion = confirm('¿Estás seguro de que quieres activar este usuario?');
    return confirmacion;
}

// Función para confirmar desactivar usuario
function confirmarDesactivar(documento_identidad) {
    let confirmacion = confirm('¿Estás seguro de que quieres desactivar este usuario?');
    return confirmacion;
}