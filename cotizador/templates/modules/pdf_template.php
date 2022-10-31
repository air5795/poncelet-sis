<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cotización</title>

  <style type="text/css">
     /** Define the margins of your page **/
     @page {
                margin: 100px 25px;
            }

            header {
                position: fixed;
                top: -60px;
                left: 0px;
                right: 0px;
                height: 50px;
                font-size: 20px !important;

                /** Extra personal styles **/
                background-color: #008B8B;
                color: white;
                text-align: center;
                line-height: 35px;
            }

            footer {
                position: fixed; 
                bottom: -60px; 
                left: 0px; 
                right: 0px;
                height: 50px; 
                font-size: 20px !important;

                /** Extra personal styles **/
                background-color: #008B8B;
                color: white;
                text-align: center;
                line-height: 35px;
            }

    * {
      font-family: Verdana, Arial, sans-serif;
    }
    table{
      font-size: x-small;
    }
    tfoot tr td{
      font-weight: bold;
      font-size: x-small;
    }
    .gray {
      background-color: lightgray;
    }

    .success {
      color: green;
    }


  </style>
</head>
<body>
        <header>
                                    <div id="watermark" >
                                        <img src="FONDITO.png" height="100%" width="100%" />
                                    </div>
        </header>

        <footer>
                                    <div id="watermark" >
                                        <img src="FONDITO.png" height="100%" width="100%" />
                                        
                                    </div>
        </footer>
  <!-- Cabecera -->
  <table width="100%">
    <tr>
      <td valign="top"><img src="<?php echo '../../assets/img/vacio.png' ?>" alt="" width="150px"/></td>
      <td align="right">
        <h3>PONCELET</h3>
        <pre>
          Jhon Doe CEO
          Joystick
          XX101010101
          5512 3465 78
          FAX
        </pre>
      </td>
    </tr>
  </table>

  <!-- Información de la empresa -->
  <table width="100%">
    <tr>
      <td><strong>De:</strong> Jhon Doe - Joystick</td>
      <td><strong>Para:</strong> Cliente - Empresa</td>
    </tr>
  </table>

  <br/>

  <!-- Resumen de la cotización -->
  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>#</th>
        <th>Descripción</th>
        <th>Precio unitario</th>
        <th>Cantidad</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      
        <tr>
          <th scope="row">1</th>
          <td>computdora portatil</td>
          <td align="right">$1400</td>
          <td align="center">1</td>
          <td align="right">$1400</td>
        </tr>
      
    </tbody>
    <tfoot>
      <tr>
        <td colspan="3"></td>
        <td align="right">Subtotal $</td>
        <td align="right">1400</td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td align="right">Impuestos $</td>
        <td align="right">20</td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td align="right">Envío $</td>
        <td align="right">30</td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td align="right">Total $</td>
        <td align="right" class="gray"><h3 style="margin: 0px 0px;">1450</h3></td>
      </tr>
      <tr>
        <td colspan="5" align="right">impuestos incluidos</td>
      </tr>
    </tfoot>
  </table>
</body>
</html>