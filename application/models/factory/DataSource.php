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
        
        public function getConsulta($sql = "",$values = array()){
            $arrayReturn = array();
            if($sql != ""){
                if(count($values)>0){
                    $consulta = sqlsrv_query($this->conexionDB,$sql,$values);
                    echo '1';
                    $tabla_datos = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
                    return $tabla_datos;
                }else{
                    $consulta = sqlsrv_query($this->conexionDB,$sql);
                    echo '2';
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

                public function ejecutarConsulta($sql = "",$values = array()){
		if($sql != ""){
			$consulta = sqlsrv_query($this->conexionDB,$sql,$values);
                       // $arrayReturn = array();
                        //sqlsrv_query( $this->conexionDB, $sql,$params);
                       // print_r($consulta);
                       /* if($consulta){
                            while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                                $arrayReturn[] = $db = array(
                                       "id" => $result["id"],
                                       "nombre" => $result["nombres"],
                                       "apellido" => $result["apellidos"],
                                       "rol" => $result["rol"]
                                   );
                            }
                        }*/
			//$consulta->execute($values);
                        //print_r($consulta);
                      //  $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
                      //echo '$consulta:'.$consulta;
                       // if($consulta){
                            $tabla_datos = sqlsrv_fetch_array($consulta, SQLSRV_FETCH_ASSOC);
                           // print_r($tabla_datos);
                            return $tabla_datos;
                            
                       /*}else{
                            return 1;
                        }*/
			
		}else{
			return 0;
		}
	}
	/**
	 * Metodo que nos permitira obtener un entero de las tablas afectadas, 0 indica que no
	 * paso nada.
	 * Usamos PDO en PHP.
	 * @param $sql Sentencia SQL.
	 * @param $values Arreglo de bindValues de PDO para la consulta SQL.
	 * @return $numero_tablas_afectadas Numero entero de las tablas afectadas de 0 a N.
	 * */
	public function ejecutarActualizacion($sql = "",$values = array()){
		if($sql != ""){
			$consulta = $this->conexion->sqlsrv_prepare($sql);
			$consulta->execute($values);
			$numero_tablas_afectadas = $consulta->rowCount();
			return $numero_tablas_afectadas;
		}else{
			return 0;
		}
	}
}
?>