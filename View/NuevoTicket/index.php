<?php
    require_once("../../config/conexion.php");
    if (isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html>
<!--INICIO LLAMANDO A LOS CSS DE HEAD-->
<?php require_once("../MainHead/head.php"); ?>
<!--FIN LLAMANDO A LOS CSS DE HEAD-->
<title>SISTEMA HELPDESK::Nuevo Ticket</title>
</head>

<body class="with-side-menu theme-side-caesium-dark-caribbean">

    <!--LLAMADO AL HEADER DESDE LA CARPETA MainHeader-->
    <?php require_once("../MainHeader/herader.php") ?>
    <!--FIN DEL LLAMADO AL HEADER DESDE LA CARPETA MainHeader-->

    <div class="mobile-menu-left-overlay"></div>

    <!--LLAMADO AL NAVBAR DESDE LA CARPETA MainNav-->
    <?php require_once("../MainNav/nav.php") ?>
    <!--FIN DEL LLAMADO AL NAVBAR DESDE LA CARPETA MainNav-->

    <!--CONTENIDO DE LA PAGINA PRINCIPAL DE SISTEMA HELPDESK-->
    <div class="page-content">
        <div class="container-fluid">
            NUEVO TICKET.
        </div>
    </div>
    <!--FIN DEL CONTENIDO DE LA PAGINA PRINCIPAL DE SISTEMA HELPDESK-->

    <!--LLAMADO DE LOS JS NECESESARIOS DE LA CARPETA MainJs-->
    <?php require_once("../MainJs/js.php"); ?>
    <!--FIN DEL LLAMADO DE LOS JS NECESESARIOS DE LA CARPETA MainJs-->

    <!-- INICIO JS QUE VA A CONTROLAS NUESTRAS VISTA HTML -->
    <script type="text/javascript" src="nuevoticket.js"></script>
    <!-- FIN JS QUE VA A CONTROLAS NUESTRAS VISTA HTML -->
    
</body>
</html>
<?php 
    }else{
        header("Location:".Conectar::ruta()."index.php");
    }
?>