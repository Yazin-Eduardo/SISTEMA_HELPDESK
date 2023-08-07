<?php
    session_start();
    class Conectar{
        protected $dbh;

        //FUNCIONALIDAD DE LA CADENA DE CONEXIÓN A LA BASE DE DATOS EN FORMA LOCAL NOMBRE DE LA BASE DE DATOS sistema_helpdesk
        protected function Conexion(){
            try {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=sistema_helpdesk", "root", "");
                return $conectar;
            } catch (Exception $e) {
                print "¡Error DB!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        //FUNCIÓN UTF8 PARA NO TENER COMPILICACIÓN EN EL IDIOMA ESPAÑOL POR LAS TILDES Y LA LETRA Ñ
        public function set_name(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        //RUTA O LINK DEL PROYECTO
        public static function ruta(){
            return "http://localhost/SISTEMA_HELPDESK/";
        }
    }
?>
