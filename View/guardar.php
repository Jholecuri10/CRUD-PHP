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
                <h2>Agregar Nuevo Producto</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="?r=guardar" method="post">
            <div class="col m12">
                <div class="row">
                    <div class="col m3">
                        Nombre:
                    </div>
                    <div class="col m3">
                        <input type="text" name="txtNombre" value="<?php echo $alm->Nombre?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col m3">
                        SKU:
                    </div>
                    <div class="col m3">
                        <input type="text" name="txtSKU" value="<?php echo $alm->SKU?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col m3">
                        Descripcion:
                    </div>
                    <div class="col m3">
                        <input type="text" name="txtDescripcion" value="<?php echo $alm->Descripcion?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col m3">
                        Valor:
                    </div>
                    <div class="col m3">
                            <input type="text" name="txtValor" value="<?php echo $alm->valor?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col m3">
                        Tienda:
                    </div>
                    <div class="col m3">
                        <select name="cboTienda" id="">
                            <?php foreach ($this->MODEL->cargarTiendas() as $t) :  ?>
                                <option value="<?php echo $t->ID?>"><?php echo $t->ID  == $alm->tienda ? 'selected' : '' ?><?php echo $t->Nombre?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col m3">
                        Imagen:
                    </div>
                    <div class="col m3">
                        <input type="text" name="txtImagen"  value="<?php echo $alm->Imagen?>">
                    </div>
                </div>


                <div class="row">
                    <div class="col m3">
                        <input type="submit" class="btn indigo z-depth-3 white-text" value="Guardar" name="Guardar">
                    </div>
                </div>

        </form>
    </div>
</div>
    
<script src="Resources/js/jquery-3.6.0.js"></script>
<script src="Resources/js/materialize.js"></script>
<script>
    $(document).ready(function (){
        $('select').formSelect();
        });
</script>
</body>
</html>

