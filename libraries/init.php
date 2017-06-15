<?php
error_reporting(E_ALL);
ini_set("display_errors", 1); 
/* Una página de error personalizada */

/* Añadir aquí los nuevos controladores que se vayan generando */
$controllersApplication[] = 'main';


/*ADMIN*/
//$controllersApplication[] = 'administrador';
//$controllersApplication[] = 'amain';
//$controllersApplication[] = 'aprosses';
//$controllersApplication = ['main'];

/*DENUNCIA*/
//$controllersApplication[] = 'dprocess';

loadClass();
routes($controllersApplication);

function getUrl(){
    $Path = getcwd();
    return str_replace("\\","/",str_replace(PATHPHP, "http://".$_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"], $Path)); 
}

function NoUser(){
    header("location: " . getUrl());
}

function ToUtf8($string){ 
    if($string!=''){
        return utf8_encode($string);
    }else{
        return '';
    }
}

function Redireccionar($URL){
    header("location: " . $URL);
}

function errorPage() {
  //  require_once( ROOT . DS . '/application/views/commons/header.php' );
    require_once( ROOT . DS . '/application/views/404.html');
  //  require_once( ROOT . DS . '/application/views/commons/footer.php' );
    die();
}

function routes($controllersApplication) {

    global $url;
    global $tipo_prueba;
    global $curso;

    $urlArray = array();
    $urlArray = explode("/",$url);

    if ( in_array($urlArray[0], $controllersApplication) ) {
 
	    $controller = $urlArray[0];
	    array_shift($urlArray);
	    
            if(@$urlArray[0]==NULL){
                $urlArray[0] = "index";
            }

            if(isset($urlArray[1])){ // obtiene el código del tipo de prueba
                $tipo_prueba = $urlArray[1];
            }

            if(isset($urlArray[2])){ // obtiene el código del curso
                $curso = $urlArray[2];
            }
            
            
	    $action = $urlArray[0];
	    
	    array_shift($urlArray);
	    $queryString = $urlArray;
	 	
	    $controllerName = $controller;
	    $controller 	= ucwords($controller);
	    $dispatch 		= new $controller($controllerName,$action);
	 /*
            print_r($queryString);
            exit;
           */ 
	    if ((int)method_exists($controller, $action)) {
	        call_user_func_array(array($dispatch,$action),$queryString);
	    } else {
	        errorPage();
	    }

	} else {
		errorPage();
	}
	
}



function loadClass() {
        require_once (ROOT . DS . 'application/models/modelo.php');
        //equire_once (ROOT . DS . 'application/models/save.php');
	require_once (ROOT . DS . 'application/controllers/main.php');
        //require_once (ROOT . DS . 'application/controllers/registro.php');
        
        //require_once (ROOT . DS . 'application/bean/Usuarios.php');
        require_once (ROOT . DS . 'application/models/sql/CalendarioDAO.php');
        

        /*** ADMIN ***/
   /*    require_once (ROOT . DS . 'administrador/bean/Denuncia.php');
        require_once (ROOT . DS . 'administrador/bean/Notificacion.php');
        require_once (ROOT . DS . 'administrador/controllers/main.php');
        require_once (ROOT . DS . 'administrador/models/modelo.php');*/
        //require_once (ROOT . DS . 'application/controllers/admin/amain.php');
        //require_once (ROOT . DS . 'application/controllers/admin/aprosses.php');
        //require_once (ROOT . DS . 'application/models/admin/amodelo.php');        
        //require_once (ROOT . DS . 'application/models/admin/atransactions.php');
        
        /*** DENUNCIA ***/
        //require_once (ROOT . DS . 'application/models/denuncia/dmodelo.php');
        //require_once (ROOT . DS . 'application/controllers/denuncia/dprocess.php');
        
        /*subir archivos*/
       // require_once (ROOT . DS . '/application/controllers/UploadHandler.php');
        
}
