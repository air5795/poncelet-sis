<?php

if (empty($_SESSION['active'])) {
  header('location: ../');
}

?>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <center><img src="../img/ICONO5.png" alt=""></center> 
            
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                     
                     
                    <p class="form-text p-2" style="color: #FFffff;">Usuario : </p> <p class="form-text p-2" style="color: #FF5733;"><?php echo $_SESSION['nombre'].' -'.$_SESSION['rol'];  ?> </p>    
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="salir.php">Salir del Sistema</a></li>
                    </ul>
                </li>
            </ul>
            
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Inicio
                            </a>

                            <div class="sb-sidenav-menu-heading">Comercializadora</div>
                            
                            <!-- lista de menu 1 -->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseexp" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Experiencias
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseexp" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                
                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                <div class="sb-nav-link-icon"><i class="fas fa-file-circle-plus"></i></div>
                                                    Experiencia General
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>

                                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="registro_exp.php">Registrar Experiencia</a>
                                                        <a class="nav-link" href="lista_exp.php">Ver Experiencia G.</a>
                                                    </nav>
                                                </div>

                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse_e" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                <div class="sb-nav-link-icon"><i class="fas fa-file-circle-minus"></i></div>
                                                    Experiencia Especifica
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>

                                                <div class="collapse" id="pagesCollapse_e" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="#">Listar Exp. Especifica</a>
                                                        <a class="nav-link" href="#">Ver Experiencia E.</a>
                                                    </nav>
                                                </div>

                                            </nav>
                                        </div>
                            


                            <!-- lista de menu 2 -->

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                                Cotizaciones
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                                
                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                                    Clientes
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>

                                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="registro_cliente.php">Nuevo Cliente</a>
                                                        <a class="nav-link" href="lista_clientes.php">Lista de Clientes</a>
                                            
                                                    </nav>
                                                </div>

                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                                <div class="sb-nav-link-icon"><i class="fas fa-truck-field"></i></div>
                                                    Proveedores
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>

                                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="401.html">Nuevo Proveedor</a>
                                                        <a class="nav-link" href="404.html">Lista de Proveedores</a>
                                                        
                                                    </nav>
                                                </div>


                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse1" aria-expanded="false" aria-controls="pagesCollapseError">
                                                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                                    Productos
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>

                                                <div class="collapse" id="pagesCollapse1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="401.html">Nuevo Producto</a>
                                                        <a class="nav-link" href="404.html">Lista de Productos</a>
                                                        
                                                    </nav>
                                                </div>


                                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse2" aria-expanded="false" aria-controls="pagesCollapseError">
                                                <div class="sb-nav-link-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                                                    Cotización
                                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                                </a>

                                                <div class="collapse" id="pagesCollapse2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                    <nav class="sb-sidenav-menu-nested nav">
                                                        <a class="nav-link" href="401.html">Nuevo Cotizacion</a>
                                                        <a class="nav-link" href="404.html">Lista de Cotizaciones</a>
                                                        
                                                    </nav>
                                                </div>

                                            </nav>
                                        </div>


                        <?php
                        if ($_SESSION['rol'] == 1) {
                            # code..
                        
                        ?>                
                            <div class="sb-sidenav-menu-heading">Administrador</div>
                            
                                              
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapse3" aria-expanded="false" aria-controls="pagesCollapseError">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                Usuarios
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="pagesCollapse3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="registro_usuario.php">Nuevo Usuario</a>
                                    <a class="nav-link" href="lista_usuarios.php">Lista de Usuarios</a>
                                    
                                </nav>
                            </div>
                            <?php
                               
                               } 
                            ?>
                        </div>
                    </div>
                
                    
                    <div class="sb-sidenav-footer">
                        
                        <div class="small">Usuario:</div>
                        
                        <?php echo $_SESSION['nombre']  ?>
                    </div>
                </nav>
            </div>



            
        