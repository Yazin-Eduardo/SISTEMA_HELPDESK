<?php 
// CLASE PARA HACER LA CONEXIÓN DEL USUARIO CON LA BASE DE DATOS
    class Usuario extends Conectar{
        public function login() {
            $conectar=parent::conexion();
            parent::set_name();
            if(isset($_POST["enviar"])){
                $correo=$_POST["usu_correo"];
                $password=$_POST["usu_pass"];
                if(empty($correo) and empty($password)){
                    header("Location:".conectar::ruta()."index.php?m=2");
                }else{
                    $sql="SELECT * FROM tm_usuario WHERE usu_correo=? and usu_pass=? and est=1;";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $password);
                    $stmt->execute();
                    $resultado=$stmt->fetch();
                    if(is_array($resultado)and count($resultado)>0){
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["usu_nom"]=$resultado["usu_nom"];
                        $_SESSION["usu_apep"]=$resultado["usu_apep"];
                        $_SESSION["usu_apem"]=$resultado["usu_apem"];
                        header("Location:".conectar::ruta()."View/Home/");
                        exit();
                    }else{
                        header("Location:".conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }
?>