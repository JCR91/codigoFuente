<?php 


//include("dao/ICalendario.php");
//$dao = new ICalendario();
class Main {

	protected $modelo;
        protected $service;
        protected $upload;
        protected $dao;
	public function __construct () {
       
            $this->modelo = new Modelo();
            $this->dao = new CalendarioDAO();
            //$this->upload = new UploadHandler();
           // $this->service = new nusoap_client(WS_PATH, 'wsdl');
	}
        
	public function index() {

        require_once( ROOT . '/application/views/index.php' );
            
	}
        public function usuario() {
          //  echo '---';
           // $login_username =  $_POST["login_username"];
           // $login_password =  $_POST["login_password"];
            
              if(isset($_SESSION["PERSONA_SESSION"])){
                 require_once( ROOT . '/application/views/menu.php' );
              
             }else{
                    $login_username =  $_POST["login_username"];
                    $login_password =  $_POST["login_password"];

                   // $getUsuario = $this->modelo->getUsuario($login_username,$login_password);
                   $getUsuario  = $this->dao->getUsuarios($login_username, $login_password);
                  //  print_r($getUsuario);
                    
                    if(count($getUsuario)<1){
                        //Usuario no encontrado
                        // require_once( ROOT . '/application/views/index.php' );
                          Redireccionar(getUrl());  

                    } else {
                          $_SESSION["PERSONA_SESSION"] = $getUsuario;
                          //require_once( ROOT . '/application/views/menu.php' );                          
                               Redireccionar(getUrl()."/main/menu");         
                             //require_once( ROOT . '/application/views/menu.php' );
                            // print_r($_SESSION["PERSONA_SESSION"]); 
                    }
             }
        }
        
        public function menu() {
           // print_r($_SESSION["PERSONA_SESSION"][0]["rol"]);
           // $rol = $_SESSION["PERSONA_SESSION"]["apellido"];
           // echo '$rol:'.$rol;
          
            // echo '---';
            $rol = $_SESSION["PERSONA_SESSION"]["rol"];
             $listaMenu = $this->dao->getMenu($rol);
            // print_r($listaMenu);
             require_once( ROOT . '/application/views/menu.php' );
         }
         
         public function salir() {
             session_destroy();
             Redireccionar(getUrl());
         }
         
         public function calendario() {
             $listaEspecie = $this->dao->getEspecie(); 
           
             $listaTipoCalendario = $this->dao->getTipoCalendario('cboTipoCalendario'); 
             
             $_SESSION["ENLACE_SESSION"] = "calendario.php";
             $_SESSION["EPECIE_SESSION"] = $listaEspecie;
             $_SESSION["TIPOCALENDARIO_SESSION"] = $listaTipoCalendario;
             Redireccionar(getUrl()."/main/menu");
             //require_once( ROOT . '/application/views/menu.php' );
         }
         
         public function asociarvacuna() {
             $listaEspecie = $this->dao->getEspecie();
            // $listaGrupoFarmaco = $this->modelo->getGrupoFarmaco();
             $_SESSION["ENLACE_SESSION"] = "asociarvacuna.php";
             $_SESSION["EPECIE_SESSION"] = $listaEspecie;
            // $_SESSION["GRUPO_FARMACO_SESSION"] = $listaGrupoFarmaco;
             //print_r($_SESSION["GRUPO_FARMACO_SESSION"]);
             Redireccionar(getUrl()."/main/menu");
             //require_once( ROOT . '/application/views/menu.php' );
         }
         
         public function addvacuna(){
             $id =  $_GET['id'];
             //echo '>>$id: '.$id;
             $getCalendarioID  = $this->dao->getCalendarioID($id);
             
             $nameCalendario = $getCalendarioID[0]["nombre"];
             $especieCalendario = $getCalendarioID[0]["especie"];
              require_once( ROOT . '/application/views/agregarVacuna.php' );
         }
         
