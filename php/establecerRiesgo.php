<?php

$sql="Select id,probabilidad,impacto from tblriesgos ";
$resultado=$bd->query($sql);





while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) { 
    $id=$fila['id'];
    $nivelRiesgo=$fila['impacto']*$fila['probabilidad'];
    $riesgo="nulo";
    if($nivelRiesgo>=20){
        $riesgo="Muy Alto";
        $update="UPDATE `tblriesgos` SET `riesgo`=:valor1 WHERE id= :condicion";
        $stmt = $bd->prepare($update); 
        $stmt->bindParam(':valor1', $riesgo);
        $stmt->bindParam(':condicion', $id);
        $stmt->execute();    
    }elseif($nivelRiesgo>=15){
        $riesgo="Alto";
        $update="UPDATE `tblriesgos` SET `riesgo`=:valor1 WHERE id= :condicion";
        $stmt = $bd->prepare($update); 
        $stmt->bindParam(':valor1', $riesgo);
        $stmt->bindParam(':condicion', $id);
        $stmt->execute();    
    }elseif($nivelRiesgo>=9){
        $riesgo="Medio";
        $update="UPDATE `tblriesgos` SET `riesgo`=:valor1 WHERE id= :condicion";
        $stmt = $bd->prepare($update); 
        $stmt->bindParam(':valor1', $riesgo);
        $stmt->bindParam(':condicion', $id);
        $stmt->execute();    
    }elseif($nivelRiesgo>=6){
        $riesgo="Bajo";
        $update="UPDATE `tblriesgos` SET `riesgo`=:valor1 WHERE id= :condicion";
        $stmt = $bd->prepare($update); 
        $stmt->bindParam(':valor1', $riesgo);
        $stmt->bindParam(':condicion', $id);
        $stmt->execute();    
    }else{
        $riesgo="Muy Bajo";
        $update="UPDATE `tblriesgos` SET `riesgo`=:valor1 WHERE id= :condicion";
        $stmt = $bd->prepare($update); 
        $stmt->bindParam(':valor1', $riesgo);
        $stmt->bindParam(':condicion', $id);
        $stmt->execute();    
    }
}
?>
