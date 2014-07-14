
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar datos de empleado</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Empleado
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" id="form1" action="">
                                        <div class="form-group">
                                            <label>Nombre :</label>
                                            <input class="form-control" name="nombre" value="<?php echo $items['nombre'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido :</label>
                                            <input class="form-control" name="apellido" value="<?php echo $items['apellido'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Rol:</label>
                                            <?php 
                                                $rol1 ="";
                                                $rol2 ="";
                                                $rol3 ="";
                                                $rol4 ="";
                                                if ($items['area']=="Diseñador") {
                                                    $rol1 = "selected";
                                                }elseif ($items['area']=="Programador") {
                                                    $rol2 = "selected";
                                                }elseif ($items['area']=="Director de Arte") {
                                                    $rol3 = "selected";
                                                }elseif ($items['area']=="Secretario(a)") {
                                                    $rol4 = "selected";
                                                }
                                            ?>  
                                            <select class="form-control" name="rol">
                                                <option value="Diseñador" <?php echo $rol1; ?>>Diseñador</option>
                                                <option value="Programador"  <?php echo $rol2; ?>>Programador</option>
                                                <option value="Director de Arte" <?php echo $rol3 ?>>Director de Arte</option>
                                                <option value="Secretario(a)" <?php echo $rol4 ;?>>Secretario(a)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado:</label>
                                            <?php 
                                                $estado1 ="";
                                                $estado2 ="";
                                                $estado3 ="";
                                                $estado4 ="";
                                                if ($items['estado']=="Activo") {
                                                    $estado1 = "selected";
                                                }elseif ($items['estado']=="Suspendido") {
                                                    $estado2 = "selected";
                                                }elseif ($items['estado']=="Prueba") {
                                                    $estado3 = "selected";
                                                }elseif ($items['estado']=="Retirado") {
                                                    $estado4 = "selected";
                                                }
                                            ?>
                                            <select class="form-control" name="estado">
                                                <option value="Activo" <?php echo $estado1 ;?>>Activo</option>
                                                <option value="Suspendido" <?php echo $estado2;?>>Suspendido</option>
                                                <option value="Prueba" <?php echo $estado3 ;?>>Prueba</option>
                                                <option value="Retirado" <?php echo $estado4 ;?>>Retirado</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Actualizar datos</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->