         public function addpauta(){
             $id =  $_GET['id'];
             //echo '>>$id: '.$id;
             $getVacunaID  = $this->dao->getVacunaID($id);
             
             // = $getCalendarioID[0]["nombre"];
             $idVacuna = $getVacunaID[0]["id"];
             $especieVacuna = $getVacunaID[0]["especie"];
             $tipoVacuna = $getVacunaID[0]["des_tipo_farmaco"];
             $farmacoVacuna = $getVacunaID[0]["des_farmaco"];
             $getPeriodo = $this->dao->getMaestra('cboPeriodo');
             $getTipoPauta = $this->dao->getMaestra('cboTipoPauta');
              require_once( ROOT . '/application/views/agregarPauta.php' );
         }

         public function formPauta(){
             
            
             $txtPauta =  $_POST["txtPauta"];
             $cboPeriodo =  $_POST["cboPeriodo"];            
             $cboTipoPauta =  $_POST["cboTipoPauta"];
             $id =  $_POST["id"];
              
             $this->dao->registrarPauta($id,$txtPauta, $cboPeriodo, $cboTipoPauta);
             
            // $getCalendario = $this->modelo->getCalendario();
            // print_r($getCalendario);
           //  echo json_encode($getCalendario);
             $setMensaje = '1';
             echo json_encode($setMensaje);
         }
        public function formcalendario(){
             
            
             $txtCalendario =  $_POST["txtCalendario"];
             $cboEspecie =  $_POST["cboEspecie"];
             $txtFechaInicio =  $_POST["txtFechaInicio"];
             $txtFechaFin =  $_POST["txtFechaFin"];
             $cboTipoCalendario =  $_POST["cboTipoCalendario"];
          
             $txtFechaInicio = substr($txtFechaInicio,6, 4).substr($txtFechaInicio,3, 2).substr($txtFechaInicio,0, 2);
             $txtFechaFin = substr($txtFechaFin,6, 4).substr($txtFechaFin,3, 2).substr($txtFechaFin,0, 2);
 
             $this->dao->registrarCalendario($txtCalendario, $cboEspecie, $txtFechaInicio,$txtFechaFin,$cboTipoCalendario);
             
            // $getCalendario = $this->modelo->getCalendario();
            // print_r($getCalendario);
           //  echo json_encode($getCalendario);
             $setMensaje = '1';
             echo json_encode($setMensaje);
         }
         public function formAsociarVacuna(){
             
            
             $cboEspecie =  $_POST["cboEspecie"];
             $cboGrpoFarmaco =  $_POST["cboGrpoFarmaco"];
             $cboFarmaco =  $_POST["cboFarmaco"];
             $cboEdadMinima =  $_POST["cboEdadMinima"];
             $cboEdadMaxima =  $_POST["cboEdadMaxima"];
             $cboAplicacion =  $_POST["cboAplicacion"];
             $cboVolumen =  $_POST["cboVolumen"];
             $cboUndMedida =  $_POST["cboUndMedida"];
             $efectos =  $_POST["efectos"];
          
             
             $this->dao->registrarAsociarVacuna($cboEspecie, $cboGrpoFarmaco, $cboFarmaco,$cboEdadMinima,$cboEdadMaxima,$cboAplicacion,$cboVolumen,$cboUndMedida,$efectos);
             
            // $getCalendario = $this->modelo->getCalendario();
            // print_r($getCalendario);
           //  echo json_encode($getCalendario);
             $setMensaje = '1';
             echo json_encode($setMensaje);
         }
         public function editvacuna(){
             
            
             //$cboEspecie =  $_POST["cboEspecie"];
             //$cboGrpoFarmaco =  $_POST["cboGrpoFarmaco"];
             //$cboFarmaco =  $_POST["cboFarmaco"];
             $cboEdadMinima =  $_POST["cboEdadMinima"];
             $cboEdadMaxima =  $_POST["cboEdadMaxima"];
             $cboAplicacion =  $_POST["cboAplicacion"];
             $cboVolumen =  $_POST["cboVolumen"];
             $cboUndMedida =  $_POST["cboUndMedida"];
             $efectos =  $_POST["efectos"];
             $id =  $_POST["idHidden"];
             
             $this->dao->editarAsociarVacuna( $cboEdadMinima,$cboEdadMaxima,$cboAplicacion,$cboVolumen,$cboUndMedida,$efectos,$id);
             
            // $getCalendario = $this->modelo->getCalendario();
            // print_r($getCalendario);
           //  echo json_encode($getCalendario);
             $setMensaje = '1';
             echo json_encode($setMensaje);
         }
         
         
         public function listacalendario(){
             $inicio =  $_POST["inicio"];
             $fin =  $_POST["fin"];
           //  echo '$inicio:'. $inicio.'-'.$fin;
             $getCalendario = $this->modelo->getCalendario($inicio,$fin);
             $getCalendarioTT = $this->modelo->getCalendario('0','0');
            // echo '$getCalendarioTT:'.count($getCalendarioTT);
             $ArryCalTT =  array('total' => count($getCalendarioTT));
             $ArryCalReg =  array('registros' => $getCalendario);
              $arregloCalendario = array_merge($ArryCalTT, $ArryCalReg);
             echo json_encode($arregloCalendario);
         }
         
