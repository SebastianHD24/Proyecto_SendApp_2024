document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const form = e.target;
            const formData = new FormData(form);
            
            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                const messageDiv = document.getElementById('alerta');
                const registerForm = document.getElementById('registerForm');

                if (data.success === 6) {
                    registerForm.style.display = 'none';
                    // messageDiv.className = 'message_success';
                    // messageDiv.innerText = 'Registro grabado correctamente.';
                    messageDiv.style.display = 'flex';
                    setTimeout(function() {
                        messageDiv.style.display = 'flex';
                        window.location.href = '../../../../Proyecto_SendApp_2024/interfaces/Administrador/Administrador.php';
                    }, 3000); //3000 milisegundos = 3 segundos
                } else if (data.success === 1) {
                    const error = document.getElementById('mensaje_errord');
                    const limpiarC = document.getElementById('login-input-user-d');
                    error.textContent = "El numero de documento debe ser mayor a 5 digitos.";
                    limpiarC.value = "";

                    const error2 = document.getElementById('mensaje_errore');
                    error2.textContent = "No se pudo registrar, verifique los campos.";
                } else if (data.success === 2) {
                    const error = document.getElementById('mensaje_errorc');
                    const limpiarC = document.getElementById('login-input-password-p');
                    error.textContent = "La contraseña debe ser mayor a 6 digitos.";
                    limpiarC.value = "";

                    const error2 = document.getElementById('mensaje_errore');
                    error2.textContent = "No se pudo registrar, verifique los campos.";
                } else if (data.success === 3) {
                    const error = document.getElementById('mensaje_errorc');
                    const limpiarC = document.getElementById('login-input-password-p');
                    error.textContent = "La contraseña debe tener una mayuscula, un numero y un caracter especial.";
                    limpiarC.value = "";

                    const error2 = document.getElementById('mensaje_errore');
                    error2.textContent = "No se pudo registrar, verifique los campos.";
                } else if (data.success === 4) {
                    const error = document.getElementById('mensaje_errord');
                    const limpiarC = document.getElementById('login-input-user-d');
                    error.textContent = "El numero de documento debe ser mayor a 5 digitos.";
                    limpiarC.value = "";

                    const error2 = document.getElementById('mensaje_errorc');
                    const limpiarC2 = document.getElementById('login-input-password-p');
                    error2.textContent = "La contraseña debe ser mayor a 6 digitos, debe tener una mayuscula, un numero y un caracter especial.";
                    limpiarC2.value = "";

                    const error3 = document.getElementById('mensaje_errore');
                    error3.textContent = "No se pudo registrar, verifique los campos.";
                } else if (data.success === 5) {
                    const error = document.getElementById('mensaje_errord');
                    error.textContent = "Documento ya registrado.";
                } else {
                    messageDiv.className = 'message_error';
                    messageDiv.innerText = 'Error desconocido. Inténtelo de nuevo.';
                }
            })
            .catch(error => console.error('Error:', error));
            });