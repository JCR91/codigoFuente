<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calendarios
 *
 * @author DESARROLLADOR04_USI
 */
class Calendarios {
    var $id;
    var $nombre;
    var $especie;
    var $fechaInicio;
    var $fechaFin;
    var $fechaCreacion;
    var $fechaActualizacion;
    var $tipoCalendario;
    var $usuario_registra;
    var $usuario_actualiza;
    var $estado;
    
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setEspecie($especie) {
        $this->especie = $especie;
        return $this;
    }

    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;
        return $this;
    }

    public function setFechaFin($fechaFin) {
        $this->fechaFin = $fechaFin;
        return $this;
    }

    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
        return $this;
    }

    public function setFechaActualizacion($fechaActualizacion) {
        $this->fechaActualizacion = $fechaActualizacion;
        return $this;
    }

    public function setTipoCalendario($tipoCalendario) {
        $this->tipoCalendario = $tipoCalendario;
        return $this;
    }

    public function setUsuario_registra($usuario_registra) {
        $this->usuario_registra = $usuario_registra;
        return $this;
    }

    public function setUsuario_actualiza($usuario_actualiza) {
        $this->usuario_actualiza = $usuario_actualiza;
        return $this;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

        
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEspecie() {
        return $this->especie;
    }

    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    public function getFechaFin() {
        return $this->fechaFin;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getFechaActualizacion() {
        return $this->fechaActualizacion;
    }

    public function getTipoCalendario() {
        return $this->tipoCalendario;
    }

    public function getUsuario_registra() {
        return $this->usuario_registra;
    }

    public function getUsuario_actualiza() {
        return $this->usuario_actualiza;
    }

    public function getEstado() {
        return $this->estado;
    }




}
