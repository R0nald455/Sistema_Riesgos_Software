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


if ($costo > 100000) {
  $puntaje += 5;
} else if ($costo > 50000) {
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


// Checklist
$total_checklist = 0;
if(isset($_POST['multi_tecnologia'])){
    $total_checklist += 1;
}
if(isset($_POST['base_datos'])){
    $total_checklist += 1;
}
if(isset($_POST['multiplataforma'])){
    $total_checklist += 1;
}




