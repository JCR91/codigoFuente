<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pauta
 *
 * @author DESARROLLADOR04_USI
 */
class Pauta {
    var $id;
    var $farmaco_especie;
    var $pauta;
    var $periodo;
    var $tipoPauta;
    var $fechaCreacion;
    var $estado;

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setFarmaco_especie($farmaco_especie) {
        $this->farmaco_especie = $farmaco_especie;
        return $this;
    }

    public function setPauta($pauta) {
        $this->pauta = $pauta;
        return $this;
    }

    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
        return $this;
    }

    public function setTipoPauta($tipoPauta) {
        $this->tipoPauta = $tipoPauta;
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

        
    public function getId() {
        return $this->id;
    }

    public function getFarmaco_especie() {
        return $this->farmaco_especie;
    }

    public function getPauta() {
        return $this->pauta;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function getTipoPauta() {
        return $this->tipoPauta;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getEstado() {
        return $this->estado;
    }



}
