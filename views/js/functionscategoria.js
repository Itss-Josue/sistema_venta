async function registrarCategoria() {
   
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    
    if (nombre == "" || detalle == "") {
        alert("Error!!, Campos vacíos");
        return;
    }
    try {
        
        const datos = new FormData(formRegistrarCat);
        
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("registro", json.mensaje, "success");
        } else {
            swal("registro", json.mensaje, "error");
        }
        console.log(json);


    } catch (e) {
        console.log("Oops, ocurrio un error" + e);
    }
}
async function listar_categorias() {
    try {
        // envia datos hacia el controlador
        let respuesta = await fetch(base_url +
            'controller/Categoria.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
                // se trabaja con jquery
               /* $('#categoria').append($('<option />', {
                    text: `${element.nombre}`,
                    value: `${element.id}`
                })); */
            });
            document.getElementById('categoria').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar categorias" + e)
    }
}
