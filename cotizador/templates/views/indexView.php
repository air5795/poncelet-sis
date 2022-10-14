<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

        



    
    <div class="container-fluid py-5">
      <div class="row">
        <div class="col-lg-8 col-12">
            <div class="card mb-3">
              <div class="card-header">Informacion del Cliente</div>
              <div class="card-body">
                <form action="">
                  <div class="form-group row">
                    <div class="col-4">
                      <label for="">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="GOBIERNO AUTONOMO MUNICIPAL DE COLCHA 'K' "  required>
                    </div>
                    <div class="col-4">
                      <label for="">Nit</label>
                      <input type="text" class="form-control" id="nit" name="nit" placeholder="650123025" required  >
                    </div>
                    <div class="col-4">
                      <label for="">Direccion</label>
                      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="GAM COLCHA 'k'" required  >
                    </div>
                  </div>  
                </form>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-header">Nuevo Concepto</div>
              <div class="card-body">
                <form action="">
                  <div class="form-group row">
                    <div class="col-3">
                      <label for="">Concepto</label>
                      <input type="text" class="form-control" id="concepto" name="concepto" placeholder="PARALANTES JBL EON 715 " require  >
                    </div>
                    <div class="col-3">
                      <label for="">Tipo de Producto</label>
                      <select name="tipo" id="tipo"  class="form-control">
                        <option value="producto">Producto</option>
                        <option value="servicio">Servicio</option>
                      </select>
                    </div>
                    <div class="col-3">
                      <label for="">Cantidad</label>
                      <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" max="99999" value="1" required  >
                    </div>

                    <div class="col-3">
                      <label for="precio_unitario">Precio Unitario</label>
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



















        <div class="col-lg-4 col-12">
          <div class="card">
            <div class="card-header">Resumen de Cotización</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Concepto</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                      <th>SubTotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Guitarra Electrica Ibañez</td>
                      <td>1</td>
                      <td class="text-right">185 bs</td>
                      <td class="text-right">185 bs</td>
                    </tr>





                    <tr>
                      <td class="text-right" colspan="3">Sub TOTAL</td>
                      <td class="text-right">185 bs</td>
                    </tr>
                  </tbody>

                  

                </table>
              </div>
              <div class="card-footer">
                  <button class="btn btn-primary" type="submit" >Descargar PDF</button>
                  <button class="btn btn-success" type="reset" >Enviar por CORREO</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>































