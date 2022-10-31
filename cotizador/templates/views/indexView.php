
  <?php require_once INCLUDES.'head.php' ?>
        



    
    <div class="container-fluid py-5">
      <div class="row">
        <div class="col-12 wrapper_notifications">

        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card mb-3">
              <div class="card-header">Informacion del Cliente</div>
              <div class="card-body">
                <form >
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre"  required>
                    </div>
                    
                    <div class="col-sm-6">
                      <label for="empresa">Empresa</label>
                      <input type="text" class="form-control" id="empresa" name="nit"  required  >
                    </div>
                    <div class="col-sm-6">
                      <label for="email">E-mail</label>
                      <input type="text" class="form-control" id="email" name="direccion"  required  >
                    </div>
                  </div>  
                </form>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-header">Agregar Nuevo Concepto</div>
              <div class="card-body">
                <form id="add_to_quote" method="POST">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label for="concepto">Concepto</label>
                      <input type="text" class="form-control" id="concepto" name="concepto"  require  >
                    </div>
                    
                    <div class="col-sm-3">
                      <label for="tipo">Tipo de Producto </label>
                      <select name="tipo" id="tipo"  class="form-control">
                        <option value="producto">Producto</option>
                        <option value="servicio">Servicio</option> 
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label for="cantidad">Cantidad</label>
                      <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="99999" value="1" required  >
                    </div>

                    <div class="col-5">
                      <label for="precio_unitario">Precio Unitario </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="0.00" required>
                      </div>
                    </div>
                  </div>
                  <br>
                  <button class="btn btn-success" type="submit" >Agregar Concepto</button>
                  <button class="btn btn-danger" type="reset" >Cancelar</button>
                </form>
              </div>
            </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="card">
            <div class="card-header">Resumen de Cotizacion <button class="btn btn-danger float-right restart_quote ">Reiniciar</button> </div>
            
            
            <div class="card-body wrapper_quote">
              
              <div class="table-responsive">
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require_once INCLUDES.'footer.php' ?>

  

    


































