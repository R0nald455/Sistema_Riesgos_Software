<?php include '../template/header.php' ?>

<?php
    include_once "../model/conexion.php";
    $sql="Select * from tblriesgos";
    $resultado=$bd->query($sql);
    $valores=array();  

  




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
        <div class="col-md-9">
        <div class='card'>
        <div class='p-4'><div class='mb-3'> <table>
                <tr><th>Riesgo</th><th>Probabilidad</th><th>Nivel de Riesgo</th></tr>
                <?php  while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) { 
                  array_push($valores,$fila['riesgo']);
                  if($fila["riesgo"]>=20){
                    $riesgo="Muy Alto";
                  }elseif($fila["riesgo"]>=15){
                    $riesgo="Alto";
                  }elseif($fila["riesgo"]>=9){
                    $riesgo="Medio";
                  }elseif($fila["riesgo"]>=6){
                    $riesgo="Bajo";
                  }else{
                    $riesgo="Muy Bajo";
                  }
                    echo"
                <tr><td>" . $fila["titulo"] . "</td><td>" . $fila["probabilidad"] . "</td><td class='".color($riesgo)."' >" . $riesgo . "</td></tr>
                ";
                }?>
            </table>
          

            <?php
            $resultado=array_count_values($valores);
            ?>
    <br>
    <table >

        <tr>
          <th></th>
          <th>Insignificante</th>
          <th >Menor</th>
          <th >Moderado</th>
          <th >Mayor</th>
          <th >Catastrofico</th>
        </tr>
      </thead>    
      
        <tr>
          <td>Raro</td>
          <td class='<?php echo color2($resultado,1);?>' ><?php echo numero($resultado,1);?></td>
          <td class='<?php echo color2($resultado,2);?>' ><?php echo numero($resultado,2);?></td>
          <td class='<?php echo color2($resultado,3);?>' ><?php echo  numero($resultado,3);?></td>
          <td class='<?php echo color2($resultado,4);?>' ><?php echo numero($resultado,4);?></td>
          <td class='<?php echo color2($resultado,4);?>' ><?php echo numero($resultado,5);?></td>          
        </tr>
        <tr>
          <td>Improbable</td>
          <td class='<?php echo color2($resultado,6);?>' ><?php echo numero($resultado,6);?></td>
          <td class='<?php echo color2($resultado,7);?>' ><?php echo numero($resultado,7);?></td>
          <td class='<?php echo color2($resultado,8);?>' ><?php echo numero($resultado,8);?></td>
          <td class='<?php echo color2($resultado,9);?>' ><?php echo numero($resultado,9);?></td>
          <td class='<?php echo color2($resultado,10);?>' ><?php echo numero($resultado,10);?></td>
        </tr>
        <tr>
          <td>Posible</td>
          <td class='<?php echo color2($resultado,11);?>' ><?php echo numero($resultado,11);?></td>
          <td class='<?php echo color2($resultado,12);?>' ><?php echo numero($resultado,12);?></td>
          <td class='<?php echo color2($resultado,13);?>' ><?php echo numero($resultado,13);?></td>
          <td class='<?php echo color2($resultado,14);?>' ><?php echo numero($resultado,14);?></td>
          <td class='<?php echo color2($resultado,15);?>' ><?php echo numero($resultado,15);?></td>
        </tr>
        <tr>
          <td>Problamente</td>
          <td class='<?php echo color2($resultado,16);?>' ><?php  echo numero($resultado,16);?></td>
          <td class='<?php echo color2($resultado,17);?>' ><?php  echo numero($resultado,17);?></td>
          <td class='<?php echo color2($resultado,18);?>' ><?php  echo numero($resultado,18);?></td>
          <td class='<?php echo color2($resultado,19);?>' ><?php echo numero($resultado,19);?></td>
          <td class='<?php echo color2($resultado,20);?>' > <?php  echo numero($resultado,20);?></td>
        </tr>
        <tr>
          <td>Casi seguro</td>
          <td class='<?php echo color2($resultado,21);?>' ><?php  echo numero($resultado,21);;?></td>
          <td class='<?php echo color2($resultado,22);?>' ><?php  echo numero($resultado,22);?></td>
          <td class='<?php echo color2($resultado,23);?>' ><?php  echo numero($resultado,23);?></td>
          <td class='<?php echo color2($resultado,24);?>' ><?php  echo numero($resultado,24);?></td>
          <td class='<?php echo color2($resultado,25);?>' ><?php  echo numero($resultado,25);?></td>
        </tr>
      
    </table>


                </div>               
            </div>
       


    

        
  

              

                </div><br>
        </div>
    </div>
</div>

<?php include '../template/footer.php'; 

function numero($resultado,$dato){
if(isset($resultado[$dato])){
  return $resultado[$dato];
}else{
  
}
}

function color2($resultado,$dato){
  if(isset($resultado[$dato])){
    $valor=$resultado[$dato];
    if($valor>=4){
      return "muyAlto";
    }elseif($valor>=3){
      return "Alto";
    }elseif($valor>2){
      return "";
    }elseif($valor>1){
      return "Bajo";
    }else{
      return "muyBajo";
    }
  }else{
  }
}

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