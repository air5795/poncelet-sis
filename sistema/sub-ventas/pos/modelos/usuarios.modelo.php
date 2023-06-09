<?php

require_once 'conexion.php';

class ModeloUsuarios{
    /* mostrar usuarios */
    static public function mdlMostrarUsuarios($tabla, $item, $valor){

        if ($item != null) {
            $stmt = Conexion::conectar()->prepare("SELECT * from $tabla Where $item = :$item ");
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR); 
            $stmt->execute();
            return $stmt->fetch();
            $stmt = null;
        }else {
            $stmt = Conexion::conectar()->prepare("SELECT * from $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt = null;
        }

   
        
        
        }

        /* registro de usuarios */
        static public function mdlIngresarUsuario($tabla, $datos){
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, password, perfil, foto) VALUES (:nombre, :usuario, :password, :perfil, :foto)");
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
            $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
            if($stmt->execute()){
                return "ok";
            }else{
                return "error";
            }
            
        }

        /* editar usuarios */
        static public function mdlEditarUsuario($tabla, $datos){
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, usuario = :usuario, password = :password, perfil = :perfil, foto = :foto WHERE usuario = :usuario");
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
            $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
            
            if($stmt->execute()){
                return "ok";
            }else{
                return "error";
            }

           
        }
    }