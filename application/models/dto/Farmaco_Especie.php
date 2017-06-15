<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Farmaco_Especie
 *
 * @author DESARROLLADOR04_USI
 */
class Farmaco_Especie {
    var $id;
    var $especie;
    var $tipo_farmaco;
    var $farmaco;
    var $edad_minima;
    var $edad_maxima;
    var $nro_pauta;
    var $via_aplicacion;
    var $volumen;
    var $und_medidad;
    var $efectos;
    var $fechaCreacion;
    var $FechaActualizacion;
    var $usuario_registra;
    var $usuario_actualiza;
    var $estado;

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setEspecie($especie) {
        $this->especie = $especie;
        return $this;
    }

    public function setTipo_farmaco($tipo_farmaco) {
        $this->tipo_farmaco = $tipo_farmaco;
        return $this;
    }

    public function setFarmaco($farmaco) {
        $this->farmaco = $farmaco;
        return $this;
    }

    public function setEdad_minima($edad_minima) {
        $this->edad_minima = $edad_minima;
        return $this;
    }

    public function setEdad_maxima($edad_maxima) {
        $this->edad_maxima = $edad_maxima;
        return $this;
    }

    public function setNro_pauta($nro_pauta) {
        $this->nro_pauta = $nro_pauta;
        return $this;
    }

    public function setVia_aplicacion($via_aplicacion) {
        $this->via_aplicacion = $via_aplicacion;
        return $this;
    }

    public function setVolumen($volumen) {
        $this->volumen = $volumen;
        return $this;
    }

    public function setUnd_medidad($und_medidad) {
        $this->und_medidad = $und_medidad;
        return $this;
    }

    public function setEfectos($efectos) {
        $this->efectos = $efectos;
        return $this;
    }

    public function setFechaCreacion($fechaCreacion) {
        $this->fechaCreacion = $fechaCreacion;
        return $this;
    }

    public function setFechaActualizacion($FechaActualizacion) {
        $this->FechaActualizacion = $FechaActualizacion;
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

    public function getEspecie() {
        return $this->especie;
    }

    public function getTipo_farmaco() {
        return $this->tipo_farmaco;
    }

    public function getFarmaco() {
        return $this->farmaco;
    }

    public function getEdad_minima() {
        return $this->edad_minima;
    }

    public function getEdad_maxima() {
        return $this->edad_maxima;
    }

    public function getNro_pauta() {
        return $this->nro_pauta;
    }

    public function getVia_aplicacion() {
        return $this->via_aplicacion;
    }

    public function getVolumen() {
        return $this->volumen;
    }

    public function getUnd_medidad() {
        return $this->und_medidad;
    }

    public function getEfectos() {
        return $this->efectos;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getFechaActualizacion() {
        return $this->FechaActualizacion;
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
