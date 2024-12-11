async function listar_personas() {
    try {
        let respuesta = await fetch(base_url+'controller/Persona.php?tipo=listar_p');
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
                <td>${item.nro_identidad}</td>
                <td>${item.razon_social}</td>
                <td>${item.telefono}</td>
                <td>${item.correo}</td>
                <td>${item.departamento}</td>
                <td>${item.cod_postal}</td>
                <td>${item.direccion}</td>
                <td>${item.rol}</td>
                <td>${item.options}</td>
        `;
        document.querySelector('#tbl_persona').appendChild(nueva_fila);
            });
        }else{
            Swal.fire("No se encontraron productos.");
        }
        console.log(json);
    } catch (error) {
        console.log("Oops salio un error "+error);
    }

}

if (document.querySelector('#tbl_persona')) {
    listar_personas();
}

async function registrarUsuario() {
    // Obtener los valores de los campos del formulario
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razons_social = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let cod_postal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;


    // Validar que todos los campos estén llenos
    if (
        nro_identidad === "" || razons_social === "" || telefono === "" ||
        correo === "" || departamento === "" || provincia === "" ||
        distrito === "" || cod_postal === "" || direccion === "" ||
        rol === ""
    ) {
        alert("Error!!, Campos vacíos");
        return;
    }

    try {
        const datos = new FormData(frmRegistrar);

        // Enviar los datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=registrar', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        // Procesar la respuesta JSON
        let json = await respuesta.json();
        if (json.status) {
            swal("Registro", json.mensaje, "success");
        } else {
            swal("Registro", json.mensaje, "error");
        }

        console.log(json);

    } catch (e) {
        console.log("Oops, ocurrió un error: " + e);
    }
    
}


//actualizar producto
async function actualizar_persona() {
    const datos = new FormData(formActualizar);
    try {  
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=actualizar', {
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