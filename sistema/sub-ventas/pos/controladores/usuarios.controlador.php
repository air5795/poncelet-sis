<?php

class ControladorUsuarios{
    /* ingreso Usuarios */
     static public function ctrIngresoUsuario(){
        if(isset($_POST["ingUsuario"])){
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

                $encriptar = crypt($_POST["ingPassword"],'$2a$07$usesomesillystringforsalt$');
                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST["ingUsuario"];
                $respuesta = ModeloUsuarios :: mdlMostrarUsuarios($tabla, $item, $valor);

                if ($respuesta > 1) {
                    if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){
                        if ($respuesta["estado"] == 1) {
                             
                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["id"] = $respuesta["id"];
                        $_SESSION["nombre"] = $respuesta["nombre"];
                        $_SESSION["usuario"] = $respuesta["usuario"];
                        $_SESSION["foto"] = $respuesta["foto"];
                        $_SESSION["perfil"] = $respuesta["perfil"];
                        echo '<script>
                        window.location = "inicio";
                        </script>';
                    } else {
                        echo '<br><div class="alert alert-danger">El usuario no esta activo</div>';
                    }
                }
                    else{
                        echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
                    }
                }

                
                
    
            }
        }
    }

    /* registro de usuario */
    static public function ctrCrearUsuario(){
        if(isset($_POST["nuevoUsuario"])){
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["nuevoNombre"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){
                /* validar imagen */
                $ruta = "";
                
                if (isset($_FILES["nuevaFoto"]["tmp_name"])) {

                    list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

                    $nuevoAncho = 500;
                    $nuevoAlto = 500;

                    /* crear directorio */

                    $directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];

                    mkdir($directorio, 0755);

                    /* de acuerdo al tipo de imagen aplicamos las funciones por defecto de php */

                    if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

                        /* guardar imagen en el directorio */

                        $aleatorio = mt_rand(100,999);
                        $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";
                        $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        /* copiar la imagen */
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        /* guardar la imagen */
                        imagejpeg($destino, $ruta);
                    }
                    if($_FILES["nuevaFoto"]["type"] == "image/png"){
                        /* guardar imagen en el directorio */
                        $aleatorio = mt_rand(100,999);
                        $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";
                        $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        /* copiar la imagen */
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        /* guardar la imagen */
                        imagepng($destino, $ruta);
                    }
                }

                $tabla = "usuarios";
                $encriptar = crypt($_POST["nuevoPassword"],'$2a$07$usesomesillystringforsalt$');
                $datos = array("nombre"     => $_POST["nuevoNombre"],
                               "usuario"    => $_POST["nuevoUsuario"],
                               "password"   => $encriptar,
                               "perfil"     => $_POST["nuevoPerfil"],
                               "foto"       => $ruta);
                $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
                if($respuesta == "ok"){
                    echo '<script>
                    swal.fire({
                        icon: "success",
                        title: "¡El usuario ha sido guardado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                        }).then((result)=>{
                        
                            if(result.value){
                                window.location = "usuarios";
                            }
                    

                    });
                    </script>';
                }
                
            }else{
                echo '<script>


                
                    swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                    }).then((result)=>{
                    
                        if(result.value){
                            window.location = "usuarios";
                        }
                

                });
               
                </script>';
            }
        }
    }

    /* mostrar usuarios */
    static public function ctrMostrarUsuarios($item, $valor){
        $tabla = "usuarios";
        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
        return $respuesta;
    }
    
    /* editar usuario */
    public function ctrEditarUsuario(){
        
        if (isset($_POST["editarUsuario"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["editarNombre"])) {

                /* validar imagen */
                $ruta = $_POST["fotoActual"];
                
                if(isset($_FILES["editarFoto"]["tmp_name"]) && !empty($_FILES["editarFoto"]["tmp_name"])){
                    list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);
                    $nuevoAncho = 500;
                    $nuevoAlto = 500;
                    /* crear directorio */
                    $directorio = "vistas/img/usuarios/".$_POST["editarUsuario"];

                    if (!empty($_POST["fotoActual"])) {
                        /* eliminar imagen */
                        unlink($_POST["fotoActual"]);
                    }else {
                        mkdir($directorio, 0755);
                    }


                    /* de acuerdo al tipo de imagen aplicamos las funciones por defecto de php */

                    if($_FILES["editarFoto"]["type"] == "image/jpeg"){
                        /* guardar imagen en el directorio */
                        $aleatorio = mt_rand(100,999);
                        $ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".jpg";
                        $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        /* copiar la imagen */
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        /* guardar la imagen */
                        imagejpeg($destino, $ruta);
                    }


                    if($_FILES["editarFoto"]["type"] == "image/png"){
                        /* guardar imagen en el directorio */
                        $aleatorio = mt_rand(100,999);
                        $ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".png";
                        $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);
                        $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
                        /* copiar la imagen */
                        imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                        /* guardar la imagen */
                        imagepng($destino, $ruta);
                    }
                }

                $tabla = "usuarios";
                
                if ($_POST["editarPassword"] != "") {
                    if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["editarPassword"])) {
                        $encriptar = crypt($_POST["editarPassword"],'$2a$07$usesomesillystringforsalt$');
                    }else {
                        echo '<script>
                        swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "¡La contraseña no puede ir vacía o llevar caracteres especiales!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar",
                            closeOnConfirm: false
                            }).then((result)=>{
                            
                                if(result.value){
                                    window.location = "usuarios";
                                }
                        

                        });
                       
                        </script>';
                    }
                }else {
                    $encriptar = $_POST["passwordActual"];
                }
                $datos = array("nombre" => $_POST["editarNombre"],
                               "usuario" => $_POST["editarUsuario"],
                               "password" => $encriptar,
                               "perfil" => $_POST["editarPerfil"],
                               "foto" => $ruta);
                $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);
                if($respuesta == "ok"){
                    echo '<script>
                    swal.fire({
                        icon: "success",
                        title: "¡El usuario ha sido editado correctamente!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false
                        }).then((result)=>{
                        
                            if(result.value){
                                window.location = "usuarios";
                            }
                    

                    });
                    </script>';
                }

            } else {
                echo '<script>
                swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                    }).then((result)=>{
                    
                        if(result.value){
                            window.location = "usuarios";
                        }
                

                });
               
                </script>';
            }
            
        }
    }
}