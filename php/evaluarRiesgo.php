<?php
// Recibimos los datos del formulario
$tiempo = $_POST['tiempo'];
$equipo = $_POST['equipo'];
$tamano = $_POST['tamano'];
$costo = $_POST['costo'];
$modalidad = $_POST['modalidad'];
$casos_uso = $_POST['casos_uso'];
$presupuesto = $_POST['presupuesto'];
$complejidad = $_POST['complejidad'];
$estabilidad_equipo = $_POST['estabilidad_equipo'];


// Calculamos el puntaje total en base a los datos recibidos
$puntaje = 0;

if ($tiempo > 6) {
  $puntaje += 5;
} else if ($tiempo > 3) {
  $puntaje += 3;
} else {
  $puntaje += 1;
}


if ($costo > 1000000) {
  $puntaje += 5;
} else if ($costo > 500000) {
  $puntaje += 3;
} else {
  $puntaje += 1;
}

if ($equipo > 5) {
  $puntaje += 5;
} else if ($equipo > 2) {
  $puntaje += 3;
} else {
  $puntaje += 1;
}

switch ($tamano) {
  case 'pequeno':
    $puntaje += 1;
    break;
  case 'mediano':
    $puntaje += 3;
    break;
  case 'grande':
    $puntaje += 5;
    break;
}

if ($casos_uso > 50) {
  $puntaje += 5;
} else if ($casos_uso > 20) {
  $puntaje += 3;
} else {
  $puntaje += 1;
}

if ($presupuesto < $costo) {
  $puntaje += 5;
} else if ($presupuesto < ($costo * 1.5)) {
  $puntaje += 3;
} else {
  $puntaje += 1;
}

switch ($complejidad) {
  case 'baja':
    $puntaje += 1;
    break;
  case 'media':
    $puntaje += 3;
    break;
  case 'alta':
    $puntaje += 5;
    break;
}

switch ($estabilidad_equipo) {
  case 'alta':
    $puntaje += 1;
    break;
  case 'media':
    $puntaje += 3;
    break;
  case 'baja':
    $puntaje += 5;
    break;
}



$total_checklist = 0;
if(isset($_POST['multi_tecnologia'])){
  $puntaje += 1;
}
if(isset($_POST['base_datos'])){
  $puntaje += 1;
}
if(isset($_POST['multiplataforma'])){
  $puntaje += 1;
}




?>

<?php include '../template/header.php' ?>

<?php
    include_once "../model/conexion.php";
    $sql="Select * from tblriesgos";
    $resultado=$bd->query($sql);

?>





<div class="container mt-5">
    <div class="row justify-content-center">
        <div>
            
            <button class="btn btn-primary" onclick="window.location.href='php/form.php'">Evaluar riesgos</button>
        </div>
        <div class="col-md-7">
            
                <?php  
                if ($puntaje>40){
                    echo"<div class='card>
                    <div class='p-4 bg-warning'><div class='mb-3'> <h2 >Proyecto de alto riesgo</h2>
                    <p>A continuacion le mostramos una serie de recomendaciones para aplicar</p>
                          </div>               
                    </div>
                        </div><br>";
                }elseif($puntaje>20){
                  echo"<div class='card'>
                  <div class='p-4'><div class='mb-3'> <h2>Proyecto de riesgo medio</h2>
                  <p>A continuacion le mostramos una serie de recomendaciones para aplicar</p>
                        </div>               
                  </div>
                      </div><br>";
                }else{
                  echo"<div class='card'>
                  <div class='p-4'><div class='mb-3'> <h2>Proyecto de bajo riesgo</h2>
                  <p>A continuacion le mostramos una serie de recomendaciones para aplicar</p>
                        </div>               
                  </div>
                      </div><br>";
                }
                
                
                while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) { 
                    echo"<div class='card'>
                <div class='p-4'><div class='mb-3'> <h2>".$fila['titulo']."</h2>
                        <p>"
                        .$fila['descrip']."
                        </p>
                        <table class='table table-bordered'>
                        <tr><th>Funcion</th><th>Descripcion</th></tr>
                        <tr><td>Identificar</td><td>" . $fila["identificar"] . "</td></tr>
                        <tr><td>analizar</td><td>" . $fila["analizar"] . "</td></tr>
                        <tr><td>planear</td><td>" . $fila["planear"] . "</td></tr>
                        <tr><td>seguir</td><td>" . $fila["seguir"] . "</td></tr>
                        <tr><td>controlar</td><td>" . $fila["controlar"] . "</td></tr>
                        <tr><td>comunicar</td><td>" . $fila["comunicar"] . "</td></tr>
                        </table>
                      </div>               
                </div>
                    </div><br>";
                }?>

        </div>
    </div>
</div>

<?php include '../template/footer.php' ?>
