async function listar_productos() {
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item=>{
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila"+item.id;
                cont +=1;
                nueva_fila.innerHTML = `
                        <th>${cont}</th>
                        <td>${item.codigo}</td>
                        <td>${item.nombre}</td>
                        <td>${item.stock}</td>
                        <td>${item.categoria.nombre}</td>
                        <td>${item.proveedor.razon_social}</td>
                        <td>${item.options}</td>
                        `;
                document.querySelector('#tbl_producto').appendChild(nueva_fila);
            });
        }
        console.log(json);
    } catch (error) {
        console.log("Opps salio un error "+error);
    } 
}
if (document.querySelector('#tbl_producto')) {
    listar_productos();
}


async function registrarProducto() {
    let codigo = document.getElementById('codigo').value;
    let nombre = document.querySelector('#nombre').value;
    let detalle = document.querySelector('#detalle').value;
    let precio = document.querySelector('#precio').value;
    let stock = document.querySelector('#stock').value;
    let categoria = document.querySelector('#categoria').value;
    let img = document.querySelector('#imagen').value;
    let proveedor = document.querySelector('#proveedor').value;
    if (codigo=="" || nombre =="" || detalle=="" || precio =="" || stock =="" || categoria =="" ||  img =="" || proveedor =="") {
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
        let respuesta = await fetch(base_url + 'controller/Categoria.php?tipo=listar');
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
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.razon_social + '</option>';
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


async function ver_producto(id) {
    //console.log('hola soy la funcion ver');
    const formData = new FormData();
    formData.append('id_producto', id);
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=ver', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_producto').value = json.contenido.id;
            document.querySelector('#codigo').value = json.contenido.codigo;
            document.querySelector('#nombre').value = json.contenido.nombre;
            document.querySelector('#detalle').value = json.contenido.detalle;
            document.querySelector('#precio').value = json.contenido.precio;
            document.querySelector('#categoria').value = json.contenido.id_categoria;
            document.querySelector('#proveedor').value = json.contenido.id_proveedor;
            document.querySelector('#img').value = json.contenido.imagen;
        } else {
            window.location = base_url + "productos";
        }
        console.log(json);
    } catch (error) {
        console.log("oops ocurrio un error " + error);
    }
}

//actualizar producto
async function actualizar_producto() {
    const datos = new FormData(formActualizar);
    try {  
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=actualizar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        console.log(json);
    } catch (error) {
        console.log("ocurrio error" +error)
    }
}

async function eliminar_producto(id){
    swal({
        title: "¿Realmente desea Eliminar el Producto?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then((willDelete)=>{
        if (willDelete) {
            fnt_eliminar(id);
        }
    })
}
async function fnt_eliminar(id){
    const formData = new FormData();
    formData.append('id_producto', id);
    try {
        let respuesta = await fetch(base_url + 'controller/Producto.php?tipo=eliminar',{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            swal("Eliminar", "Eliminado Correctamente", "success");
            document.querySelector('#fila'+id).remove();
        }else{
            swal("Eliminar", "Error al eliminar Producto", "warning")
        }
    } catch (e) {
        console.log("ocurrio error"+e)
    }
}