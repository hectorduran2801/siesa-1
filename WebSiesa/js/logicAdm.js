//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//--------------------------------------------Administrador---------------------------------------------------------
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

var url = window.location.href;
console.log(url + "\n++++++++++++++++++++++++++++++++++++++++++++\n");

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//-----------------------------------------DataTable Administrador Inicio-------------------------------------------
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var tabla = document.querySelector("#tabla");
var dataTable = new DataTable(tabla, {
  perPage: 3,
  perPageSelect: [3, 6, 9, 12],
});

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//--------------------------------------------DataTable Administrador Fin-------------------------------------------
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

if (url == "http://localhost/WebSiesa/administrator/section/products.php") {
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //Formulario Administrador Producto Inicio
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
        break;

      case "Mando y Señalización":
        let contenido2 = subcategoria2.slice(0, 4);
        mostrarCategoria(contenido2, $subcategoria);
        break;

      case "Seccionadores y Transferencias":
        let contenido3 = subcategoria3.slice(0, 4);
        mostrarCategoria(contenido3, $subcategoria);
        break;

      case "Protecciones":
        let contenido4 = subcategoria4.slice(0, 4);
        mostrarCategoria(contenido4, $subcategoria);
        break;
    }
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  // Formulario Administrador Producto Inicio
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
} else if (
  url == "http://localhost/WebSiesa/administrator/section/projects.php"
) {
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //Formulario Administrador Proyecto
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  /*  const proyecto = document.querySelectorAll(
    ".contenido-proyecto>.carta-proyecto"
  );
 */
  let $empresa = document.getElementById("empresa");

  let empresas = [
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
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //Formulario Administrador Proyecto API Inicio
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  let autocomplete;

  function initAutocomplete() {
    autocomplete = new google.maps.places.Autocomplete(
      document.getElementById("txtUbi"),
      {
        types: ["establishment"],
        componentRestrictions: { country: ["PA"] },
        fields: ["place_id", "geometry", "name"],
      }
    );
  }

  initAutocomplete();

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //Formulario Administrador Proyecto API Fin
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //Formulario LlEnar descripcion Inicio
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  document.getElementById("agregar").addEventListener("click", function () {

    var lista = document.getElementById("miLista");
    var textareaValue = document.getElementById("txtDes").value;
    var elemento = document.createElement("li");
    elemento.textContent = textareaValue;
    lista.appendChild(elemento);
  });

  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  //Formulario LlEnar descripcion Fin
  //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
}
