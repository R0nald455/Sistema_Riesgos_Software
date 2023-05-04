<!DOCTYPE html>
<html>
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
      th {
        background-color: #f2f2f2;
      }
      th.rotate {
        transform: rotate(0deg);
        width: 50px;
      }
      td.low, td.medium, td.high {
        font-weight: bold;
      }
      td.low {
        background-color: #c1e0c1;
      }
      td.medium {
        background-color: #ffd699;
      }
      td.high {
        background-color: #ff9999;
      }
    </style>
  </head>


  <?php
    include_once "../model/conexion.php";
    $sql="Select titulo from tblriesgos";
        $resultado=$bd->query($sql);
?>













  <body>
    <h1>Matriz de Evaluación de Riesgos</h1>
    <table>
    <thead>
                      <tr>
                         <th>Consecuencias</th>
                        
                        <th >Nunca</th>
                        <th >Algunas veces</th>
                        <th >Probablemente</th>
                        <th >Casi siempre</th>
                        <th >Siempre</th>
                      </tr>
                    </thead>    
<?php  while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) { 

                    echo"    
                    <tbody>
                      <tr>
                        <td >".$fila['titulo']."</td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>          
                      </tr>

                    </tbody>";
                }?>
    </table>
  </body>
</html>
