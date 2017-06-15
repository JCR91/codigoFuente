<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tipo_Farmaco
 *
 * @author DESARROLLADOR04_USI
 */
class Tipo_Farmaco {
    
    var $id;
    var $nombre;
    var $fechaCreacion;
    var $estado;
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
        return $this;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }



}
