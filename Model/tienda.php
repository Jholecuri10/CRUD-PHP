<?php

class tienda{

    public $CNX;

    public $Nombre;
    public $SKU;
    public $Descripcion;
    public $Valor;
    Public $Tienda;
    public $Imagen;

    public function __construct()
    {
        try{
            $this->CNX = conexion::conectar();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function Listar()
    {
        try{
            $query = "SELECT p.Nombre, p.SKU, p.Descripcion, p.valor, p.Tienda, p.Imagen, t.Fecha_de_apertura FROM producto p 
            INNER JOIN tienda t ON t.ID = p.Tienda ";
            $stm = $this->CNX->prepare($query);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function cargarTiendas()
    {
        try{
            $query = "SELECT * FROM tienda";
            $stm = $this->CNX->prepare($query);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function registrar(tienda $data){
        try{
            $query = "INSERT INTO producto (Nombre, SKU, Descripcion, valor, Tienda, Imagen) VALUES (?,?,?,?,?,?)";
            $this->CNX->prepare($query)->execute((array($data->Nombre, $data->SKU, $data->Descripcion, $data->Valor, $data->Tienda, $data->Imagen)));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function delete($SKU){
        try{
            $query = "DELETE FROM producto WHERE SKU = ?";
            $stm = $this->CNX->prepare($query);
            $stm->execute(array($SKU));
            
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function cargarSKU($SKU){
        try{
            $query = "SELECT * FROM producto WHERE SKU = ?";
            $stm = $this->CNX->prepare($query);
            $stm->execute(array($SKU));
            return $stm->fetch(PDO::FETCH_OBJ);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function actualizarDatos($data){
        try{
            $query = "UPDATE producto SET Nombre=?, Descripcion=?, valor=?, Tienda=?, Imagen=? WHERE SKU = ?";
            $this->CNX->prepare($query)->execute((array($data->Nombre, $data->Descripcion, $data->Valor, $data->Tienda,$data->Imagen,$data->SKU)));
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}