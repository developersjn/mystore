<?php
require '../../Controller/RutaController.php';
require '../../Controller/ProductoController.php';

$objProductoController = new ProductoController();
$listaProductos=$objProductoController->FindAll();
?> 

<!-- Datatable -->
<link href="<?php echo RutaController::getRutaRecursos(); ?>vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Lista de Productos</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example3" class="display" style="min-width: 845px">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Categoria</th>                               
                                <th>Acciones</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($listaProductos); $i++) { ?>                            
                                <tr>
                                    <td><img class="rounded-circle" width="35" src="<?php echo RutaController::getRutaPrincipal().$listaProductos[$i]->getImagenPortada(); ?>" alt=""></td>
                                    <td><?php echo $listaProductos[$i]->getNombre(); ?></td>
                                    <td><?php echo $listaProductos[$i]->getDescripcion(); ?></td>
                                    <td><?php echo $listaProductos[$i]->getPrecio(); ?></td>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" onclick="AbrirUrl('View/Producto/Update.php', 'contenedor-main','<?php echo $listaProductos[$i]->getIdProducto(); ?>')" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="#" onclick="AbrirUrl('View/Producto/Delete.php', 'contenedor-main','<?php echo $listaProductos[$i]->getIdProducto(); ?>')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Datatable -->
<script src="<?php echo RutaController::getRutaRecursos(); ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo RutaController::getRutaRecursos(); ?>js/plugins-init/datatables.init.js"></script>
