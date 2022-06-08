<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Resources/css/materialize.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col m12">
            <div class="card black white-text center-align z-depth-3">
                <h2>Lista Productos</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col m12">
            <table class="table-responsive">
                <tr>
                    <th>Nombre</th>
                    <th>SKU</th>
                    <th>Descripcion</th>
                    <th>Valor</th>
                    <th>Tienda</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($this->MODEL->Listar() as $t) : ?>
                <tr>
                    <th><?php echo $t->Nombre?></th>
                    <th><?php echo $t->SKU?></th>
                    <th><?php echo $t->Descripcion?></th>
                    <th><?php echo $t->valor?></th>
                    <th><?php echo $t->Tienda?></th>
                    <th><?php echo $t->Imagen?></th>
                    <th>    
                    <a href="?r=nuevo&SKU=<?php echo $t->SKU?>" class="btn btn-block indigo">Editar</a>
                    <br>
                    <a href="?r=eliminar&SKU=<?php echo $t->SKU?>" id="eliminar" class="btn btn-block red">Eliminar</a> 
                    </th>

                </tr>

                <?php endforeach;?>
            </table>
            <a href="?r=nuevo" class="btn btn-block black">Nuevo</a>
        </div>
    </div>
</div>

<script src="Resources/js/jquery-3.6.0.js"></script>
<script src="Resources/js/materialize.js"></script>
<script src="Resources/js/validacion.js"></script>
</body>
</html>

