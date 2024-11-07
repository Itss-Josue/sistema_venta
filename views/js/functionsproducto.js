async function registrarProducto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let fecha_v = document.querySelector('#fecha_v').value;
    let img = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#proveedor').value;
    if (codigo=="" || nombre =="" || detalle=="" || precio =="" || stock ==""
        || categoria =="" || fecha_v =="" || img =="" || proveedor =="") {
            alert("Error!!, Campos vacíos");
            return;
    }
    try {
        //capturamos datos del formulario html nuevo-producto
        const datos = new FormData(formRegistrarProd);
        //enviamos datos hacia el controlador
        let respuesta = await fetch(base_url+'controller/Producto.php?tipo=registrar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje,"success");
        }else{
            swal("Registro", json.mensaje,"error");
        }


        console.log(json);
    } catch (e) {
        console.log("Oops, ocurrio un error" + e);
    }
}

//  listar_categorias registrados en la base de datos

async function listarcategorias() {
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

async function listarproveedores() {
    try {
        // envia datos hacia el controlador
        let respuesta = await fetch(base_url +
            'controller/Persona.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.rol + '">' + element.razon_social + '</option>';
                // se trabaja con jquery
               /* $('#categoria').append($('<option />', {
                    text: `${element.nombre}`,
                    value: `${element.id}`
                })); */
            });
            document.getElementById('proveedor').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar proveedor" + e)
    }
}

