async function registrarUsuario() {
    // Obtener los valores de los campos del formulario
    let nro_identidad = document.getElementById('nro_identidad').value;
    let razonSocial = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let codPostal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;


    // Validar que todos los campos estén llenos
    if (
        nro_identidad === "" || razonSocial === "" || telefono === "" ||
        correo === "" || departamento === "" || provincia === "" ||
        distrito === "" || codPostal === "" || direccion === "" ||
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
