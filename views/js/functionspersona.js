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
            Swal.fire("No se encontraron personas.");
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

// RECIEN AGREGADO Y MODIFICAR ////////////////////////////////////////


async function ver_persona(id) {
    const formData = new FormData();
    formData.append('id_persona', id);

    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=ver_persona', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await respuesta.json();
        if (json.status) {
            document.querySelector('#id_persona').value = json.contenido.id;
            document.querySelector('#nro_identidad').value = json.contenido.nro_identidad;
            document.querySelector('#razon_social').value = json.contenido.razon_social;
            document.querySelector('#telefono').value = json.contenido.telefono;
            document.querySelector('#correo').value = json.contenido.correo;
            document.querySelector('#departamento').value = json.contenido.departamento;
            document.querySelector('#provincia').value = json.contenido.provincia;
            document.querySelector('#distrito').value = json.contenido.distrito;
            document.querySelector('#cod_postal').value = json.contenido.cod_postal;
            document.querySelector('#direccion').value = json.contenido.direccion;
            document.querySelector('#rol').value = json.contenido.rol;
        } else {
            window.location = base_url + "persona";
        }
        console.log(json);
    } catch (error) {
        console.log("Ops ocurrió un error: " + error);
    }
}

async function actualizar_persona() {
    const datos = new FormData(document.getElementById('frm_editar'));

    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=actualizar_persona', {
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: datos
        });

        if (!respuesta.ok) {
            throw new Error(`HTTP error! status: ${respuesta.status}`);
        }

        let json = await respuesta.json();

        if (json.status) {
            swal.fire({
                title: "¡Actualización exitosa!",
                text: json.mensaje,
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        } else {
            swal.fire({
                title: "Actualización fallida",
                text: json.mensaje,
                icon: 'error',
                confirmButtonText: 'Intentar de nuevo'
            });
        }

        console.log(json);
    } catch (e) {
        console.error("Oops, ocurrió un error: " + e);
        swal.fire({
            title: "Error inesperado",
            text: "Ocurrió un error al intentar actualizar. Por favor, intente nuevamente.",
            icon: 'error',
            confirmButtonText: 'Cerrar'
        });
    }
}


async function eliminar_persona(id){
    swal.fire({
        title: "¿Realmente desea Eliminar el Usuario?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then((willDelete)=>{
        if (willDelete) {
            fnt_eliminar_p(id);
        }
    })
}


async function fnt_eliminar_p(id){
    const formData = new FormData();
    formData.append('id_persona', id);
    try {
        let respuesta = await fetch(base_url + 'controller/Persona.php?tipo=eliminar',{
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
            swal("Eliminar", "Error al eliminar Usuario", "warning")
        }
    } catch (e) {
        console.log("ocurrio error"+e)
    }
}