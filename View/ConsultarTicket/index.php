<?php
    require_once("../../config/conexion.php");
    if (isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html>
<!--INICIO LLAMANDO A LOS CSS DE HEAD-->
<?php require_once("../MainHead/head.php"); ?>
<!--FIN LLAMANDO A LOS CSS DE HEAD-->
<title>SISTEMA HELPDESK::Consultar Ticket</title>
</head>

<body class="with-side-menu theme-side-caesium-dark-caribbean">

    <!--LLAMADO AL HEADER DESDE LA CARPETA MainHeader-->
    <?php require_once("../MainHeader/header.php") ?>
    <!--FIN DEL LLAMADO AL HEADER DESDE LA CARPETA MainHeader-->

    <div class="mobile-menu-left-overlay"></div>

    <!--LLAMADO AL NAVBAR DESDE LA CARPETA MainNav-->
    <?php require_once("../MainNav/nav.php") ?>
    <!--FIN DEL LLAMADO AL NAVBAR DESDE LA CARPETA MainNav-->

    <!--CONTENIDO DE LA PAGINA PRINCIPAL DE SISTEMA HELPDESK-->
    <div class="page-content">
        <div class="container-fluid">

            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>Consultar Ticket</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="..\Home\">Home</a></li>
                                    <li class="active">Consultar Ticket</li>
                                </ol>
                        </div>
                    </div>
                </div>
            </header>

            <!-- INICIO DEL DATATABLE -->
            <div class="box-typical box-typical-padding">
                <table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                           <th style="width: 2%;">N°. TICKET</th>
                           <th style="width: 10%;">CATEGORIA</th>
                           <th class="d-none d-dm-table-cell" style="width: 10%;">TITULO</th>
                           <th class="text-center" style="width: 5%;">ACCIONES</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <!-- FIN DEL DATATABLE -->

        </div>
    </div>
    <!--FIN DEL CONTENIDO DE LA PAGINA PRINCIPAL DE SISTEMA HELPDESK-->

    <!--LLAMADO DE LOS JS NECESESARIOS DE LA CARPETA MainJs-->
    <?php require_once("../MainJs/js.php"); ?>
    <!--FIN DEL LLAMADO DE LOS JS NECESESARIOS DE LA CARPETA MainJs-->

    <!-- INICIO JS QUE VA A CONTROLAS NUESTRAS VISTA HTML -->
    <script type="text/javascript" src="consultarticket.js"></script>
    <!-- FIN JS QUE VA A CONTROLAS NUESTRAS VISTA HTML -->
    
</body>
</html>
<?php 
    }else{
        header("Location:".Conectar::ruta()."index.php");
    }
?>