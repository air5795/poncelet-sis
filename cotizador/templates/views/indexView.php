
  <?php require_once INCLUDES.'head.php' ?>

    <div class="container-fluid py-5">
      <div class="row">
        <div class="col-12 wrapper_notifications">

        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-12">
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
                    <div class="col-sm-6">
                      <label for="marca">Marca</label>
                      <input type="text" class="form-control" id="marca" name="marca"  require  >
                    </div>
                    
                    
                    <div class="col-sm-6">
                      <label for="tipo">Unidad/Medible </label>
                      <select name="tipo" id="tipo" class="form-control">
                        <option value="Unidad">Unidad</option>
                        <option value="Caja">Caja</option>
                        <option value="Pieza">Pieza</option>
                        <option value="Equipo">Equipo</option>
                        <option value="Paquete">Paquete</option>
                        <option value="Pliegue">Pliegue</option>
                        <option value="Pliego">Pliego</option>
                        <option value="Par">Par</option>
                        <option value="Docena">Docena</option>
                        <option value="Bidon">Bidon</option>
                        <option value="Block">Block</option>
                        <option value="Bolsa">Bolsa</option>
                        <option value="Bote">Bote</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label for="cantidad">Cantidad</label>
                      <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="99999" value="1" required  >
                    </div>

                    <div class="col-sm-5">
                      <label for="precio_unitario">Precio Unitario </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Bs</span>
                        </div>
                        <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="0.00" required>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <label for="precio_unitario_c">Precio Unitario de Compra </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Bs</span>
                        </div>
                        <input type="text" class="form-control" id="precio_unitario_c" name="precio_unitario_c" placeholder="0.00" required>
                      </div>
                    </div>

                    <hr>

                    <div class="col-sm-12">
                      <label for="envio">Envio (Transporte o imprevistos)</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Bs</span>
                        </div>
                        <input type="text" class="form-control" id="envio" name="envio" placeholder="0.00" required>
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

        <div class="col-lg-8 col-12">

        <div class="wrapper_update_concept " style="display:none ;" >
          <div class="card mb-3">
              <div class="card-header">Editar Concepto</div>
              <div class="card-body">
                <form id="save_concept" method="POST">
                  <input type="hidden" class="form-control" id="id_concepto" name="id_concepto" >
                  <div class="form-group row">
                    <div class="col-sm-6">
                      <label for="concepto">Concepto</label>
                      <input type="text" class="form-control" id="concepto" name="concepto"  required  >
                    </div>
                    
                    <div class="col-sm-3">
                      <label for="marca">Marca</label>
                      <input type="text" class="form-control" id="marca" name="marca"  required  >
                    </div>
                    
                    
                    <div class="col-sm-3">
                      <label for="tipo">Unidad/Medible </label>
                      <select name="tipo" id="tipo" class="form-control">
                        <option value="Unidad">Unidad</option>
                        <option value="Caja">Caja</option>
                        <option value="Pieza">Pieza</option>
                        <option value="Equipo">Equipo</option>
                        <option value="Paquete">Paquete</option>
                        <option value="Pliegue">Pliegue</option>
                        <option value="Pliego">Pliego</option>
                        <option value="Par">Par</option>
                        <option value="Docena">Docena</option>
                        <option value="Bidon">Bidon</option>
                        <option value="Block">Block</option>
                        <option value="Bolsa">Bolsa</option>
                        <option value="Bote">Bote</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <label for="cantidad">Cantidad</label>
                      <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="99999" value="1" required  >
                    </div>

                    <div class="col-sm-5">
                      <label for="precio_unitario">Precio Unitario </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Bs</span>
                        </div>
                        <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="0.00" required>
                      </div>
                    </div>
                    <div class="col-sm-5">
                      <label for="precio_unitario_c">Precio Unitario de Compra </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Bs</span>
                        </div>
                        <input type="text" class="form-control" id="precio_unitario_c" name="precio_unitario_c" placeholder="0.00" required>
                      </div>
                    </div>
                  </div>
                  <br>

                  <div class="col-sm-12">
                      <label for="envio">Envio (Transporte o imprevistos)</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Bs</span>
                        </div>
                        <input type="text" class="form-control" id="envio" name="envio" placeholder="0.00" required>
                      </div>
                    </div>
                  
                  <button class="btn btn-success" type="submit" >Guardar Cambios</button>
                  <button class="btn btn-danger" type="reset" id="cancel_edit" >Cancelar</button>
                </form>
              </div>
            </div>

            </div>
            

          
            <div class="card">
            <div class="card-header">Resumen de Cotizacion <button class="btn btn-danger float-right restart_quote ">Reiniciar</button> </div>
            
            
            <div class="card-body wrapper_quote">
              
              <div class="table-responsive">
                
              </div>
              
            </div>

                    <div class="card-footer">
                        <button class="btn btn-success" id="generate_quote" >Generar Cotizacion</button>
                        <a class="btn btn-primary" id="download_quote" style="display: none;" href="" >Descargar PDF</a>
                        
                    </div>
          </div>
        
        </div>
        

      </div>
      
    </div>
    <?php require_once INCLUDES.'footer.php' ?>

  

    


