         public function listaPauta(){
             $inicio =  $_POST["inicio"];
             $fin =  $_POST["fin"];
             $id =  $_POST["id"];
             
           //  echo '$inicio:'. $inicio.'-'.$fin;
             $getCalendario = $this->modelo->getPauta($inicio,$fin,$id);
             $getCalendarioTT = $this->modelo->getPauta('0','0',$id);
            // echo '$getCalendarioTT:'.count($getCalendarioTT);
             $ArryCalTT =  array('total' => count($getCalendarioTT));
             $ArryCalReg =  array('registros' => $getCalendario);
              $arregloCalendario = array_merge($ArryCalTT, $ArryCalReg);
             echo json_encode($arregloCalendario);
         }
         
         public function listaAsociarVacuna(){
             $inicio =  $_POST["inicio"];
             $fin =  $_POST["fin"];
             $id =  $_POST["id"];
             $especie = '0';
             if($id != '0'){
                $getCalendarioID  = $this->dao->getCalendarioID($id);
                $especie = $getCalendarioID[0]["especie"];
                
             }
             //echo '>>>>$especie: '.$especie;
           //  echo '$inicio:'. $inicio.'-'.$fin;
             $getCalendario = $this->modelo->getAsociarVacuna($inicio,$fin,$especie,$id);
             $getCalendarioTT = $this->modelo->getAsociarVacuna('0','0',$especie,$id);
            // echo '$getCalendarioTT:'.count($getCalendarioTT);
             $ArryCalTT =  array('total' => count($getCalendarioTT));
             $ArryCalReg =  array('registros' => $getCalendario);
              $arregloCalendario = array_merge($ArryCalTT, $ArryCalReg);
             echo json_encode($arregloCalendario);
         }
         
         public function busquedaCalendario(){
             $id =  $_POST["id"];
             $getCalendarioID  = $this->dao->getCalendarioID($id);
             echo json_encode($getCalendarioID);
         }
         
         public function busquedaVacuna(){
             $id =  $_POST["id"];
             $getVacunaID  = $this->dao->getVacunaID($id);
             
             echo json_encode($getVacunaID);
         }
         
         public function addVacunaCalendario(){
             $farmacoAsociado =  $_POST["farmacoAsociado"];
             $calendario      =  $_POST["calendario"];
             
             $this->dao->agregarVacunaCalendario($calendario,$farmacoAsociado);
             
             $setMensaje = '1';
             echo json_encode($setMensaje);
             
         }
         public function delVacunaCalendario(){
             $farmacoAsociado =  $_POST["farmacoAsociado"];
             $calendario      =  $_POST["calendario"];
             
             $this->dao->eliminarVacunaCalendario($calendario,$farmacoAsociado);
             
             $setMensaje = '1';
             echo json_encode($setMensaje);
             
         }
         


