<?php
include_once "Model/tienda.php";

class tiendacontroller{

    public $MODEL;

    public function __construct()
    {
        $this->MODEL = new tienda();
    }

    public function index(){
        include_once "View/home.php";
    }

    public function nuevo(){
        $alm = new tienda();
        if(isset($_REQUEST['SKU'])){
            $alm = $this->MODEL->cargarSKU($_REQUEST['SKU']);
        }
        include_once "View/guardar.php";
    }

    public function guardar(){
        $alm = new tienda;
        $alm->ID          = $_POST['txtID'];
        $alm->Nombre      = $_POST['txtNombre'];
        $alm->SKU         = $_POST['txtSKU'];
        $alm->Descripcion = $_POST['txtDescripcion'];
        $alm->Valor       = $_POST['txtValor'];
        $alm->Tienda      = $_POST['cboTienda'];
        $alm->Imagen      = $_POST['txtImagen'];

        $alm->SKU > 0 ? $this->MODEL->actualizarDatos($alm) :
        $this->MODEL->registrar($alm);

        header("Location:index.php");
    }

    public function eliminar(){
        $this->MODEL->delete($_REQUEST['SKU']);

        header("Location:index.php");
    }

}