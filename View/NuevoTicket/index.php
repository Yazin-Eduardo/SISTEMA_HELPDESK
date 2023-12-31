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
                                <h3>Nuevo Ticket</h3>
                                <ol class="breadcrumb breadcrumb-simple">
                                    <li><a href="..\Home\">Home</a></li>
                                    <li class="active">Nuevo Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="box-typical box-typical-padding">
                    <h5 class="m-t-lg with-border">Ingresar Información</h5>
                    <div class="row">
                        <form method="post" id="ticket_form">

                            <input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">

                            <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="exampleInput">Categorias</label>
                                <select id="cat_id" name="cat_id" class="form-control" placerholder="Seleccione la Categoria">
                                    
                                </select>
                            </fieldset>
                            </div>
                            <div class="col-lg-6">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="tick_titulo">Titulo</label>
                                <input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese el Titulo">
                            </fieldset>
                            </div>
                            <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label semibold" for="tick_descripcion">Descripción</label>
                                <div class="summernote-theme-10">
                                    <textarea id="tick_descripcion" name="tick_descripcion" class="summernote" >Ingrese la Descripción del problema</textarea>
                                </div>
                            </fieldset>
                            </div>
                            <div class="col-lg-12">
                            <button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-success">Guardar</button> 
                            </div>
                        </form>
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