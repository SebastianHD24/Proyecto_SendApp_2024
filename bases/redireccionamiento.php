<?php

    //Este script de php redirecciona al usuario fuera de un componente en el que no tenga permisos 

    // Obtener la URL de la página actual
    $urlActual = $_SERVER['REQUEST_URI'];

    // Obtener la cadena de consulta de la URL
    $consultaURL = parse_url($urlActual, PHP_URL_QUERY);

    // Verificar si el usuario tiene un ID de rol diferente de 1 y si la cadena de consulta contiene parámetros
    if ($consultaURL) {
        // Convertir la cadena de consulta en un array asociativo de parámetros
        parse_str($consultaURL, $parametrosURL);

        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'serviciosAdmin'
        if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'serviciosAdmin') {
            if($id_rol == 3){ //En caso de ser aprendiz lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'servicios'
                $parametrosURL['p'] = 'servicios';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            } 
            else if($id_rol == 2){ //En caso de ser funcionario lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'mi_agenda'
                $parametrosURL['p'] = 'mi_agenda';
                
                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);
                
                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;
                
                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'mi_agenda'
        else if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'mi_agenda') {
            if($id_rol == 1){ //En caso de ser admin lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'created-acounts'
                $parametrosURL['p'] = 'created-acounts';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            } 
            else if($id_rol == 3){ //En caso de ser aprendiz lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'servicios'
                $parametrosURL['p'] = 'servicios';
                
                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);
                
                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;
                
                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'PQR'
        else if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'pqr') {
            if($id_rol == 1){ //En caso de ser admin lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'created-acounts'
                $parametrosURL['p'] = 'created-acounts';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'citas'
        else if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'citas') {
            if($id_rol == 1){ //En caso de ser admin lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'created-acounts'
                $parametrosURL['p'] = 'created-acounts';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'servicios'
        else if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'servicios') {
            if($id_rol == 1){ //En caso de ser admin lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'created-acounts'
                $parametrosURL['p'] = 'created-acounts';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            } 
            else if($id_rol == 2){ //En caso de ser funcionario lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'mi_agenda'
                $parametrosURL['p'] = 'mi_agenda';
                
                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);
                
                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;
                
                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'notificaciones'
        else if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'notificaciones') {
            if($id_rol == 1){ //En caso de ser admin lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'created-acounts'
                $parametrosURL['p'] = 'created-acounts';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'notifiAdmin'
        else if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'notifiAdmin') {
            if($id_rol == 2){ //En caso de ser funcionario lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'mi_agenda'
                $parametrosURL['p'] = 'mi_agenda';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
            else if($id_rol == 3){ //En caso de ser aprendiz lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'servicios'
                $parametrosURL['p'] = 'servicios';
                
                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);
                
                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;
                
                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'citaspendiente'
        else if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'citaspendiente') {
            if($id_rol == 1){ //En caso de ser admin lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'created-acounts'
                $parametrosURL['p'] = 'created-acounts';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
            else if($id_rol == 3){ //En caso de ser aprendiz lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'servicios'
                $parametrosURL['p'] = 'servicios';
                
                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);
                
                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;
                
                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'created-acounts'
        else if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'created-acounts') {
            if($id_rol == 2){ //En caso de ser funcionario lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'mi_agenda'
                $parametrosURL['p'] = 'mi_agenda';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
            else if($id_rol == 3){ //En caso de ser aprendiz lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'servicios'
                $parametrosURL['p'] = 'servicios';
                
                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);
                
                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;
                
                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
        // Verificar si el parámetro 'p' está presente en el array de parámetros y si su valor es 'aceptarcita'
        else if (isset($parametrosURL['p']) && $parametrosURL['p'] === 'aceptarcita') {
            if($id_rol == 1){ //En caso de ser admin lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'created-acounts'
                $parametrosURL['p'] = 'created-acounts';

                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);

                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;

                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
            else if($id_rol == 3){ //En caso de ser aprendiz lo lleva a su componente predeterminado

                // Cambiar el valor del parámetro 'p' a 'servicios'
                $parametrosURL['p'] = 'servicios';
                
                // Reconstruir la cadena de consulta con el nuevo valor del parámetro 'p'
                $nuevaConsultaURL = http_build_query($parametrosURL);
                
                // Reconstruir la URL con la nueva cadena de consulta
                $nuevaURL = strtok($urlActual, '?') . '?' . $nuevaConsultaURL;
                
                // Redirigir a la nueva URL
                header('Location: ' . $nuevaURL);
                exit();
            }
        }
    } 