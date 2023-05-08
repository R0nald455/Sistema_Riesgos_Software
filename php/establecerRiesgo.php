<?php
 $sql="Select id,probabilidad,impacto from tblriesgos ";
 $resultado=$bd->query($sql);

while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) { 
    $id=$fila['id'];
    if ($puntaje >= 35){
        $suma = $fila['probabilidad'] +=1;
        if($suma>=6){$suma=5;}
        $update="UPDATE `tblriesgos` SET `probabilidad`= :valor1 WHERE id= :condicion" ;
        $stmt = $bd->prepare($update); 
        $stmt->bindParam(':valor1', $suma);
        $stmt->bindParam(':condicion', $id);
        $stmt->execute();  
    }elseif($puntaje <=20){
            $resta = $fila['probabilidad'] -=1;
            if($resta==0){$resta=1;}
            $update="UPDATE `tblriesgos` SET `probabilidad`= :valor1 WHERE id= :condicion" ;
            $stmt = $bd->prepare($update); 
            $stmt->bindParam(':valor1', $resta);
            $stmt->bindParam(':condicion', $id);
            $stmt->execute();  
    }
}






$sql="Select id,probabilidad,impacto from tblriesgos ";
$resultado=$bd->query($sql);  
while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) { 
    $id=$fila['id'];
    $nivelRiesgo=$fila['impacto']*$fila['probabilidad'];
        $update="UPDATE `tblriesgos` SET `riesgo`=:valor1 WHERE id= :condicion";
        $stmt = $bd->prepare($update); 
        $stmt->bindParam(':valor1', $nivelRiesgo);
        $stmt->bindParam(':condicion', $id);
        $stmt->execute();    
}
?>
