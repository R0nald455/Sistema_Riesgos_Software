<?php include 'template/header.php' ?>

<?php
    include_once "model/conexion.php";
    $sql="Select titulo,descrip from tblriesgos";
    $resultado=$bd->query($sql);
?>





<div class="container mt-5">
    <div class="row justify-content-center">
        <div>
            
            <button class="btn btn-primary" onclick="window.location.href='php/form.php'">Evaluar riesgos</button>
        </div>
        <div class="col-md-7">
            
                <?php  while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) { 
                    echo"<div class='card'>
                <div class='p-4'><div class='mb-3'> <h2>".$fila['titulo']."</h2>
                        <p>"
                        .$fila['descrip']."
                        </p>
                      </div>               
                </div>
                    </div><br>";
                }?>

        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>