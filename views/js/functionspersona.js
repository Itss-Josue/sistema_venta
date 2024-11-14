async function registrarUsuario() {
    // Obtener los valores de los campos del formulario
    let nroIdentidad = document.getElementById('nro_identidad').value;
    let razonSocial = document.querySelector('#razon_social').value;
    let telefono = document.querySelector('#telefono').value;
    let correo = document.querySelector('#correo').value;
    let departamento = document.querySelector('#departamento').value;
    let provincia = document.querySelector('#provincia').value;
    let distrito = document.querySelector('#distrito').value;
    let codPostal = document.querySelector('#cod_postal').value;
    let direccion = document.querySelector('#direccion').value;
    let rol = document.querySelector('#rol').value;
    let password = document.querySelector('#password').value;
    let estado = document.querySelector('#estado').value;
    let fechaReg = document.querySelector('#fecha_reg').value;



    // Validar que todos los campos estén llenos
    if (
        nroIdentidad === "" || razonSocial === "" || telefono === "" ||
        correo === "" || departamento === "" || provincia === "" ||
        distrito === "" || codPostal === "" || direccion === "" ||
        rol === "" || password === "" || estado === "" || fechaReg === ""
    ) {
        alert("Error!!, Campos vacíos");
        return;
    }

    try {
        // Crear una instancia de FormData con los datos del formulario
        const datos = new FormData();
        datos.append('nro_identidad', nroIdentidad);
        datos.append('razon_social', razonSocial);
        datos.append('telefono', telefono);
        datos.append('correo', correo);
        datos.append('departamento', departamento);
        datos.append('provincia', provincia);
        datos.append('distrito', distrito);
        datos.append('cod_postal', codPostal);
        datos.append('direccion', direccion);
        datos.append('rol', rol);
        datos.append('password', password);
        datos.append('estado', estado);
        datos.append('fecha_reg', fechaReg);

        // Enviar los datos hacia el controlador
        let respuesta = await fetch(base_url + 'controller/Usuario.php?tipo=registrar', {
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
