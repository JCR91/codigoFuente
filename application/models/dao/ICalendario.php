<?php


interface ICalendario {
    
    public function getUsuarios($usuario,$clave);
    public function getMenu($rol);
    public function getEspecie();
    public function getTipoCalendario($tipo);
    public function getCalendario_Farmaco_Cal($id);
    public function getCalendario_Farmaco($id);
    public function getGrupoFarmaco($especie);
    public function getFarmaco($especie,$GrpoFarmaco);
    public function getMaestra($combo);
    public function registrarCalendario($txtCalendario, $cboEspecie, $txtFechaInicio,$txtFechaFin,$cboTipoCalendario);
    public function getCalendarioID($id);
    public function actualizaCalendario( $txtFechaInicio,$txtFechaFin,$cboTipoCalendario,$id);
    public function eliminarCalendario($id);
    public function registrarAsociarVacuna  ($cboEspecie, $cboGrpoFarmaco, $cboFarmaco,$cboEdadMinima,$cboEdadMaxima,$cboAplicacion,$cboVolumen,$cboUndMedida,$efectos);
    public function editarAsociarVacuna ($cboEdadMinima,$cboEdadMaxima,$cboAplicacion,$cboVolumen,$cboUndMedida,$efectos,$id);
    public function getVacunaID($id);
    public function eliminarVacuna($id);
    public function  registrarPauta( $id,$txtPauta, $cboPeriodo, $cboTipoPauta);    
    public function eliminarPauta($id);
    public function agregarVacunaCalendario  ($calendario,$farmacoAsociado );
    public function eliminarVacunaCalendario  ($calendario,$farmacoAsociado );
    
}
?>