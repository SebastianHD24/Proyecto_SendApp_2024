<?php
  //Pequeña logica para capturar el componente que se quiere mostrar
  $component = isset($_GET['p']) ? strtolower($_GET['p']) : 'created-acount'; 

  // Verificar si el archivo del componente existe
  $rutaComponent = '../../../Proyecto_SendApp_2024/bases/mainInterfaz/componentes/' . $component . '.php';
  
  if (!file_exists($rutaComponent)) {
      // Si el archivo del componente no existe, redirigir a 'created-acounts'
      $component = 'created-acounts';
  }

  //Fragmento de html que contiene la cabecera de nuestra web
  require_once '../../../Proyecto_SendApp_2024/bases/mainInterfaz/header.php';

  //Fragmento html que contiene el componente de la pagina
  require_once '../../../Proyecto_SendApp_2024/bases/mainInterfaz/componentes/' . $component . '.php';

  //Fragmento que contiene el pie de la pagina
  require_once '../../../Proyecto_SendApp_2024/bases/mainInterfaz/footer.php';