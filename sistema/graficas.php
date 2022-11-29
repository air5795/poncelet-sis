<?php
include "../conexion.php";

$sql = "SELECT monto,fecha from proyectos_comer";
$result = mysqli_query($conexion,$sql);

$valoresY=array();//montos
$valoresX=array();//fechas


while($ver = mysqli_fetch_row($result)){
    $valoresY[] = $ver[0];
    $valoresX[] = $ver[1];

}

$datosX = json_encode($valoresX);
$datosY = json_encode($valoresY);


?>

<div id="grafica">

</div>


<script type="text/javascript">
    function crearCadenaLineal(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }

        return arr;
    }
</script>

<script type="text/javascript">

datosX=crearCadenaLineal('<?php echo $datosX  ?>');
datosY=crearCadenaLineal('<?php echo $datosY  ?>');

var trace1 = {
  x: datosX,
  y: datosY,
  type: 'bar',
  text: ['4.17 below the mean', '4.17 below the mean', '0.17 below the mean', '0.17 below the mean', '0.83 above the mean', '7.83 above the mean'],
  marker: {
    color: 'rgb(142,124,195)'
  }
};

var data = [trace1];

var layout = {
  title: 'Number of Graphs Made this Week',
  font:{
    family: 'Raleway, sans-serif'
  },
  showlegend: false,
  xaxis: {
    tickangle: -45
  },
  yaxis: {
    zeroline: false,
    gridwidth: 2
  },
  bargap :0.05
};

Plotly.newPlot('grafica', data, layout);




</script>