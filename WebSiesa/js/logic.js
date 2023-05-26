//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// ----------------------------------------------Principal----------------------------------------------------------
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

var url = window.location.href;
console.log(url);

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
if (url == "http://localhost/WebSiesa/") {
  console.log(url);
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Marcas Inicio ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  window.addEventListener("load", function () {
    new Glider(document.querySelector(".carousel__lista"), {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: ".carousel__indicadores",
      arrows: {
        prev: ".carousel__anterior",
        next: ".carousel__siguiente",
      },
      responsive: [
        {
          // screens greater than >= 775px
          breakpoint: 450,
          settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          // screens greater than >= 1024px
          breakpoint: 800,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
      ],
    });
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Marcas Fin ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
} else if (url == "http://localhost/WebSiesa/index.php") {
  console.log(url);

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Marcas Inicio ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  window.addEventListener("load", function () {
    new Glider(document.querySelector(".carousel__lista"), {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: ".carousel__indicadores",
      arrows: {
        prev: ".carousel__anterior",
        next: ".carousel__siguiente",
      },
      responsive: [
        {
          // screens greater than >= 775px
          breakpoint: 450,
          settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          // screens greater than >= 1024px
          breakpoint: 800,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
      ],
    });
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Marcas Fin ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
} else if (url == "http://localhost/WebSiesa/index.php#about") {
  console.log(url);
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Marcas Inicio ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  window.addEventListener("load", function () {
    new Glider(document.querySelector(".carousel__lista"), {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: ".carousel__indicadores",
      arrows: {
        prev: ".carousel__anterior",
        next: ".carousel__siguiente",
      },
      responsive: [
        {
          // screens greater than >= 775px
          breakpoint: 450,
          settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          // screens greater than >= 1024px
          breakpoint: 800,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
      ],
    });
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Marcas Fin ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
} else if (url == "http://localhost/WebSiesa/index.php#services") {
  console.log(url);
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Marcas Inicio ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  window.addEventListener("load", function () {
    new Glider(document.querySelector(".carousel__lista"), {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: ".carousel__indicadores",
      arrows: {
        prev: ".carousel__anterior",
        next: ".carousel__siguiente",
      },
      responsive: [
        {
          // screens greater than >= 775px
          breakpoint: 450,
          settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          // screens greater than >= 1024px
          breakpoint: 800,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
      ],
    });
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Marcas Fin ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
} else if (url == "http://localhost/WebSiesa/products.php") {
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //Filtro Web productos
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  const item = document.querySelectorAll(".principal>li");
  const itemS1 = document.querySelectorAll(".ProductosDeControl>li");
  const itemS2 = document.querySelectorAll(".MandoSenalizacion>li");
  const itemS3 = document.querySelectorAll(".SeccionadoresTransferencias>li");
  const itemS4 = document.querySelectorAll(".Protecciones>li");
  const espacio = document.getElementById("filtro");
  var tamano = window.matchMedia("(max-width: 800px)");

  const producto = document.querySelectorAll(
    ".contenido-producto>.carta-poducto"
  );

  item.forEach((li) => {
    li.onclick = function () {
      item.forEach((li) => {
        li.className = "";
      });

      li.className = "active";

      const value = li.textContent;

      producto.forEach((div) => {
        div.style.display = "none";

        if (value == "Todos") {
          div.style.display = "inline-block";
        }
      });

      switch (value) {
        case "Productos de Control":
          itemS1.forEach((li) => {
            li.className = "";
          });

          itemS1.forEach((li) => {
            li.style.display = "flex";
            li.style.marginBottom = "-40px";
            espacio.style.height = "auto";

            li.onclick = function () {
              itemS1.forEach((li) => {
                li.className = "";
              });

              li.className = "active";

              const product = li.textContent;

              producto.forEach((div) => {
                div.style.display = "none";

                if (
                  product == "Todos" &&
                  div.getAttribute("data-filter1") == value
                ) {
                  div.style.display = "inline-block";
                }

                if (
                  div.getAttribute("data-filter1") == value &&
                  div.getAttribute("data-filter2") == product
                ) {
                  div.style.display = "inline-block";
                }
              });
            };
          });

          itemS2.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS3.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS4.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          break;
        case "Mando y Señalización":
          itemS1.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS2.forEach((li) => {
            li.className = "";
          });

          itemS2.forEach((li) => {
            li.style.display = "flex";
            li.style.marginTop = "-20px";
            li.style.marginBottom = "-30px";
            espacio.style.height = "auto";

            li.onclick = function () {
              itemS2.forEach((li) => {
                li.className = "";
              });

              li.className = "active";

              const product = li.textContent;

              producto.forEach((div) => {
                div.style.display = "none";

                if (
                  product == "Todos" &&
                  div.getAttribute("data-filter1") == value
                ) {
                  div.style.display = "inline-block";
                }

                if (
                  div.getAttribute("data-filter1") == value &&
                  div.getAttribute("data-filter2") == product
                ) {
                  div.style.display = "inline-block";
                }
              });
            };
          });

          itemS3.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS4.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          break;
        case "Seccionadores y Transferencias":
          itemS1.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });
          itemS2.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS3.forEach((li) => {
            li.className = "";
          });

          itemS3.forEach((li) => {
            li.style.display = "flex";
            li.style.marginTop = "-40px";
            li.style.marginBottom = "5px";
            espacio.style.height = "auto";

            li.onclick = function () {
              itemS3.forEach((li) => {
                li.className = "";
              });

              li.className = "active";

              const product = li.textContent;

              producto.forEach((div) => {
                div.style.display = "none";

                if (
                  product == "Todos" &&
                  div.getAttribute("data-filter1") == value
                ) {
                  div.style.display = "inline-block";
                }

                if (
                  div.getAttribute("data-filter1") == value &&
                  div.getAttribute("data-filter2") == product
                ) {
                  div.style.display = "inline-block";
                }
              });
            };
          });

          itemS4.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          break;
        case "Protecciones":
          itemS1.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS2.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS3.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS4.forEach((li) => {
            li.className = "";
          });

          itemS4.forEach((li) => {
            li.style.display = "flex";
            li.style.marginTop = "-60px";
            li.style.marginBottom = "15px";
            espacio.style.height = "auto";

            li.onclick = function () {
              itemS4.forEach((li) => {
                li.className = "";
              });

              li.className = "active";

              const product = li.textContent;

              producto.forEach((div) => {
                div.style.display = "none";

                if (
                  product == "Todos" &&
                  div.getAttribute("data-filter1") == value
                ) {
                  div.style.display = "inline-block";
                }

                if (
                  div.getAttribute("data-filter1") == value &&
                  div.getAttribute("data-filter2") == product
                ) {
                  div.style.display = "inline-block";
                }
              });
            };
          });

          break;

          itemS1.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });
          itemS2.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS3.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS3.forEach((li) => {
            li.style.display = "flex";
            li.style.marginTop = "-40px";
            li.style.marginBottom = "5px";
            espacio.style.height = "140px";

            li.onclick = function () {
              itemS3.forEach((li) => {
                li.className = "";
              });

              li.className = "active";

              const product = li.textContent;

              producto.forEach((div) => {
                div.style.display = "none";

                if (
                  product == "Todos" &&
                  div.getAttribute("data-filter1") == value
                ) {
                  div.style.display = "inline-block";
                }

                if (
                  div.getAttribute("data-filter1") == value &&
                  div.getAttribute("data-filter2") == product
                ) {
                  div.style.display = "inline-block";
                }
              });
            };
          });

          itemS4.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          break;
        default:
          espacio.style.height = "80px";

          itemS1.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS2.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS3.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });

          itemS4.forEach((li) => {
            li.style.display = "none";
            li.className = "";
          });
          break;
      }
    };
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // Filtro Responsive productos
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  let $categoria = document.getElementById("categoria");
  let $subcategoria = document.getElementById("subcategoria");

  let categoria = [
    "Productos de Control",
    "Mando y Señalización",
    "Seccionadores y Transferencias",
    "Protecciones",
  ];
  let subcategoria1 = [
    "Contadores",
    "Reles Térmicos",
    "Reles Enchufables",
    "Reles Temporizadores",
  ];
  let subcategoria2 = ["Selectores", "Botones", "Luces Piloto", "Joystics"];
  let subcategoria3 = [
    "Seccionadores Porta Fusibles",
    "Seccionadores Desconectadores",
    "Transferencias Manuales",
    "Transferencias Automáticas",
  ];
  let subcategoria4 = [
    "Interruptores en Caja Moldeada",
    "Interruptores Montaje en Riel",
    "Interruptores Abiertos",
    "Interruptores Diferenciales",
  ];

  function mostrarCategoria(arreglo, categoria) {
    let elementos = "<option selected disabled>SELECCIONE UNA OPCIÓN</option>";

    for (let i = 0; i < arreglo.length; i++) {
      elementos +=
        '<option value="' + arreglo[i] + '">' + arreglo[i] + "</option>";
    }

    categoria.innerHTML = elementos;
  }

  mostrarCategoria(categoria, $categoria);

  $categoria.addEventListener("change", function () {
    let valor = $categoria.value;

    switch (valor) {
      case "Productos de Control":
        let contenido1 = subcategoria1.slice(0, 4);

        mostrarCategoria(contenido1, $subcategoria);

        $subcategoria.addEventListener("change", function () {
          let valorSub = $subcategoria.value;

          producto.forEach((div) => {
            div.style.display = "none";

            if (
              div.getAttribute("data-filter1") == valor &&
              div.getAttribute("data-filter2") == valorSub
            ) {
              div.style.display = "inline-block";
            }
          });
        });

        break;

      case "Mando y Señalización":
        let contenido2 = subcategoria2.slice(0, 4);
        mostrarCategoria(contenido2, $subcategoria);

        $subcategoria.addEventListener("change", function () {
          let valorSub = $subcategoria.value;

          producto.forEach((div) => {
            div.style.display = "none";

            if (
              div.getAttribute("data-filter1") == valor &&
              div.getAttribute("data-filter2") == valorSub
            ) {
              div.style.display = "inline-block";
            }
          });
        });

        break;

      case "Seccionadores y Transferencias":
        let contenido3 = subcategoria3.slice(0, 4);
        mostrarCategoria(contenido3, $subcategoria);

        $subcategoria.addEventListener("change", function () {
          let valorSub = $subcategoria.value;

          producto.forEach((div) => {
            div.style.display = "none";

            if (
              div.getAttribute("data-filter1") == valor &&
              div.getAttribute("data-filter2") == valorSub
            ) {
              div.style.display = "inline-block";
            }
          });
        });

        break;

      case "Protecciones":
        let contenido4 = subcategoria4.slice(0, 4);
        mostrarCategoria(contenido4, $subcategoria);

        $subcategoria.addEventListener("change", function () {
          let valorSub = $subcategoria.value;

          producto.forEach((div) => {
            div.style.display = "none";

            if (
              div.getAttribute("data-filter1") == valor &&
              div.getAttribute("data-filter2") == valorSub
            ) {
              div.style.display = "inline-block";
            }
          });
        });

        break;
    }
  });
} else if (url == "http://localhost/WebSiesa/projects.php") {
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Empresas Inicio ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  window.addEventListener("load", function () {
    new Glider(document.querySelector(".carousel__lista"), {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: ".carousel__indicadores",
      arrows: {
        prev: ".carousel__anterior",
        next: ".carousel__siguiente",
      },
      responsive: [
        {
          // screens greater than >= 775px
          breakpoint: 450,
          settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          // screens greater than >= 1024px
          breakpoint: 800,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
      ],
    });
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // ----------------------------------------Slider de Empresas Fin ------------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //------------------------------------------ Filtro Web proyectos Inicio ----------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  const proyecto = document.querySelectorAll(
    /* ".contenidoProyecto .cartaProyecto" */ ".card"
  );

  let $empresa = document.getElementById("empresa");

  let empresas = [
    "Todos",
    "Aceti-Oxígeno",
    "Panama Ports",
    "Centro  de Convenciones CCA",
    "Industrias Lácteas",
    "Colon Conteiner",
    "Torres del Alba",
    "Copeg",
    "Moldeados Panameños",
  ];

  function mostrarEmpresas(arreglo, empresa) {
    let elementos = "<option selected disabled>SELECCIONE UNA EMPRESA</option>";

    for (let i = 0; i < arreglo.length; i++) {
      elementos +=
        '<option value="' + arreglo[i] + '">' + arreglo[i] + "</option>";
    }

    empresa.innerHTML = elementos;
  }

  mostrarEmpresas(empresas, $empresa);

  $empresa.addEventListener("change", function () {
    let valorEmp = $empresa.value;

    proyecto.forEach((div) => {
      div.style.display = "none";

      console.log(div);

      if (div.getAttribute("data-filter") == valorEmp) {
        div.style.display = "flex";
      } else if (valorEmp == "Todos") {
        div.style.display = "flex";
      }
    });
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //------------------------------------------ Filtro Web proyectos Fin -------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //------------------------------------------ Modal proyectos Inicio -------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  $(document).ready(function () {
    $(".proyinfo").click(function () {
      var proyid = $(this).data("id");
      $.ajax({
        url: "projetsInfo.php",
        type: "post",
        data: { proyid: proyid },
        success: function (response) {
          $(".modal-body").html(response);
          $("#empModal").modal("show");
        },
      });
    });
  });

  // 1. Inicializar un mapa básico
  function iniciarMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 15,
      center: {
        lat: 8.9936,
        lng: -79.51973,
      },
    });

    // 2. Inicializar la API de GeoCoder
    const geocoder = new google.maps.Geocoder();

    // 3. Entonces, geocodifique redirecciona a la direccion
    geocodeAddress(geocoder, map);
  }

  // Manejar la conversión de la dirección de texto a coordenadas
  function geocodeAddress(geocoder, resultsMap) {
    const address = document.getElementById("address").value;
    const name = document.getElementById("nombre").value;

    // Busque la dirección con la API
    geocoder.geocode({ address: address }, (results, status) => {
      if (status === "OK") {
        // Establecer la ubicación del mapa obtenido por la API
        resultsMap.setCenter(results[0].geometry.location);

        // Agrega el marcador con la ubicación obtenida
        new google.maps.Marker({
          map: resultsMap,
          position: results[0].geometry.location,
          title: name,
        });
      } else {
        alert("Geocode error: " + status);
      }
    });
  }

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //------------------------------------------ Modal proyectos Fin -------------------------------------------
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
} else {
  console.log(url);
}
