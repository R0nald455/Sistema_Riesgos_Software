<?php include '../template/header.php' ?>

<?php
    include_once "../model/conexion.php";
    $sql="Select * from tblriesgos";
    $resultado=$bd->query($sql);
?>





<style>


 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}


  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

.muyAlto{
    background:rgb(168, 68, 68);
    text-decoration: double;
    color: #FFFFFF;
}
.Alto{
    background:rgb(202, 140, 69);
    text-decoration: double;
    color: #FFFFFF;
}
.Medio{
    background:rgb(226, 224, 69);
    text-decoration: double;
    color: #080808;
}
.Bajo{
    background:rgb(52, 141, 49);
    text-decoration: double;
    color: #FFFFFF;
}
.muyBajo{
    background:rgb(107, 219, 112);
    text-decoration: double;
    color: #FFFFFF;
}

</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
        <div class='card'>
        <div class='p-4'><div class='mb-3'> <table>
                <tr><th>Riesgo</th><th>Descripcion</th><th>Nivel de Riesgo</th></tr>
                <?php  while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) { 
                    echo"
                <tr><td>" . $fila["titulo"] . "</td><td>" . $fila["probabilidad"] . "</td><td class='".color($fila["riesgo"])."' >" . $fila["riesgo"] . "</td></tr>
                ";
                }?>
            </table>
                </div>               
            </div>
                </div><br>
        </div>
    </div>
</div>

<?php include '../template/footer.php'; 

function color($dato){
    switch ($dato) {
        case "Muy Alto":
          return "muyAlto";
          break;
        case "Alto":
          return "Alto";
          break;
        case "Medio":
          return "Medio";
          break;
        case "Bajo":
          return "Bajo";
          break;
        case "Muy Bajo":
          return "muyBajo";
          break;
      }



}


?>