<header class="main-header">
    <!-- LOGOTIPO -->
    <a href="inicio" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <img src="vistas/img/plantilla/iconogrande2.png" class="img-responsive" style="padding:10px">
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <h3 style="font-size:22px; color:coral;"> PONCELET- <strong> SIS </strong></h3>
        </span>
    </a>

    <!-- SIDEBAR  -->

    <nav class="navbar navbar-static-top" role="navigation">
        <!-- BOTON DE NAVEGACION-->

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only"> Toggle navigation</span>

        </a>

        <!-- PERFIL DE USUARIO -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php 
                    
                    if (empty($_SESSION['foto']) ) {
                        echo '<img src="vistas/img/usuarios/usuario.png" class="user-image" alt="User Image">';
                    }else {
                        echo '<img src="'.$_SESSION['foto'].'" class="user-image" alt="User Image">';
                    }
                    
                    ?>
                        
                        <span class="hidden-xs">Usuario: <?php echo $_SESSION['nombre'] ?> </span>
                    </a>
                    <!-- DROPDOWN TOOGLE-->

                    <ul class="dropdown-menu">
                        <!-- USER IMAGE -->
                        <li class="user-body">
                            <div class="pull-right">
                                <a href="salir" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul>

                </li>
            </ul>
        </div>

        
    </nav>
</header>