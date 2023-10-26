<header class="site-header">
    <div class="container-fluid">
        <a href="#" class="site-logo">
            <!--Incio del código para poder cambiar el logo en el navbar-->
            <img class="hidden-md-down" src="../../public/img/sistemahelpdesk.gif" alt="">
            <img class="hidden-lg-up" src="../../public/img/sistemahelpdesk.gif" alt="">
            <!--Fin del código para poder cambiar el logo en el navbar-->
        </a>
        <button class="hamburger hamburger--htla">
            <span>toggle menu</span>
        </button>
        <div class="site-header-content">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <!--ICONO PARA LA FOTO DE PREFIL DEL USUARIO-->
                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../public/img/avatar-2-64.png" alt="">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Ajustes</a>
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Ayuda</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../Logout/logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesión</a>
                        </div>
                    </div>
                    <!--FIN ICONO PARA LA FOTO DE PREFIL DEL USUARIO-->
                </div>

                <!-- ID DE USUARIO GLOBAL -->
                <input type="hidden" id="user_idx" value="<?php echo $_SESSION["usu_id"] ?>">
                <!-- FIN DEL ID DE USUARIO GLOBAL -->

                <div class="dropdown dropdown-typical">
                    <a href="#" class="dropdown-toogle no-arr">
                        <span class="font-icon font-icon-user"></span>
                        <span class="lblcontactonomx"><?php echo $_SESSION["usu_nom"]?> <?php echo $_SESSION["usu_apep"]?> <?php echo $_SESSION["usu_apem"]?></span>
                    </a>
                </div>
            </div><!--site-header-content-in-->
        </div><!--.site-header-content-->
    </div><!--.container-fluid-->
</header><!--.site-header-->