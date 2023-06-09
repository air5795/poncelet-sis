<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Usuarios
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="usuarios">Usuarios</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
            Agregar Usuario
          </button>
        </div>
        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive tablas " style="width: 100%;">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Foto</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Ultimo Login</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $item = null;
                $valor = null;
                $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
                foreach ($usuarios as $key => $value) {
                  echo '<tr>
                        <td>'.($key+1).'</td>
                        <td>'.$value["nombre"].'</td>
                        <td>'.$value["usuario"].'</td>';

                        if ($value["foto"] != "") {
                          echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';
                        }else {
                          echo '<td><img src="vistas/img/usuarios/usuario.png" class="img-thumbnail" width="40px"></td>';
                        }


                        echo '<td>'.$value["perfil"].'</td>';


                        if ($value["estado"] != 0) {
                          echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
                        }else {
                          echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
                        }

                        echo '<td>'.$value["ultimo_login"].'</td>

                        <td>
                          <div class="btn-group">
                            <button data-target="#modalEditarUsuario" class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" ><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>
                          </div>
                        </td>
                      </tr>';
                }
                


              ?>
            </tbody>

          </table>
        </div>
        
      
        
      </div>
      

    </section>
    <!-- /.content -->
  </div>
  

  <!------------------------------------------------------------------------------- modal nuevo -->

  <!-- Modal -->
<div class="modal fade" id="modalAgregarUsuario" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">
    
      <!-- cabeza del modal  -->

      <div class="modal-header" style="background-color:#ff986c;color:white;">  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Usuario</h4>
      </div>

      <!-- cuperpo de modal -->

      <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <div class="input-group">
                    <span style="-webkit-writing-mode: vertical-lr;color: #ff986c;" class="input-group-addon" ><i class="fa fa-user"></i> </span> 
                    <input type="text" class="form-control " name="nuevoNombre" placeholder="Ingresar Nombre" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span  style="-webkit-writing-mode: vertical-lr;color: #ff986c;" class="input-group-addon" ><i class="fa fa-key"></i> </span> 
                    <input type="text" class="form-control " name="nuevoUsuario" placeholder="Ingresar Usuario" required>
                </div>
                    
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span style="-webkit-writing-mode: vertical-lr;color: #ff986c;" class="input-group-addon" ><i class="fa fa-lock"></i></span> 
                    <input type="password" class="form-control " name="nuevoPassword" placeholder="Ingresar Contraseña" required>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span style="-webkit-writing-mode: vertical-lr;color: #ff986c;"  class="input-group-addon" ><i class="fa fa-users"></i></span> 
                    <select class="form-control " name="nuevoPerfil" style="background-color: #ffffff;color: #ff986c;" >
                      <option value="">Seleccionar Perfil</option>
                      <option value="Administrador">Administrador</option>
                      <option value="Vendedor">Vendedor</option>
                      <option value="Especial">Especial</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="panel">Subir Foto</div>
                <input type="file" class="nuevaFoto" name="nuevaFoto">
                <p class="help-block">Peso maximo de la foto 20 MB</p>
                <img src="vistas/img/usuarios/usuario.png" class="img-thumbnail previsualizar" width="100px">
            </div>


        
      </div>
      </div>
      <!-- pie de pagina de modal  -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>

      <?php
        $crearUsuario = new ControladorUsuarios();
        $crearUsuario -> ctrCrearUsuario();
      ?>

      </form>
    </div>
  </div>
</div>

 <!------------------------------------------------------------------------------- modal editar -->

  <!-- Modal editar -->
  <div id="modalEditarUsuario" class="modal fade" >
  <div class="modal-dialog ">
    <div class="modal-content">

    <form role="form" method="post" enctype="multipart/form-data">
    
      <!-- cabeza del modal  -->

      <div class="modal-header" style="background-color:#ff986c;color:white;">  
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Usuario</h4>
      </div>

      <!-- cuperpo de modal -->

      <div class="modal-body">
        <div class="box-body">
            <div class="form-group">
                <div class="input-group">
                    <span style="-webkit-writing-mode: vertical-lr;color: #ff986c;" class="input-group-addon" ><i class="fa fa-user"></i> </span> 
                    <input type="text" class="form-control " id="editarNombre" name="editarNombre" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span  style="-webkit-writing-mode: vertical-lr;color: #ff986c;" class="input-group-addon" ><i class="fa fa-key"></i> </span> 
                    <input type="text" class="form-control " id="editarUsuario" name="editarUsuario" value="" readonly>
                </div>
                    
            </div>
            <div class="form-group">
                <div class="input-group">
                    <span style="-webkit-writing-mode: vertical-lr;color: #ff986c;" class="input-group-addon" ><i class="fa fa-lock"></i></span> 
                    <input type="password" class="form-control " name="editarPassword" placeholder="Escriba Una nueva Contraseña" >
                    <input type="hidden" id="passwordActual" name="passwordActual">
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span style="-webkit-writing-mode: vertical-lr;color: #ff986c;"  class="input-group-addon" ><i class="fa fa-users"></i></span> 
                    <select class="form-control " name="editarPerfil" style="background-color: #ffffff;color: #ff986c;"  >
                      <option value="" id="editarPerfil"></option>
                      <option value="Administrador">Administrador</option>
                      <option value="Vendedor">Vendedor</option>
                      <option value="Especial">Especial</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="panel">Subir Foto</div>
                <input type="file" class="nuevaFoto" name="editarFoto">
                <p class="help-block">Peso maximo de la foto 20 MB</p>
                <img src="vistas/img/usuarios/usuario.png" class="img-thumbnail previsualizar" width="100px">
                <input type="hidden" name="fotoActual" id="fotoActual" >
            </div>


        
      </div>
      </div>
      <!-- pie de pagina de modal  -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Modificar Usuario</button>
      </div>
 
        <?php 
          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();
        ?>  

      </form>
    </div>
  </div>
</div>