         public function busquedaGrupoFarmaco() {
             $especie =  $_POST["especie"];
             $getGrupoFarmacoEspecie  = $this->dao->getGrupoFarmaco($especie);
             //print_r($getGrupoFarmacoEspecie);
             echo json_encode($getGrupoFarmacoEspecie);
         }
         
         public function busquedaFarmaco() {
             $especie =  $_POST["especie"];
             $GrpoFarmaco =  $_POST["GrpoFarmaco"];
             $getFarmacoEspecie  = $this->dao->getFarmaco($especie,$GrpoFarmaco);
             //print_r($getGrupoFarmacoEspecie);
             echo json_encode($getFarmacoEspecie);
         }
         public function busquedaMaestra() {
            
             $getEdadMinima = $this->dao->getMaestra('cboEdadMinima');
             $getEdadMaxima = $this->dao->getMaestra('cboEdadMaxima');
             $getAplicacion = $this->dao->getMaestra('cboAplicacion');
             $getVolumen = $this->dao->getMaestra('cboVolumen');
             $getUndMedida = $this->dao->getMaestra('cboUndMedida');
             //print_r($getGrupoFarmacoEspecie);
             
             $ArryEdadMinima =  array('EdadMinima' => $getEdadMinima);
             $ArryEdadMaxima =  array('EdadMaxima' => $getEdadMaxima);             
             $ArryAplicacion =  array('Aplicacion' => $getAplicacion);
             $ArryVolumen =  array('Volumen' => $getVolumen);
             $ArryUndMedida =  array('UndMedida' => $getUndMedida);
             
              $arregloMaestro= array_merge($ArryEdadMinima, $ArryEdadMaxima,$ArryAplicacion,$ArryVolumen,$ArryUndMedida);
             echo json_encode($arregloMaestro);
         }
         
          public function editcalendario(){
             $id =  $_POST["idHidden"];
             //$txtCalendario =  $_POST["txtCalendario"];
             //$cboEspecie =  $_POST["cboEspecie"];
             $txtFechaInicio =  $_POST["txtFechaInicio"];
             $txtFechaFin =  $_POST["txtFechaFin"];
             $cboTipoCalendario =  $_POST["cboTipoCalendario"];
             
             $txtFechaInicio = substr($txtFechaInicio,6, 4).substr($txtFechaInicio,3, 2).substr($txtFechaInicio,0, 2);
             $txtFechaFin = substr($txtFechaFin,6, 4).substr($txtFechaFin,3, 2).substr($txtFechaFin,0, 2);
             
             $this->dao->actualizaCalendario( $txtFechaInicio,$txtFechaFin,$cboTipoCalendario,$id);
             
             $setMensaje = '1';
             echo json_encode($setMensaje);
          }
         
          public function eliminarCalendario(){
              $id =  $_POST["id"];
              
             
             
             $consultaCalendario_Farmaco = $this->dao->getCalendario_Farmaco_Cal($id);
              if(count($consultaCalendario_Farmaco) >= 1){
                  $setMensaje = '2';
                  echo json_encode($setMensaje);
              }else{
                  $this->dao->eliminarCalendario($id);
                  $setMensaje = '1';
                  echo json_encode($setMensaje);
              }
              
          }
          
          public function eliminarPauta(){
              $id =  $_POST["id"];
              
              $this->dao->eliminarPauta($id);
             
             $setMensaje = '1';
             echo json_encode($setMensaje);
             
              
          }
          
           public function eliminarVacuna(){
              $id =  $_POST["id"];
              
              $consultaCalendario_Farmaco = $this->dao->getPauta_Farmaco_Especie($id);
              if(count($consultaCalendario_Farmaco) >= 1){
                  $setMensaje = '2';
                  echo json_encode($setMensaje);
              }else{
                  $this->dao->eliminarVacuna($id);
                  $setMensaje = '1';
                  echo json_encode($setMensaje);
              }
              
             
             
              
          }
        
} /* #Main */
