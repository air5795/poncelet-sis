/* subiendo la foto de usuario */

$(".nuevaFoto").change(function(){
    var imagen = this.files[0];

    // validar que sea una imagen
    if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){
        $(".nuevaFoto").val("");
        swal.fire({
            title: "Error al subir la imagen",
            text: "La imagen debe estar en formato JPG o PNG",
            icon: "error",
            confirmButtonText: "Cerrar"
        });

        }else if (imagen["size"] > 20000000) {
            swal.fire({
                title: "Error al subir la imagen",
                text: "La imagen no debe pesar mas de 2MB",
                icon: "error",
                confirmButtonText: "Cerrar"
            });
        }else{
            var datosImagen = new FileReader;
            datosImagen.readAsDataURL(imagen);

            $(datosImagen).on("load", function(event){
                var rutaImagen = event.target.result;
                $(".previsualizar").attr("src", rutaImagen);
            })
        }
})

/* EDITAR USUARIO */
$(".btnEditarUsuario").click(function(){
    var idUsuario = $(this).attr("idUsuario");
    var datos = new FormData();
    datos.append("idUsuario", idUsuario);

    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            $("#editarNombre").val(respuesta["nombre"]);
            $("#editarUsuario").val(respuesta["usuario"]);
            $("#editarPerfil").html(respuesta["perfil"]);
            $("#editarPerfil").val(respuesta["perfil"]);

            $("#fotoActual").val(respuesta["foto"]);

            $("#passwordActual").val(respuesta["password"]);
            $("#fotoActual").val(respuesta["foto"]);
            if (respuesta["foto"] != "") {
                $(".previsualizar").attr("src", respuesta["foto"]);
            }
            
        }
    }) 
})

/* ACTIVAR USUARIO */
$(".btnActivar").click(function(){
    var idUsuario = $(this).attr("idUsuario");
    var estadoUsuario = $(this).attr("estadoUsuario");

    var datos = new FormData();
    datos.append("activarId", idUsuario);
    datos.append("activarUsuario", estadoUsuario);

    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){
            if(window.matchMedia("(max-width:767px)").matches){
                swal.fire({
                    title: "El usuario ha sido actualizado",
                    icon: "success",
                    confirmButtonText: "Cerrar"
                }).then(function(result){
                    if(result.value){
                        window.location = "usuarios";
                    }
                })
            }
        }
    })
})