async function registrarCompra() {
   
    let id_producto = document.querySelector('#idproducto').value;
    let cantidad = document.querySelector('#cantidad').value;
    let precio = document.querySelector('#precio').value;
    let id_trabajador= document.querySelector('#idtrabajador').value;
    
    if (idProducto === "" || cantidad === "" || precio === "" || idTrabajador === "") {
        alert("Error!!, Campos vacíos");
        return;
    }
    try {
        
        const datos = new FormData(formRegistrarCat);
        
        let respuesta = await fetch(base_url + 'controller/Compra.php?tipo=registrar', {
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