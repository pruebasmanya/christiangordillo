        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista Empleados</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Todos los detalles de los empleados
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Rol</th>
                                            <th>Estado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($items as $item) {
                                                echo '<tr class="odd gradeX">';
                                                echo '<td>'.$item['nombre'].'</td>';
                                                echo '<td>'.$item['apellido'].'</td>';
                                                echo '<td>'.$item['area'].'</td>';
                                                echo '<td>'.$item['estado'].'</td>';
                                                echo '<td>';
                                                echo '<a href="'.base_url().'admin/home/update_emp/'.$item['id'].'" title="Editar"><i class="fa fa-pencil-square-o fa-fw"></i></a>';
                                                echo '<a href="'.base_url().'admin/home/delete_emp/'.$item['id'].'" title="Eliminar"><i class="fa fa-trash-o fa-fw"></i></a>';
                                                echo '</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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