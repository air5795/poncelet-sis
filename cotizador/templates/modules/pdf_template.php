<?php

require_once '../../../sistema/pdf/vendor/autoload.php';
use Dompdf\Dompdf;
ob_start();
?>
<head>
  
    <meta charset="utf-8" />
    
  
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

    .fon{
      font-size: 10px;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .fon2{
      background-color: coral;
    }


  </style>
</head>
<body style="background-color:#ffefea;">
        <header>
                                    <div id="watermark" >
              
                                        <img src="FONDITO.png" height="100%" width="100%" />
                                    </div>
        </header>

        <footer>
                                    <div id="watermark" >
                                        <img src="FONDITOA.png" height="100%" width="100%" />
                                        
                                    </div>
        </footer>
  <!-- Cabecera -->
  
  <table width="100%" style="border-bottom: 10px solid white;" >
  
    
    <tr class="fon2" style=" color:white; text-align:left;">
      <th style="background-color: coral;" >DATOS DE LA EMPRESA</th>
    </tr>

    <tr class="fon">
      <td> <STRONG> NOMBRE : </STRONG> ALBERTO ARISPE PONCE </td>
      <td> <strong> CIUDAD : </strong> POTOSÍ</td>
      <td> <strong> NIT : </strong> 6601358013</td>
      
    </tr>

    <tr class="fon">
      <td colspan="3"> <strong> DIRECCION : </strong> OFICINA CENTRAL GUALBERTO VILLARROEL N°12 EDIF PLAZA AMB 8 PISO 4 </td>
      
    </tr>
    <tr class="fon">
    <td> <strong> TELEFONO : </strong> 72867168 - 70022060 </td>
      <td> <strong> EMAIL : </strong> poncelet.bo@gmail.com</td>
    </tr>
    
  </table>

  <!-- Información de la empresa -->
  <table width="100%" style="border-bottom: 10px solid white;">
    <tr style="background-color: coral;">
      <th style="background-color: coral; color:white; text-align:left" >INFORMACION DEL CLIENTE </th>
    </tr>
    <tr>
      <td><strong>Para:</strong> Gobierno Autonomo Municipal de Potosi </td>

    </tr>
  </table>

  <br/>

  <!-- Resumen de la cotización -->
  <table width="100%">
    <thead style="background-color: coral; color: white;">
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
        <td align="right"  style=" background-color: coral;font-size:15px ; color:white;">1450</td>
      </tr>
      
    </tfoot>
  </table>
</body>
</html>


<?php 
                    $html = ob_get_clean();
                    $dompdf = new Dompdf();
                    $dompdf->loadHtml($html);
                    $dompdf->setPaper('A4','portrait');
                    //$dompdf->setPaper('letter','portrait');
                    //$dompdf->setPaper('A4', 'landscape');
                    $canvas = $dompdf->getCanvas(); 
 

                    $dompdf->render();

                    $dompdf->stream('Inventario',array('attachment'=>0)); 
                                      
                ?>
