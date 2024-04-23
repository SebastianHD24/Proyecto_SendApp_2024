//  const productos = [
//      {
//         id: "servicios",
//         titulo: "Servicios",
//          imagen: "/",
//         categoria: {
//            nombre: "servicios",
//             id: "servicios"
//          },
//          precio: 1000
//      },
//      {
//         id: "citas",
//          titulo: "Mis citas",
//          imagen: "/",
//          categoria: {
//              nombre: "Mis citas",
//             id: "citas"
//          },
//          precio: 1000
//      },
//      {
//          id: "notificacioones",
//          titulo: "Noti",
//          imagen: "/",
//          categoria: {
//              nombre: "noti",
//              id: "notificaciones"
//          },
//          precio: 1000
//      },
//      {
//          id: "pqr",
//          titulo: "pqr",
//          imagen: "/",
//          categoria: {
//              nombre: "preguntas",
//              id: "pqr"
//          },
//          precio: 1000
//      },
//      {
//          id: "perfil",
//          titulo: "prfile",
//          imagen: "/",
//          categoria: {
//              nombre: "perfil",
//              id: "perfil"
//          },
//          precio: 1000
//      },
//      {
//          id: "perfil",
//          titulo: "prfile",
//          imagen: "/",
//          categoria: {
//              nombre: "perfil",
//              id: "perfil"
//          },
//          precio: 1000
//      },
//      {
//          id: "perfil",
//          titulo: "prfile",
//          imagen: "/",
//          categoria: {
//              nombre: "perfil",
//              id: "perfil"
//          },
//          precio: 1000
//      },
//      {
//         id: "perfil",
//         titulo: "prfile",
//         imagen: "/",
//         categoria: {
//             nombre: "perfil",
//             id: "perfil"
//         },
//         precio: 1000
//     },
//     {
//         id: "perfil",
//         titulo: "prfile",
//         imagen: "/",
//         categoria: {
//             nombre: "perfil",
//             id: "perfil"
//         },
//         precio: 1000
//     },
//     {
//         id: "perfil",
//         titulo: "prfile",
//         imagen: "/",
//         categoria: {
//             nombre: "perfil",
//             id: "perfil"
//         },
//         precio: 1000
//     },
//     {
//         id: "perfil",
//         titulo: "prfile",
//         imagen: "/",
//         categoria: {
//             nombre: "perfil",
//             id: "perfil"
//         },
//         precio: 1000
//     },
//  ];
// // console.log(productos[0]);
// // // Selecciona el elemento HTML con el ID "contenedor-productos" y lo asigna a la variable contenedorProductos.
//  const contenedorProductos = document.querySelector("#contenedor-productos");

// // // Selecciona todos los elementos HTML con la clase "boton-categoria" y los asigna a la variable botonesCategorias.
 const botonesCategorias = document.querySelectorAll(".boton-categoria");

// // // Se define una función llamada cargarProductos que toma un array de productos como argumento.
//  function cargarProductos(productosElegidos) {
//      // Vacía el contenido del contenedor de productos.
//      contenedorProductos.innerHTML = "";

//     // Itera sobre cada producto en el array de productos elegidos.
//     productosElegidos.forEach(producto => {
//          // Crea un nuevo elemento div.
//          const div = document.createElement("div");
//          // Añade la clase "producto" al nuevo div.
//          div.classList.add("producto");
//          // Define el HTML interno del nuevo div con información del producto actual.
//         div.innerHTML = `
//         <img class="producto-imagen" src="${producto.imagen}" alt="${producto.titulo}">
//          <div class="producto-detalles">
//          <h3 class="produco-titulo">${producto.titulo}</h3>
//          <p class="producto-precio">$${producto.precio}</p>
//         <button class="producto-agregar" id="${producto.id}">Agregar</button>
//          </div>`;

//          // Añade el nuevo div al contenedor de productos.
//          contenedorProductos.append(div);
//      });
//  };

// // Llama a la función cargarProductos con el array de productos como argumento para cargar los productos en la página.
//

// Itera sobre cada botón de categoría.
botonesCategorias.forEach(boton => {
    // Agrega un event listener para el evento "click" a cada botón.
    boton.addEventListener("click", (e) => {
        // Remueve la clase "active" de todos los botones de categoría.
        botonesCategorias.forEach(boton => boton.classList.remove("active"));
        // Agrega la clase "active" al botón de categoría que fue clickeado.
        e.currentTarget.classList.add("active");

        // Si el botón clickeado no es el botón con el ID "todos".
        if (e.currentTarget.id != 'todos') {
            // Filtra los productos por la categoría correspondiente al botón clickeado.
            const productosBoton = productos.filter(producto => producto.categoria.id === e.currentTarget.id);
            // Carga los productos filtrados en la página.
            cargarProductos(productosBoton);
        } else {
            // Si se clickea en el botón "todos", muestra todos los productos.
            cargarProductos(productos);
        }
    });
});