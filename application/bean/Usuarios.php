<?php

class Usuarios {
    
    var $id;
    var $docIdentidad;
    var $nombres;
    var $apellidos;
    var $usuario;
    var $clave;
    var $fechaCreacion;
    var $estado;
    var $rol;
    var $enlace;
    
    public function getRol() {
        return $this->rol;
    }

    public function getEnlace() {
        return $this->enlace;
    }

    public function setRol($rol) {
        $this->rol = $rol;
        return $this;
    }

    public function setEnlace($enlace) {
        $this->enlace = $enlace;
        return $this;
    }

    
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setDocIdentidad($docIdentidad) {
        $this->docIdentidad = $docIdentidad;
        return $this;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
        return $this;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
        return $this;
    }

    public function setClave($clave) {
        $this->clave = $clave;
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

    public function getDocIdentidad() {
        return $this->docIdentidad;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getClave() {
        return $this->clave;
    }

    public function getFechaCreacion() {
        return $this->fechaCreacion;
    }

    public function getEstado() {
        return $this->estado;
    }


}
