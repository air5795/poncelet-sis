
  <?php require_once INCLUDES.'head.php' ?>

  <?php
    // conexion a bases de datos
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'cotizacion';

    $conexion = @mysqli_connect($host,$user,$password,$db);

    

    if (!$conexion) {
        echo "Error en la conexion";
    } 


    $sql = "SELECT * FROM cliente";
    $resulatado = mysqli_query($conexion,$sql);



?>



    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-sm-12 wrapper_notifications">

        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-12">
            <div class="card mb-3">
              <div class="card-header" style="padding: 0;text-align: center;background-color: #343a40; color:white;">Informacion de la Cotizacion y de el Cliente</div>
              <div class="card-body">
                <form >
                  <div class="form-group row">
                    <div class="col-sm-8" >
                    <label for="nombre">Nombre de Cliente</label>
                                    <select style="width: 100%;font-size:12px ;" name="nombre" id="nombre" class="form-control form-control-sm  js-example-basic-single " required >
                                        <option value="" >Seleccione una opción : </option>
                                        <?php
                                            $query = mysqli_query($conexion, "SELECT * from cliente ORDER BY NOMBRE ASC;");
                                            $result = mysqli_num_rows($query);
                                            if ($result > 0) {
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo '<option value="'.$data['nombre'].'">'.$data['nombre'].'</option>';
                                                $nombre = $data['nombre'];
                                            }}
                                        ?>
                                    </select>
                    </div>
                    
                    
                    <div class="col-sm-4 ">
                      <a class="btn btn-sm btn-primary" id="buscar"><i class="fa-solid fa-magnifying-glass"></i>  </a>
                      <a class="btn btn-sm btn-secondary" id="nuevo" href="../registro_cliente.php"><i class="fa-solid fa-user-plus"></i> </a>
                    </div>
                    
                    
                    <div class="col-sm-6">
                      
                    <label for="empresa">NIT</label>
                      <input autocomplete="off" type="text" class="form-control form-control-sm " id="empresa" name="nit" value=""  required  >
                      
                    </div>
                    <div class="col-sm-6">
                    <label for="email">Lugar de Entrega</label>
                      <input autocomplete="off" type="text" class="form-control form-control-sm " id="email" name="direccion"   required  >
                      
                    </div>
                    
                    <div class="col-sm-4">
                    <label for="garantia">Tiempo de Garantia </label>
                    <select name="garantia" id="garantia" class="form-control form-control-sm ">
                        <option value="1 año">1 año</option>
                        <option value="2 años">2 años</option>
                        <option value="3 años">3 años</option>
                        <option value="4 años">4 años</option>
                      </select> 
                      
                    </div>
                    <div class="col-sm-4">
                    <label for="garantia">Validez de Cotizacion </label>
                    <select name="valides" id="valides" class="form-control form-control-sm ">
                        <option value="5 dias">5 dias</option>
                        <option value="6 dias">6 dias</option>
                        <option value="7 dias">7 dias</option>
                        <option value="8 dias">8 dias</option>
                        <option value="9 dias">9 dias</option>
                        <option value="10 dias">10 dias</option>
                        <option value="11 dias">11 dias</option>
                      </select> 
                      
                    </div>
                    <div class="col-sm-4">
                    <label for="garantia">Tiempo de Entrega</label>
                    <select name="entrega" id="entrega" class="form-control form-control-sm ">
                        <option value="5 dias">5 dias</option>
                        <option value="6 dias">6 dias</option>
                        <option value="7 dias">7 dias</option>
                        <option value="8 dias">8 dias</option>
                        <option value="9 dias">9 dias</option>
                        <option value="10 dias">10 dias</option>
                        <option value="11 dias">11 dias</option>
                        <option value="12 dias">12 dias</option>
                        <option value="13 dias">13 dias</option>
                        <option value="14 dias">14 dias</option>
                        <option value="15 dias">15 dias</option>
                        <option value="16 dias">16 dias</option>
                      </select> 
                      
                    </div>
                    
                  </div> 
                  
                  

                </form>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-header" style="padding: 0;text-align: center; background-color: #343a40; color:white;">Agregar Nuevo Concepto</div>
              <div class="card-body">
                <form id="add_to_quote" method="POST">
                  <div class="form-group row">
                  <div class="col-sm-8" >
                    <label for="nombre">BUSCAR EN BASE DE DATOS</label>
                                    <select style="width: 100%;font-size:12px ;" name="nombrep" id="nombrep" class="form-control form-control-sm  js-example " >
                                        <option value="" >Seleccione una opción : </option>
                                        <?php
                                            $query = mysqli_query($conexion, "SELECT * from productos ORDER BY p_descripcion ASC;");
                                            $result = mysqli_num_rows($query);
                                            if ($result > 0) {
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo '<option value="'.$data['p_descripcion'].'">'.$data['p_descripcion'].'</option>';
                                                $nombre = $data['p_descripcion'];
                                            }}
                                        ?>
                                    </select>
                    </div>
                    <div class="col-sm-4 ">
                      <a class="btn btn-sm btn-primary" id="buscarp"><i class="fa-solid fa-magnifying-glass"></i>  </a>
                      <a class="btn btn-sm btn-secondary" id="nuevo" href="../registro_cliente.php"><i class="fa-solid fa-cart-plus"></i> </a>
                    </div>
                    <div class="col-sm-12">
                      <label for="concepto">Concepto</label>
                      <input autocomplete="off" type="text" class="form-control form-control-sm " id="concepto" name="concepto"  required  >
                      
                    </div>
                    <div class="col-sm-6">
                      <label  for="marca">Marca</label>
                      <input  autocomplete="off" type="text" class="form-control form-control-sm " id="marca" name="marca"  >
                      
                    </div>
                    
                    
                    <div class="col-sm-6">
                    <label for="tipo">Unidad/Medible </label>
                      <select name="tipo" id="tipo" class="form-control form-control-sm ">
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
                    <div class="col-sm-6">
                    <label for="cantidad">Cantidad</label>
                      <input type="number" class="form-control form-control-sm " id="cantidad" name="cantidad" min="1" max="99999" value="1" required  >
                      
                    </div>

                    

                    <div class="col-sm-6">
                    <label for="precio_unitario_c">Precio Unitario de Compra (Bs) </label>
                        <input autocomplete="off" style="background-color: #e3ffe3 ;" type="number" 
                        class="form-control " id="precio_unitario_c" name="precio_unitario_c" placeholder="0" oninput="calcular_a_bs()" required>
                      
                    </div>

                    <div class="col-sm-6">
                    <label for="precio_unitario">Precio Unitario de venta (Bs) </label>
                      <input autocomplete="off" style="background-color: #e3ffe3 ;" type="number" 
                      class="form-control " id="precio_unitario" name="precio_unitario" placeholder="0"  required>
                      
                    </div>

                    

                    <div  class="col-sm-6">
                    <label for="envio">Envio (Transporte o imprevistos)</label>
                        <input autocomplete="off" style="background-color: #faffe3 ;" type="number" class="form-control " id="envio" name="envio" placeholder="0.00" required>
                        
                    </div>

                    


                  </div>
                  <hr>
                  <button class="btn btn-secondary" type="submit" ><i class="fa-solid fa-arrow-right"></i> Agregar Concepto</button>
                  <button class="btn btn-danger" type="reset" >Cancelar</button>
                </form>
              </div>
            </div>
        </div>

        <div class="col-lg-7 col-12">

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
                      <input type="text" class="form-control" id="marca" name="marca"   >
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

                    <div class="col-sm-2">
                      <label for="precio_unitario">Precio Unitario </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Bs</span>
                        </div>
                        <input type="text" class="form-control" id="precio_unitario" name="precio_unitario" placeholder="0.00" required>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <label for="precio_unitario_c">Precio Unitario de Compra </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Bs</span>
                        </div>
                        <input type="text" class="form-control" id="precio_unitario_c" name="precio_unitario_c" placeholder="0.00" required>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-3">
                      <label for="envio">Envio</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">Bs</span>
                        </div>
                        <input type="text" class="form-control" id="envio" name="envio" placeholder="0.00" required>
                      </div>
                    </div>
                  

                      <hr>
                  
                  <button class="btn btn-success" type="submit" >Guardar Cambios</button>
                  <button class="btn btn-danger" type="reset" id="cancel_edit" >Cancelar</button>
                </form>
              </div>
            </div>

            </div>
            

          
            <div class="card">
              <div style="background-color: #343a40; color:white;" class="card-header">Resumen de Cotizacion <button class="btn btn-danger btn-sm float-right restart_quote "> <i class="fa-solid fa-power-off"></i> Reiniciar</button> </div>
                <div class="card-body wrapper_quote">
                  
                </div>
                <div class="card-footer">
                  <button class="btn btn-secondary" id="generate_quote" ><i class="fa-solid fa-hand-holding-dollar"></i> Generar Cotizacion</button>
                  <a class="btn" id="download_quote" style="display: none; color:red; background-color:#e9e9e9" href="" ><i class="fa-solid fa-print"></i> Descargar PDF</a>      
                </div>
          </div>
        </div>
      </div>
      
    </div>
    <?php require_once INCLUDES.'footer.php' ?>

  

    


































