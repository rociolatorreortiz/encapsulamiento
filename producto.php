<?php


class producto{

    // atributos de la clase
    private $nombre;
    private $codigo;
    private $valor;
    private $cantidad;


    // declaracion del metodo constructor
    function __construct($nombre, $codigo, $valor, $cantidad){
        $this->nombre = $nombre;
        $this->codigo = $codigo;
        $this->valor = $valor;
        $this->cantidad = $cantidad;

    }

    public function getNombre(){

        return $this->nombre;
    }

    public function getCantidad(){
        return $this->cantidad;
    }

    public function getValor(){
        return $this->valor;
    }


}