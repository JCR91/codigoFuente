<?php

require_once (ROOT ."/application/models/factory/DataSource.php");
require_once (ROOT ."/application/models/dto/Usuarios.php");
require_once (ROOT ."/application/models/dao/ICalendario.php");

class CalendarioDAO implements ICalendario{
    
    public function getUsuarios($usuario, $clave) {       
            $arrayReturn = array();
            
            $sql = "select a.id,a.nombres,a.apellidos,b.rol from usuarios a inner join usuarios_roles b on a.id=b.usuario where a.usuario = ? and a.clave= ? and a.estado = 1 ";
            $params = array($usuario, $clave);
            $data_source = new DataSource();
            $data_table = $data_source->getRow($sql,$params);
            $data_source->closeConn();            
            return $data_table;	
    }
    
    public function getMenu($rol) {
            $arrayReturn = array();
            
            $sql = "select id,nombre,enlace from permisos where rol = ? and estado = 1 ";
            $params = array($rol);
            $data_source = new DataSource();
            $data_table = $data_source->getListado($sql,$params);
            if($data_table){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($data_table, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "nombre" => $result["nombre"],
                           "enlace" => $result["enlace"]
                       );
                }
            }
            $data_source->closeConn(); 
            return $arrayReturn;
	}
        
        public function getEspecie() {
            $arrayReturn = array();
            $sql = "select id,nombre from especies where estado = 1 ";
           
            $data_source = new DataSource();
            $query = $data_source->getListado($sql);
            
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "nombre" => $result["nombre"]
                       );
                }
            }
             $data_source->closeConn(); 
            return $arrayReturn;
	}

        public function getTipoCalendario($tipo) {
            $arrayReturn = array();
            $sql = "select id,nombre from maestra where estado = 1 and campo = ?";
            $params = array($tipo);
            $data_source = new DataSource();
            $query = $data_source->getListado($sql,$params);
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "nombre" => $result["nombre"]
                       );
                }
            }
            $data_source->closeConn(); 
            return $arrayReturn;
	}
        
        public function getCalendario_Farmaco_Cal($id) {
            $arrayReturn = array();
            $sql = "select id,calendario,farmaco_especie from GVD_calendario_farmaco_especie where  calendario = ?";
            $params = array($id);
            $data_source = new DataSource();
            $query = $data_source->getListado($sql,$params);
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "calendario" => $result["calendario"],
                           "vacuna" => $result["farmaco_especie"]
                       );
                }
            }
             $data_source->closeConn(); 
            return $arrayReturn;
	}
        
        public function getCalendario_Farmaco($id) {
            $arrayReturn = array();
            $sql = "select id,calendario,farmaco_especie from GVD_calendario_farmaco_especie where  farmaco_especie = ?";
            $params = array($id);
            $data_source = new DataSource();
            $query = $data_source->getListado($sql,$params);
            
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "calendario" => $result["calendario"],
                           "vacuna" => $result["farmaco_especie"]
                       );
                }
            }
            $data_source->closeConn();
            return $arrayReturn;
	}
        
         public function getGrupoFarmaco($especie) {
            $arrayReturn = array();
            $sql = "select b.id,b.nombre from GVD_tipo_farmaco_especie a inner join GVD_tipo_farmaco b on a.tipo_farmaco=b.id where a.especie = ? ";
            $params = array($especie);
            $data_source = new DataSource();
            $query = $data_source->getListado($sql,$params);
            
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "nombre" => $result["nombre"]
                       );
                }
            }
            $data_source->closeConn();
            return $arrayReturn;
	}
        
        public function getFarmaco($especie,$GrpoFarmaco) {
            $arrayReturn = array();
            $sql = "select c.id,c.nombre from GVD_tipo_farmaco_especie a inner join especies b on a.especie=b.id inner join GVD_farmacos c on a.tipo_farmaco = c.tipo_farmaco where c.tipo_farmaco = ? and b.id = ? " ;
            
            $params = array($GrpoFarmaco,$especie);
            $data_source = new DataSource();
            $query = $data_source->getListado($sql,$params);
            
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "nombre" => $result["nombre"]
                       );
                }
            }
            $data_source->closeConn();
            return $arrayReturn;
	}
        
        public function getMaestra($combo) {
            $arrayReturn = array();
            $sql = "select id,nombre from maestra where campo = ? and estado = 1  ";
            $params = array($combo);
            $data_source = new DataSource();
            $query = $data_source->getListado($sql,$params);
            
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "nombre" => $result["nombre"]
                       );
                }
            }
            $data_source->closeConn();
            return $arrayReturn;
	}
     
        public function  registrarCalendario($txtCalendario, $cboEspecie, $txtFechaInicio,$txtFechaFin,$cboTipoCalendario){
            
            $sql = "insert into GVD_calendarios (nombre,especie,fechaInicio,fechaFin,tipoCalendario,fechaCreacion,estado,usuario_registra) values (?,?,?,?,?,getdate(),1,1)";
            $params = array($txtCalendario,$cboEspecie,$txtFechaInicio,$txtFechaFin,$cboTipoCalendario);
            $data_source = new DataSource();
            $query = $data_source->insertRow($sql,$params);
            $data_source->closeConn();
            return $query;
        }
        
        public function getCalendarioID($id){
          
            $arrayReturn = array();
            $strPag = " ";

            $sql =
             " select a.id,a.nombre,a.especie as especie,CONVERT(VARCHAR(10),fechaInicio,103) as fechaInicio,CONVERT(VARCHAR(10),fechaFin,103) as fechaFin,a.fechaCreacion,a.tipoCalendario ".
            " from GVD_calendarios a ".
            " inner join especies b on a.especie = b.id ".
            " where a.id = ? and a.estado = 1 order by a.id ";
            $params = array($id);            
            $data_source = new DataSource();
            $query = $data_source->getListado($sql,$params);
            
            
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "nombre" => $result["nombre"],
                            "especie" => $result["especie"],
                           "fechaInicio" => $result["fechaInicio"],
                            "fechaFin" => $result["fechaFin"],
                           "fechaCreacion" => $result["fechaCreacion"],
                        "tipoCalendario" => $result["tipoCalendario"]
                        
                       );
                }
            }
            $data_source->closeConn();  
            return $arrayReturn;
        }
        
        public function actualizaCalendario( $txtFechaInicio,$txtFechaFin,$cboTipoCalendario,$id){
            $sql = "update GVD_calendarios set fechaInicio =?,fechaFin=?, fechaActualizacion = getdate() , tipoCalendario = ? , usuario_actualiza = 1 where id = ?";
            $params = array($txtFechaInicio,$txtFechaFin,$cboTipoCalendario,$id);
            $data_source = new DataSource();
            $query = $data_source->editRow($sql,$params);
            $data_source->closeConn();
            
        }
        
        public function eliminarCalendario($id){
            $sql = "delete from GVD_calendarios where id = ?";
            $params = array($id);
            $data_source = new DataSource();
            $query = $data_source->deleteRow($sql,$params);
            $data_source->closeConn();
            
        }
        
         public function registrarAsociarVacuna  ($cboEspecie, $cboGrpoFarmaco, $cboFarmaco,$cboEdadMinima,$cboEdadMaxima,$cboAplicacion,$cboVolumen,$cboUndMedida,$efectos){
            
            $sql = "insert into GVD_farmaco_especie (especie,tipo_farmaco,farmaco,edad_minima,edad_maxima,via_aplicacion,volumen,und_medidad,efectos,fechaCreacion,estado,usuario_registra) values  (?,?,?,?,?,?,?,?,?,getdate(),1,1)";
            $params = array($cboEspecie, $cboGrpoFarmaco, $cboFarmaco,$cboEdadMinima,$cboEdadMaxima,$cboAplicacion,$cboVolumen,$cboUndMedida,$efectos);
            $data_source = new DataSource();
            $query = $data_source->insertRow($sql,$params);
            $data_source->closeConn();
            
        }
        
        public function editarAsociarVacuna ($cboEdadMinima,$cboEdadMaxima,$cboAplicacion,$cboVolumen,$cboUndMedida,$efectos,$id){
            
             $sql = "update GVD_farmaco_especie set edad_minima = ?, edad_maxima = ?,via_aplicacion =?,volumen=?, und_medidad=?, efectos = ?, fechaActualizacion = getdate(),usuario_actualiza = 1  where id = ?";
             
            $params = array($cboEdadMinima,$cboEdadMaxima,$cboAplicacion,$cboVolumen,$cboUndMedida,$efectos,$id);
            $data_source = new DataSource();
            $query = $data_source->insertRow($sql,$params);
            $data_source->closeConn();
            
        }
        
        public function eliminarVacuna($id){
            $sql = "delete from GVD_farmaco_especie where id = ?";
            $params = array($id);
             $data_source = new DataSource();
            $query = $data_source->deleteRow($sql,$params);
            $data_source->closeConn();
            
        }
        
         public function getVacunaID($id){
          
            $arrayReturn = array();          
            $sql =
                    " select a.id,a.especie,a.tipo_farmaco,a.farmaco,a.edad_minima ,a.edad_maxima  ,  ".
                    " a.via_aplicacion ,a.volumen ,a.und_medidad , a.efectos , a.fechaCreacion , c.nombre as des_tipo_farmaco , z.nombre as des_farmaco".
                    " from GVD_farmaco_especie a  ".
                     " inner join GVD_tipo_farmaco c on a.tipo_farmaco =c.id  ".
                    " inner join GVD_farmacos z on a.farmaco =z.id  ".
                    " where a.estado = 1 and a.id= ? ".
                    " order by a.id desc ";
           // echo '>>>$sql:'.$sql;
            $params = array($id);     
            $data_source = new DataSource();
            $query = $data_source->getListado($sql,$params);
            
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                            "id" => $result["id"],
                            "especie" => $result["especie"],
                            "tipo_farmaco" => $result["tipo_farmaco"],
                            "farmaco" => $result["farmaco"],
                            "edad_minima" => $result["edad_minima"],
                            "edad_maxima" => $result["edad_maxima"],
                            "via_aplicacion" => $result["via_aplicacion"],
                            "volumen" => $result["volumen"],
                            "und_medidad" => $result["und_medidad"],
                            "efectos" => $result["efectos"],
                            "fechaCreacion" => $result["fechaCreacion"],
                            "des_tipo_farmaco" => $result["des_tipo_farmaco"],
                            "des_farmaco" => $result["des_farmaco"]
                        
                       );
                }
            }
          //  sqlsrv_close($this->conexionDB);
          //  print_r($arrayReturn);
            return $arrayReturn;
        }
        
         public function  registrarPauta( $id,$txtPauta, $cboPeriodo, $cboTipoPauta){
            
            $sql = "insert into GVD_pautas (farmaco_especie,pauta,periodo,tipoPauta,fechaCreacion,estado) values (?,?,?,?,getdate(),1)";
            $params = array( $id,$txtPauta, $cboPeriodo, $cboTipoPauta);
            $data_source = new DataSource();
            $query = $data_source->insertRow($sql,$params);
            $data_source->closeConn();
        }
        
        public function eliminarPauta($id){
            $sql = "delete from GVD_pautas where id = ?";
            $params = array($id);
            $data_source = new DataSource();
            $query = $data_source->deleteRow($sql,$params);
            $data_source->closeConn();
            
        }
        
        public function getPauta_Farmaco_Especie($id){
          
            $arrayReturn = array();
            $strPag = " ";

            $sql =
             " select id,farmaco_especie from GVD_pautas where farmaco_especie = ?";
            $params = array($id);            
            $data_source = new DataSource();
            $query = $data_source->getListado($sql,$params);
            
            
            if($query){
                //$arrayReturn = $query;
                while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    // echo $result['nombre'].", ".$result['enlace']."<br />";
                    $arrayReturn[] = $db = array(
                           "id" => $result["id"],
                           "farmaco_especie" => $result["farmaco_especie"]                            
                        
                       );
                }
            }
            $data_source->closeConn();  
            return $arrayReturn;
        }
        
        public function agregarVacunaCalendario  ($calendario,$farmacoAsociado ){
            
            $sql = "insert into GVD_calendario_farmaco_especie (calendario,farmaco_especie,fechaCreacion) values  (?,?,getdate())";
            $params = array($calendario,$farmacoAsociado );
            $data_source = new DataSource();
            $query = $data_source->insertRow($sql,$params);
            $data_source->closeConn();
        }
        public function eliminarVacunaCalendario  ($calendario,$farmacoAsociado ){
            
            $sql = "delete from GVD_calendario_farmaco_especie where calendario =? and farmaco_especie = ?";
            $params = array($calendario,$farmacoAsociado );
            $data_source = new DataSource();
            $query = $data_source->deleteRow($sql,$params);
            $data_source->closeConn();
        } 
        
}
