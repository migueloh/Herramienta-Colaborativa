<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioProyecto
 *
 * @author pcwin
 */
class UsuarioProyecto {
    //put your code here
    private $table = "usuario_proyeto";
    private $conexion;
    
    private $idUsuario;
    private $idProyecto;
    
     function __construct($conexion) {
        $this->conexion = $conexion;
    }
    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdProyecto() {
        return $this->idProyecto;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdProyecto($idProyecto) {
        $this->idProyecto = $idProyecto;
    }


}
