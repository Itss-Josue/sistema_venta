async function registrarCategoria() {
   
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    
    if (nombre == "" || detalle == "") {
        alert("Error!!, Campos vacíos");
        return;
    }
    try {