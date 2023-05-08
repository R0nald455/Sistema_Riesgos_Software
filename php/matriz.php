<?php include '../template/header.php';
$riesgo = $_GET['riesgo'];
include_once "../model/conexion.php";
$sql="Select probabilidad,impacto from tblriesgos where id=".$riesgo;
$resultado=$bd->query($sql);
$fila = $resultado->fetch(PDO::FETCH_ASSOC);
$impacto="nulo";


//se calcula el nivel de riesgo 
$nivelRiesgo=$fila['impacto']*$fila['probabilidad'];
$riesgo="nulo";
if($nivelRiesgo>=20){
  $riesgo="Muy Alto";
}elseif($nivelRiesgo>=15){
  $riesgo="Alto";
}elseif($nivelRiesgo>=9){
  $riesgo="Medio";
}elseif($nivelRiesgo>=6){
  $riesgo="Bajo";
}else{
  $riesgo="Muy Bajo";
}






switch ($fila['impacto']) {
  case 1:
    $impacto = "Insignificante";
    break;
  case 2:
    $impacto = "Menor";
    break;
  case 3:
    $impacto = "Moderado";
    break;
  case 4:
    $impacto = "Mayor";
    break;
  case 5:
    $impacto = "Catastrófico";
    break;
}
$probabilidad="nulo";
switch ($fila['probabilidad']) {
  case 1:
    $probabilidad = "Raro";
    break;
  case 2:
    $probabilidad = "Improbable";
    break;
  case 3:
    $probabilidad = "Posible";
    break;
  case 4:
    $probabilidad = "Probable";
    break;
  case 5:
    $probabilidad = "Casi Seguro";
    break;
}

?>




<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-7">
<br>
<div class='card'>
<div class='p-4 '>
  <?php echo "Nivel de probabilidad <b> ".$probabilidad."</b>";?>
  <table class='table table-bordered'>
    <tr><th colspan='2'>Nivel de probabilidad</th></tr>

    <tr>
      <th>Descriptor</th><th>Descriptor</th>
    </tr>
    <tr>
      <td>Raro</td><td>El evento puede ocurrir sólo en
      circunstancias excepcionales.</td>
    </tr>
    <tr>
      <td>Improbable</td><td>El evento puede ocurrir en
      algún momento.</td>
    </tr>
    <tr>
      <td>Posible</td><td>El evento podría ocurir en algún
      momento</td>
    </tr>
    <tr>
      <td>Probable</td><td>El evento probablemente
      ocurrirá en la mayoría de las
      circunstancias.</td>
    </tr>
    <tr>
      <td>Casi Seguro</td><td>Se espera que en evento
      ocurra en la mayoría de las
      circunstancias.</td>
    </tr>
  </table>
</div>
</div>

<br>
<div class='card'>
<div class='p-4 '>
<?php echo " Nivel de impacto de consecuencias <b> ".$impacto."</b>";?>
</b>
<table class='table table-bordered'>
<tr><th colspan='2'>Nivel de impacto</th></tr>
<tr><th>Descriptor</th><th>Descriptor</th></tr>
<tr><td>Insignificante</td><td>Si el hecho llegara a
presentarse, tendría
consecuencias o efectos
mínimos</td></tr>
<tr><td>Menor</td><td>Si el hecho llegara a
presentarse, tendría bajo
impacto</td></tr>
<tr><td>Moderado</td><td>Si el hecho llegara a
presentarse, tendría mediano
impacto.</td></tr>
<tr><td>Mayor</td><td>Si el hecho llegara a
presentarse, tendría alto
impacto.</td></tr>
<tr><td>Catastrófico</td><td>Si el hecho llegara a
presentarse, tendría
desastrosas consecuencias.</td></tr>
</table>
</div>
</div><br>





<head>
  
    <meta charset="utf-8">
      <title>Matriz de Evaluación de Riesgos</title>
      <style>
          table {
            border-collapse: collapse;
            width: 30%;
          }
          th, td {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
          }

      </style>
</head>

<body>
<div class='card'>
<div class='p-4 '>
    <center>
    <h1>Matriz de Evaluación de Riesgos</h1>
    <table >
      <thead>
        <tr>
          <th></th>
          <th>Insignificante</th>
          <th >Menor</th>
          <th >Moderado</th>
          <th >Mayor</th>
          <th >Catastrofico</th>
        </tr>
      </thead>    
      <tbody>
        <tr>
          <td >Raro</td>
          <td bgcolor="lime"></td>
          <td bgcolor="lime"></td>
          <td bgcolor="lime"></td>
          <td bgcolor="lime"></td>
          <td bgcolor="green"></td>          
        </tr>
        <tr>
          <td>Improbable</td>
          <td bgcolor="lime"></td>
          <td bgcolor="lime"></td>
          <td bgcolor="green"></td>
          <td bgcolor="green"></td>
          <td bgcolor="yellow"></td>
        </tr>
        <tr>
          <td>Posible</td>
          <td bgcolor="lime"></td>
          <td bgcolor="green"></td>
          <td bgcolor="yellow"></td>
          <td bgcolor="yellow"></td>
          <td bgcolor="orange"></td>
        </tr>
        <tr>
          <td>Problamente</td>
          <td bgcolor="lime"></td>
          <td bgcolor="green"></td>
          <td bgcolor="yellow"></td>
          <td bgcolor="orange"></td>
          <td bgcolor="red"></td>
        </tr>
        <tr>
          <td>Casi seguro</td>
          <td bgcolor="green"></td>
          <td bgcolor="yellow"></td>
          <td bgcolor="orange"></td>
          <td bgcolor="red"></td>
          <td bgcolor="red"></td>
        </tr>
      </tbody>
    </table>
    <?php echo "El nivel de riesgo es <b> ".$riesgo."</b>";?>


        </center>
        </div>
  </div>
  </div>
    </div>
</div>
  </body>
<?php include '../template/footer.php' ?>