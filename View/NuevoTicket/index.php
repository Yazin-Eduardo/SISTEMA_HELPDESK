<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
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

                <header class="section-header">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell">
                                <h3>Nuevo Ticket</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Nuevo Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="box-typical box-typical-padding">
                    <h5 class="m-t-lg with-border">Ingresar Información</h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="exampleInput">Categorias</label>
                                <select id="cat_id" class="form-control" placerholder="Seleccione la Categoria">
                                    
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="exampleInputEmail1">Titulo</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ingrese el Titulo">
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="exampleInputPassword1">Descripción</label>
                                <div class="summernote-theme-10">
                                    <textarea id="tick_descrip" class="summernote" name="name">Ingrese la Descripción del problema</textarea>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <button type="button" class="btn btn-rounded btn-inline btn-success">Guardar</button> 
                        </div>
                        
                    </div><!--.row-->
                </div>
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
} else {
    header("Location:" . Conectar::ruta() . "index.php");
}
?>