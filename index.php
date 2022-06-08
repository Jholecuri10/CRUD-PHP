<?php

include_once "Controller/tiendacontroller.php";
include_once "Config/conexion.php";

$Controller = new tiendacontroller();

if(!isset($_REQUEST['r'])){
    $Controller->index();
}else{
    $action = $_REQUEST['r'];
    call_user_func(array($Controller, $action));
}