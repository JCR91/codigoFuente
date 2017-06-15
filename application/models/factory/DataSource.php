<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DataSource
 *
 * @author DESARROLLADOR04_USI
 */
class DataSource {
    //put your code here

	private $cadenaConexion;
	private $conexion;
	/**
	 * Metodo contructor para iniciar nuestra conexion con la base de datos.
	 **/
	public function __construct(){
		try{
                   // "Database"=>DB_NAME,"UID"=>DB_USER,"PWD"=>DB_PASS,"CharacterSet"=>"UTF-8"
			//$this->cadenaConexion = "mysql:host=localhost;dbname=social";
                        //
                    //    $this->cadenaConexion =  "dblib:host=".DB_HOST.";dbname=".DB_NAME;
                     //   $this->conexion = new PDO($this->cadenaConexion,DB_USER,DB_PASS);
                        $serverName=DB_HOST;
                        $conectionInfo =array("Database"=>DB_NAME,"UID"=>DB_USER,"PWD"=>DB_PASS,"CharacterSet"=>"UTF-8");
                        $this->conexionDB = sqlsrv_connect($serverName,$conectionInfo);
			
		}catch(PDOException $e){
			echo 'error>>>'.$e->getMessage();
		}
	}
	/**
	 * Metodo que nos permitira traer un registro de nuestra base de datos.
	 * Usamos PDO en PHP.
	 * @param $sql Sentencia SQL.
	 * @param $values Arreglo de bindValues de PDO para la consulta SQL.
	 * @return $tabla_datos Registros de nuestra base de datos de 0 a N.
	 * */
        
        
        public function getSelect($sql = "",$values = array()){
            $arrayReturn = array();
            if($sql != ""){
                if(count($values)>0){
                    $consulta = sqlsrv_query($this->conexionDB,$sql,$values);
                        $num = count(sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC));
                        if($num >= 1 ){
                            echo '>1';
                            $tabla_datos = $consulta;//sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
                            return $tabla_datos;
                        }else{
                            print_r($values);
                            echo '>2:'.  count($consulta);
                            $tabla_datos = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
                            return $tabla_datos;
                        }
                }else{
                    $consulta = sqlsrv_query($this->conexionDB,$sql);
                            if(count(sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC)) > 0 ){
                            $tabla_datos = $consulta;//sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
                            return $tabla_datos;
                        }else{
                            $tabla_datos = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
                            return $tabla_datos;
                        }
                }
            }
        }
        public function getListado($sql = "",$values = array()){
            $arrayReturn = array();
            if($sql != ""){
                if(count($values)>0){
                    $consulta = sqlsrv_query($this->conexionDB,$sql,$values);
                   // echo '1';
                    $tabla_datos = $consulta;//sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
                    return $tabla_datos;
                }else{
                    $consulta = sqlsrv_query($this->conexionDB,$sql);
                    return $consulta;
                }
                
            }else{
                return $arrayReturn;
            }
        }
        
        public function getRow($sql = "",$values = array()){
            $arrayReturn = array();
            if($sql != ""){
                if(count($values)>0){
                    $consulta = sqlsrv_query($this->conexionDB,$sql,$values);
                   // echo '1';
                    $tabla_datos = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
                    return $tabla_datos;
                }else{
                    $consulta = sqlsrv_query($this->conexionDB,$sql);
                    $tabla_datos = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
                    return $tabla_datos;
                }
            }else{
                return $arrayReturn;
            }
        }
        
        public function closeConn(){
            sqlsrv_close( $this->conexionDB );
        }

        public function insertRow($sql = "",$values = array()){
            if($sql != ""){
                $consulta = sqlsrv_query($this->conexionDB,$sql,$values);
                return true;
            }
            return false;
        }
        
        public function editRow($sql = "",$values = array()){
            if($sql != ""){
                $consulta = sqlsrv_query($this->conexionDB,$sql,$values);
                return true;
            }
            return false;
        }
        
        public function deleteRow($sql = "",$values = array()){
            if($sql != ""){
                $consulta = sqlsrv_query($this->conexionDB,$sql,$values);
                return true;
            }
            return false;
        }
}
?>