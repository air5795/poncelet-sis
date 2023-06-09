<div class="login-box">
  <div class="login-logo">
    
    <img src="vistas/img/plantilla/iconogrande2.png" alt="" class="img-responsive" style="padding: 30px 100px 0px 100px;">
    <a href=""><b>SIS-</b>PONCELET</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">
        <input name="ingUsuario" type="text" class="form-control" placeholder="Usuario" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input name="ingPassword" type="password" class="form-control" placeholder="Contraseña" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">
        
        <div class="col-xs-12">
          <button type="submit" class="btn btn-danger btn-block  ">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>


        <?php
    
            $login = new ControladorUsuarios();
            $login -> ctrIngresoUsuario();

        ?>


    </form>

   

   

  </div>
  <!-- /.login-box-body -->
</div>