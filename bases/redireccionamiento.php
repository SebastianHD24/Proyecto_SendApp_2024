<?php
    // Este script de PHP redirecciona al usuario fuera de un componente en el que no tenga permisos

    // URL sin parámetros
    $urlActualSinParametro = strtok($_SERVER['REQUEST_URI'], '?');

    // Dividir la URL en partes
    $partesURL = explode('/', trim($urlActualSinParametro, '/'));

    // Obtener la penúltima y la última sección
    $penultimaSeccion = $partesURL[count($partesURL) - 2];
    $ultimaSeccion = $partesURL[count($partesURL) - 1];

    if ($id_rol == 1) {
        if ((strcasecmp($penultimaSeccion, 'Funcionario') === 0 && strcasecmp($ultimaSeccion, 'funcionario.php') === 0) || (strcasecmp($penultimaSeccion, 'Usuario') === 0 && strcasecmp($ultimaSeccion, 'usuarioSesion.php') === 0) ) {
            // Cambiar la penúltima sección a 'administrador' y la última a 'administrador.php'
            $partesURL[count($partesURL) - 2] = 'Administrador';
            $partesURL[count($partesURL) - 1] = 'Administrador.php';
            // Reconstruir la nueva URL
            $nuevaURL = '/' . implode('/', $partesURL);
            // Redirigir a la nueva URL
            header('Location: ' . $nuevaURL);
            exit();
        }  
    } 

    else if ($id_rol == 2) {
        if ((strcasecmp($penultimaSeccion, 'Administrador') === 0 && strcasecmp($ultimaSeccion, 'Administrador.php') === 0) || (strcasecmp($penultimaSeccion, 'Usuario') === 0 && strcasecmp($ultimaSeccion, 'usuarioSesion.php') === 0) ) {
            // Cambiar la penúltima sección a 'administrador' y la última a 'administrador.php'
            $partesURL[count($partesURL) - 2] = 'Funcionario';
            $partesURL[count($partesURL) - 1] = 'funcionario.php';
            // Reconstruir la nueva URL
            $nuevaURL = '/' . implode('/', $partesURL);
            // Redirigir a la nueva URL
            header('Location: ' . $nuevaURL);
            exit();
        }  
    }

    else if ($id_rol == 3) {
        if ((strcasecmp($penultimaSeccion, 'Administrador') === 0 && strcasecmp($ultimaSeccion, 'Administrador.php') === 0) || (strcasecmp($penultimaSeccion, 'Funcionario') === 0 && strcasecmp($ultimaSeccion, 'funcionario.php') === 0) ) {
            // Cambiar la penúltima sección a 'administrador' y la última a 'administrador.php'
            $partesURL[count($partesURL) - 2] = 'Usuario';
            $partesURL[count($partesURL) - 1] = 'usuarioSesion.php';
            // Reconstruir la nueva URL
            $nuevaURL = '/' . implode('/', $partesURL);
            // Redirigir a la nueva URL
            header('Location: ' . $nuevaURL);
            exit();
        }  
    }

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