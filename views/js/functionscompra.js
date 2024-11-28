async function listar_compras() {
    try {
        let respuesta = await fetch(base_url+'controller/Compra.php?tipo=listar');
        let json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let cont = 0;
            datos.forEach(item=>{
                let nueva_fila = document.createElement("tr");
                nueva_fila.id = "fila"+item.id; // id anuevo asignado-------------id de la BD
                cont+=1;
                nueva_fila.innerHTML = `
                <th>${cont}</th> 
                <td>${item.producto.nombre}</td>
                <td>${item.cantidad}</td>
                <td>${item.precio}</td>
                <td>${item.trabajador.razon_social}</td>
                <td>
                    <button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                </td>
        `;
        document.querySelector('#tbl_compras').appendChild(nueva_fila);
            });
        }else{
            Swal.fire("No se encontraron compras.");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }

}

if (document.querySelector('#tbl_compras')) {
    listar_compras();
}



async function registrar_compra(){
    let producto = document.querySelector('#id_producto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let trabajador = document.querySelector('#trabajador').value;
    if (producto == "" || cantidad == "" ||precio == ""  || trabajador == "") {
        alert("Error!!, Campos vacíos");
        return;
    }
    try {
        //capturamos datos del formulario html nuevo-producto
        const datos = new FormData(formRegistrarCompras);
        //enviamos datos hacia el controlador
        let respuesta = await fetch(base_url +'controller/Compra.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });
        json = await respuesta.json();
        if(json.status){
            swal("Registro", json.mensaje, "success");
        }else{
            swal("Registro", json.mensaje, "error");
        }
    
        console.log(json);
       } catch (e){
        console.log("Oops, ocurrio un error"+e);
       }
    }

async function listar_productos() {
    try {
        // envia datos hacia el controlador
        let respuesta = await fetch(base_url +'controller/Producto.php?tipo=listar');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>'
            datos.forEach(element => {
                contenido_select += '<option value="' + element.id + '">' + element.nombre + '</option>';
               
            });
            document.getElementById('id_producto').innerHTML = contenido_select;
        }
        console.log(respuesta);
    } catch (e) {
        console.e("Error al cargar producto" + e);
    }
}
// Listar proveedores
async function listar_trabajadores() {
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=listar_trabajador');
        json = await respuesta.json();
        if (json.status) {
            let datos = json.contenido;
            let contenido_select = '<option value="">Seleccione</option>';
            datos.forEach(element => {
                contenido_select += '<option value="'+ element.id +'">'+ element.razon_social + '</option>';
            
            });
            document.getElementById('trabajador').innerHTML = contenido_select;
        }

        console.log(respuesta);
    } catch (e) {
        console.log("Error al cargar trabajador " + e);
    }
}