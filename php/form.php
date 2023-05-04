<?php include '../template/header.php' ?>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form class="p-5" method="POST" autocomplete="off" action="evaluarRiesgo.php" >
                <div class="mb-4">
                        <label for="nombre" class="form-label">Nombre del Proyecto:</label>
                        <input type="text"class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-4">
                        <label for="tiempo" class="form-label">Tiempo estimado (en meses):</label>
                        <input type="number"class="form-control" id="tiempo" name="tiempo" required>
                    </div>
                    <div class="mb-4">
                        <label for="equipo"class="form-label">Cantidad de personas en el equipo de trabajo:</label>
                        <input type="number" class="form-control" id="equipo" name="equipo" required>
                    </div>
                    <div class="mb-4">
                        <label for="tamano"class="form-label">Tamaño del proyecto:</label>
                        <select id="tamano" class="form-control"name="tamano">
                            <option value="pequeno">Pequeño</option>
                            <option value="mediano">Mediano</option>
                            <option value="grande">Grande</option>
                        </select>
                    </div>
                    <div class="mb-4"> 
                        <label for="casos_uso"class="form-label">Número de casos de uso:</label>
                        <input type="number"class="form-control" id="casos_uso" name="casos_uso">
                    </div>
                    <div class="mb-4">
                        <label for="costo"class="form-label">Costo</label>
                        <input type="number"class="form-control" id="costo" name="costo">      
                    </div>
                    <div class="mb-4">
                        <label for="presupuesto"class="form-label">Presupuesto disponible:</label>
                        <input type="number"class="form-control" id="presupuesto" name="presupuesto">      
                    </div>
                    <div class="mb-4">
                        <label for="disponibilidad_recursos"class="form-label">Disponibilidad de recursos:</label>
                        <select id="disponibilidad"class="form-control"name="disponibilidad">
                            <option value="alta">Alta</option>
                            <option value="media">Media</option>
                            <option value="baja">Baja</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="complejidad"class="form-label">Complejidad del proyecto:</label>
                        <select id="complejidad"class="form-control" name="complejidad">
                            <option value="baja">Baja</option>
                            <option value="media">Media</option>
                            <option value="alta">Alta</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="modalidad"class="form-label">Modalidad de trabajo:</label>
                        <select name="modalidad"class="form-control" id="modalidad" required>
                        <option value="">Seleccione una opción</option>
                        <option value="presencial">Presencial</option>
                        <option value="remoto">Remoto</option>
                        </select><br>
                    </div>
                    <div class="mb-4">
                        <label for="estabilidad_equipo"class="form-label">Estabilidad del equipo:</label>
                        <select id="estabilidad_equipo" class="form-control"name="estabilidad_equipo">
                            <option value="alta">Alta</option>
                            <option value="media">Media</option>
                            <option value="baja">Baja</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Factores adicionales a considerar:</label><br>
                        <input type="checkbox" id="multi_tecnologia" name="multi_tecnologia" value="1">
                        <label for="multi_tecnologia"class="form-label">Se utiliza más de una tecnología</label><br>
                        <input type="checkbox" id="base_datos" name="base_datos" value="1">
                        <label for="base_datos"class="form-label">Se utiliza  base de datos</label><br>
                        <input type="checkbox" id="multiplataforma" name="multiplataforma" value="1">
                        <label for="multiplataforma"class="form-label">Es un proyecto multiplataforma</label><br>
                    </div>
                    <div class="d-grid">
                            <input type="submit" class="btn btn-primary" value="Evaluar Riesgos">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include '../template/footer.php' ?>