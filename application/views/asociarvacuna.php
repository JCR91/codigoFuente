<div class="col-xs-12">
    <div class="box">
      <div class="contenido-ficha">
                            <section>
                            <h1 class="text-center">Crear indicaciones de vacuna / desparasitador</h1>
                            <br><br>
                         <form id="frmAsociarVacuna" action="main/formcalendario2" method="POST" >  
                              <input type="hidden" id="idHidden" name="idHidden" value="0"/>
                            <div class="row">
                                <div class="col-md-6"  id="divEspecie">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">Especie:<font size="2" color="red"> </font></div>
                                        <select required="" class="form-control" name="cboEspecie" id="cboEspecie">
                                            <option value="0">Seleccione</option>
                                             <?php
                                                    foreach($_SESSION["EPECIE_SESSION"] as $via){?>
                                                    <option value="<?php echo $via["id"]?>"><?php echo $via["nombre"]?></option>
                                             <?php }?>
                                        </select>
                                  </div>
                                </div>
                              </div>
                            
                                <div class="col-md-6" id="divGrpoFarmaco">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">Grupo Fármaco:<font size="2" color="red"> </font></div>
                                        <select required="" class="form-control" name="cboGrpoFarmaco" id="cboGrpoFarmaco">
                                            <option value="0">Seleccione</option>
                                        </select>
                                  </div>
                                </div>
                              </div>
                           </div>     
                             <div class="row">
                                <div class="col-md-6" id="divFarmaco">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">Fármaco:<font size="2" color="red"> </font></div>
                                        <select required="" class="form-control" name="cboFarmaco" id="cboFarmaco">
                                            <option value="0">Seleccione</option>
                                        </select>
                                  </div>
                                </div>
                              </div>
                            

                             <div class="col-md-6" id="divEdadMinima">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Edad Mínima:<font size="2" color="red"></font></div>                                   
                                        <select required="" class="form-control" name="cboEdadMinima" id="cboEdadMinima">
                                            <option value="0">Selecciene</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
                                 </div>
                             <div class="row">
            <div class="col-md-6" id="divEdadMaxima">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Edad Máxima:<font size="2" color="red"></font></div>                                   
                                        <select required="" class="form-control" name="cboEdadMaxima" id="cboEdadMaxima">
                                            <option value="0">Selecciene</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
          

                            
            <div class="col-md-6" id="divAplicacion">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Via de Aplicación:<font size="2" color="red"></font></div>                                   
                                        <select required="" class="form-control" name="cboAplicacion" id="cboAplicacion">
                                            <option value="0">Selecciene</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
          </div>

         <div class="row" >
                             <div class="col-md-6" id="divVolumen">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Volumen:<font size="2" color="red"></font></div>                                   
                                        <select required="" class="form-control" name="cboVolumen" id="cboVolumen">
                                            <option value="0">Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
            <div class="col-md-6" id="divUndMedida">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Unidad de Medida:<font size="2" color="red"></font></div>                                   
                                        <select required="" class="form-control" name="cboUndMedida" id="cboUndMedida">
                                            <option value="0">Seleccione</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
          </div>
          <div class="row" id="divefectos">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Efectos Secundarios:<font size="2" color="red"></font></div>                                   
                                        <textarea class="form-control"maxlength="150" rows="5" name="efectos" id="efectos"></textarea>
                                    </div>
                                </div>
                            </div>
          </div>
		  
		   

          <div class="row" id="crearCal">
            <div class="col-md-6">
              <input type="button" class="btn btn-danger" id="save" name="save" value="Crear"/>
            </div>
              
          </div>
            <div class="row" id="editarCal" style="display: none" >                    
            <div class="col-md-6" >
              <input type="button" class="btn btn-danger" id="edit" name="edit" value="Editar"/>
              <input type="button" class="btn btn-danger" id="cancel" name="cancel" value="Cancelar"/>
            </div>
            </div>
          </section>
          <br><br><br>

          <section>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vacunas Asociadas</h3>
                    </div>
                    <div class="panel-body">
                        <div id="table-responsive" class="table-responsive">

                            <table id="tblFarmaco" class="table table-striped">
                                <tbody><tr>
                        <th>Especie</th>
                        <th>Grupo Fármaco</th>
                        <th>Fármaco</th>
                        <th>Edad Mínima</th>
                        <th>Edad Máxima</th>
                        <th>Vía Aplicación</th>
                        <th>Volumen</th>
                        <th>Und. Medida</th>
                        <th>Efectos</th>
                        <th>Cant. Pautas</th>
                        <th>Opciones</th>
                        </tr></tbody>
                    </tr>
                    </table>
                             <div id="totalReg"></div>
                             <div id="paginacion" >
                                                                
                                 </div>
                    </div>
                    </div>
                    </div>
                    </section>
                    <br><br><br><br><br><br>
                    <div id="myModal_total_formularios" >
                
        </div>
          
          </div>
          </div>
    </div>
    
     <script type="text/javascript">
	$(document).ready(function() {
            listaAsociarVacuna(0,10,0);
            $("#cboEspecie").change(function (){
                getEspecieV(0)
            });
            
            $("#cboGrpoFarmaco").change(function (){
               getGrupoFarmaco();
            });
            
            $("#save").click(function (){
               var val = validar(1);
               if(val == 0){
                confirmaCal()
                
            }else{
                alert('Ingresar datos indicados')
            }
            });
            
            $("#cboFarmaco").change(function (){
                otrosCombos()
            });
            
            $("#cancel").click(function (){
                        $("#cboEspecie").prop('disabled', false);
                        $("#cboGrpoFarmaco").prop('disabled', false);
                        $("#cboFarmaco").prop('disabled', false);
                        $("#cboEspecie").val('0');
                        $("#cboGrpoFarmaco").html("<option value=\"0\">Seleccione</option>");
                        $("#cboFarmaco").html("<option value=\"0\">Seleccione</option>");
                        
                        $("#cboEdadMinima").html("<option value=\"0\">Seleccione</option>");
                        $("#cboEdadMaxima").html("<option value=\"0\">Seleccione</option>");
                        $("#cboAplicacion").html("<option value=\"0\">Seleccione</option>");
                        $("#cboVolumen").html("<option value=\"0\">Seleccione</option>");
                        $("#cboUndMedida").html("<option value=\"0\">Seleccione</option>");
                        
                        $("#divEspecie").removeClass('has-error'); 
                        $("#divGrpoFarmaco").removeClass('has-error'); 
                        $("#divFarmaco").removeClass('has-error');
                        $("#divEdadMinima").removeClass('has-error');
                        $("#divEdadMaxima").removeClass('has-error');
                        $("#divAplicacion").removeClass('has-error');
                        $("#divVolumen").removeClass('has-error');
                        $("#divUndMedida").removeClass('has-error');
                        $("#divefectos").removeClass('has-error');

                        $("#efectos").html('');
                        $("#editarCal").hide();
                        $("#crearCal").show();
                        
                });
            
    $("#edit").click(function (){
               var val = validar(2);
               if(val == 0){
                   confirmaeditarCal();
                
            }else{
                alert('Ingresar datos indicados')
            }
            });
            
            

});

function eliminarVac(id){
            $.ajax({        
                                type: "POST",
                                url: '<?php echo getUrl().'/main/eliminarVacuna';?>',
                                data:  {id:id},
                                dataType: "json",
                                success: function(data) {
                                    
                                    if(data == '1'){
                                        alert('Registro eliminado satisfactoriamente');
                                        listaAsociarVacuna(0,10);
                                    }else{
                                        alert('No puede eliminar el registro, debido a que se encuentran asignadas pautas ');
                                    }
                                        
                                    }
                        
                                });
        }
function getEspecieV(idEspecie){
 //alert('idEspecie'+idEspecie);
var sel = ' ';

var especie =  $("#cboEspecie").val();
                var cbo = " ";
                $("#cboGrpoFarmaco").html('');
                $("#cboFarmaco").html('');
                $("#cboFarmaco").html('<option value=\"0\">Seleccione</option>');
                if(especie != 0){ 
                    $.ajax({        
                                    type: "POST",
                                    url: '<?php echo getUrl().'/main/busquedaGrupoFarmaco';?>',
                                    data:  {especie:especie},
                                    dataType: "json",
                                    success: function(data) {
                                        cbo += "<option value=\"0\">Seleccione</option>";
                                        $.each( data, function( key, value ) {
                                          //  alert('idd'+value["id"])
                                            if(idEspecie == value["id"]){
                                                sel = 'selected';
                                            }else{
                                                sel = ' ';
                                            }
                                           cbo += "<option value=\""+value["id"]+"\" "+sel+"  >"+value["nombre"]+"</option>";
                                        });   
                                         $("#cboGrpoFarmaco").html(cbo);
                                    }
                                    });
                }else{
                    cbo += "<option value=\"0\">Seleccione</option>";
                 $("#cboGrpoFarmaco").html(cbo);
                }
    
}
function getGrupoFarmaco(grupo,farmaco){
    var sel = ' ';
                       var especie =  $("#cboEspecie").val();
                       
                       var GrpoFarmaco =  $("#cboGrpoFarmaco").val();
                       if(GrpoFarmaco == null ){
                           GrpoFarmaco = grupo;
                       }
//alert(especie+'-'+GrpoFarmaco)
                       var cbo = " ";
                       $("#cboFarmaco").html('');
                       if(especie != 0){ 
                           $.ajax({        
                                           type: "POST",
                                           url: '<?php echo getUrl().'/main/busquedaFarmaco';?>',
                                           data:  {especie:especie,GrpoFarmaco:GrpoFarmaco},
                                           dataType: "json",
                                           success: function(data) {
                                               cbo += "<option value=\"0\">Seleccione</option>";
                                               $.each( data, function( key, value ) {
                                                   if(farmaco == value["id"]){
                                                        sel = 'selected';
                                                    }else{
                                                        sel = ' ';
                                                    }
                                                  cbo += "<option value=\""+value["id"]+"\" "+sel+">"+value["nombre"]+"</option>";
                                               });   
                                                $("#cboFarmaco").html(cbo);
                                           }
                                           });
                       }else{
                           cbo += "<option value=\"0\">Seleccione</option>";
                        $("#cboFarmaco").html(cbo);
                       }
    }
    function otrosCombos(min,max,via,vol,und){
    
    var sel1 = ' '; var sel2 = ' '; var sel3 = ' '; var sel4 = ' '; var sel5 = ' ';
                var especie =  $("#cboEspecie").val();
                var GrpoFarmaco =  $("#cboGrpoFarmaco").val();
               // alert()
                var cbo1 = "<option value=\"0\">Seleccione</option> ";
                var cbo2 = "<option value=\"0\">Seleccione</option> ";
                var cbo4 = "<option value=\"0\">Seleccione</option> ";
                var cbo5 = "<option value=\"0\">Seleccione</option> ";
                var cbo6 = "<option value=\"0\">Seleccione</option> ";
                
                $("#cboEdadMinima").html('');
                $("#cboEdadMaxima").html('');                
                
                $("#cboAplicacion").html('');
                $("#cboVolumen").html('');
                $("#cboUndMedida").html('');
               // cbo1 += "<option value=\"0\">Seleccione</option>";
                if(especie != 0){ 
                    $.ajax({        
                                    type: "POST",
                                    url: '<?php echo getUrl().'/main/busquedaMaestra';?>',
                                    //data:  {especie:especie,GrpoFarmaco:GrpoFarmaco},
                                    dataType: "json",
                                    success: function(data) {
                                        
                                        
                                        $.each( data.EdadMinima, function( key, value ) {
                                            if(min == value["id"]){
                                                        sel1 = 'selected';
                                                    }else{
                                                        sel1 = ' ';
                                                    }
                                           cbo1 += "<option value=\""+value["id"]+"\" "+sel1+">  "+value["nombre"]+"</option>";
                                        });   
                                         $("#cboEdadMinima").html(cbo1);
                                         
                                          $.each( data.EdadMaxima, function( key, value ) {
                                               if(max == value["id"]){
                                                        sel2 = 'selected';
                                                    }else{
                                                        sel2 = ' ';
                                                    }
                                           cbo2 += "<option value=\""+value["id"]+"\" "+sel2+">"+value["nombre"]+"</option>";
                                        });   
                                         $("#cboEdadMaxima").html(cbo2);
                                         
                                          
                                         
                                          $.each( data.Aplicacion, function( key, value ) {
                                              if(via == value["id"]){
                                                        sel3 = 'selected';
                                                    }else{
                                                        sel3 = ' ';
                                                    }
                                           cbo4 += "<option value=\""+value["id"]+"\" "+sel3+">"+value["nombre"]+"</option>";
                                        });   
                                         $("#cboAplicacion").html(cbo4);
                                         
                                          $.each( data.Volumen, function( key, value ) {
                                              if(vol == value["id"]){
                                                        sel4 = 'selected';
                                                    }else{
                                                        sel4 = ' ';
                                                    }
                                           cbo5 += "<option value=\""+value["id"]+"\" "+sel4+">"+value["nombre"]+"</option>";
                                        });   
                                         $("#cboVolumen").html(cbo5);
                                         
                                          $.each( data.UndMedida, function( key, value ) {
                                              if(und == value["id"]){
                                                        sel5 = 'selected';
                                                    }else{
                                                        sel5 = ' ';
                                                    }
                                           cbo6 += "<option value=\""+value["id"]+"\" "+sel5+">"+value["nombre"]+"</option>";
                                        });   
                                         $("#cboUndMedida").html(cbo6);
                                         
                                    }
                                    });
                }else{
                   
                 $("#cboEdadMinima").html(cbo1);
                 $("#cboEdadMaxima").html(cbo2);
              
                 $("#cboAplicacion").html(cbo4);
                 $("#cboVolumen").html(cbo5);
                 $("#cboUndMedida").html(cbo6);
                }
        
    }

function findVac(id){
            $("#divEspecie").removeClass('has-error'); 
            $("#divGrpoFarmaco").removeClass('has-error'); 
            $("#divFarmaco").removeClass('has-error');
            $("#divEdadMinima").removeClass('has-error');
            $("#divEdadMaxima").removeClass('has-error');
            $("#divAplicacion").removeClass('has-error');
            $("#divVolumen").removeClass('has-error');
            $("#divUndMedida").removeClass('has-error');
            $("#divefectos").removeClass('has-error');
                        $.ajax({        
                                type: "POST",
                                url: '<?php echo getUrl().'/main/busquedaVacuna';?>',
                                data:  {id:id},
                                dataType: "json",
                                success: function(data) {
                                    $.each( data, function( key, value ) {
                                        
                                        $("#cboEspecie").val(value["especie"]);                                     
                                        //$("#cboGrpoFarmaco").val(value["tipo_farmaco"]);
                                        getEspecieV(value["tipo_farmaco"]);
                                        getGrupoFarmaco(value["tipo_farmaco"],value["farmaco"]);
                                        //$("#cboFarmaco").val(value["farmaco"]);
                                        otrosCombos(value["edad_minima"],value["edad_maxima"],value["via_aplicacion"],value["volumen"],value["und_medidad"])
                                        //$("#cboEdadMinima").val(value["edad_minima"]);
                                        //$("#cboEdadMaxima").val(value["edad_maxima"]);
                                       // $("#cboAplicacion").val(value["via_aplicacion"]);
                                        //$("#cboVolumen").val(value["volumen"]);
                                        //$("#cboUndMedida").val(value["und_medidad"]);
                                         $("#cboEspecie").prop('disabled', true);
                                         $("#cboGrpoFarmaco").prop('disabled', true);
                                         $("#cboFarmaco").prop('disabled', true);
                                        $("#efectos").val(value["efectos"]);
                                        $("#editarCal").show();
                                        $("#crearCal").hide();
                                        $("#idHidden").val(value["id"]);
                                        
                                    });
                                    
                                 //   
                                }
                        
                                });
                             
            }

function listaAsociarVacuna(inicio,fin,id){
               
        var tbl = "";
        var tblPag = "";
        var pag = (inicio/10)+1;
                $.ajax({
                                type: "POST",
                                url: '<?php echo getUrl().'/main/listaAsociarVacuna';?>',
                                data:  {inicio:inicio,fin:fin,id:0},
                                dataType: "json",
                                success: function(data) {
                                    //$('#gridAdminServicio').data('kendoGrid').dataSource.read();
                                 //   alert(data.total)
                                    
                                    $("#tblFarmaco").html('')
                                    $("#paginacion").html('')
                                    
                                        tbl +=" <tbody><tr>";
                                        tbl +="<th>Especie</th>";
                                        tbl +="<th>Grupo Fármaco</th>";
                                        tbl +="<th>Fármaco</th>";
                                        tbl +="<th>Edad Mínima</th>";
                                        tbl +="<th>Edad Máxima</th>";
                                        tbl +="<th>Vía Aplicación</th>";
                                        tbl +="<th>Volumen</th>";
                                        tbl +="<th>Und. Medida</th>";
                                        tbl +="<th>Efectos</th>";
                                        tbl +="<th>Cant. Pautas</th>";
                                       tbl +="<th>Opciones</th>";
                                                    
                                    $.each( data.registros, function( key, value ) {
                                        tbl += "<tr>";
                                        tbl += "<td>"+value["especie"]+"</td>";
                                        tbl += "<td>"+value["tipo_farmaco"]+"</td>";
                                        tbl += "<td>"+value["farmaco"]+"</td>";
                                        tbl += "<td>"+value["edad_minima"]+"</td>";
                                        tbl += "<td>"+value["edad_maxima"]+"</td>";
                                        tbl += "<td>"+value["via_aplicacion"]+"</td>";
                                        tbl += "<td>"+value["volumen"]+"</td>";
                                        tbl += "<td>"+value["und_medidad"]+"</td>";
                                        tbl += "<td>"+value["efectos"]+"</td>";
                                        tbl += "<td>"+value["cant_pautas"]+"</td>";
                                        tbl += "<td><a href='#' onclick=findVac('"+value["id"]+"') data-toggle=\"tooltip\" title=\"Editar\" ><span class=\"glyphicon glyphicon-pencil\" >&nbsp;</span></a>";
                                        tbl += "<a href='#' onclick=eliminarVac('"+value["id"]+"') ><span style=\"color: black;\" class=\"glyphicon glyphicon-trash\" data-toggle=\"tooltip\" title=\"Eliminar\">&nbsp;</span></a>";
                                        tbl += "<a href='#' onclick=addPau('"+value["id"]+"')><span style=\"color: green;\" class=\"glyphicon glyphicon-circle-arrow-up\" data-toggle=\"tooltip\" title=\"Agregar pauta\"></span></a></td>";
                                        tbl += "</tr>";
                                      
                                      });
                                      tbl +=" </tr></tbody>  ";  
                                      
                                      
                                      
                                      tblPag += "<div align=\"center\">";
                                      
                                      tblPag += "<ul id=\"pagination-recurso\" class=\"pagination\">";
                                      if(pag != 1){
                                      tblPag += "<li class=\"\" ><a  onclick=\"paginat('0','"+data.total+"')\">« Primero</a></li>";
                                      tblPag += "<li class=\"\" ><a  onclick=\"paginat('"+(pag-1)+"','"+data.total+"')\">Anterior</a></li>";
                                        }
                                      tblPag += "<li class=\"active\"><a>"+pag+"</a></li>";
                                      
                                        var ultF = parseFloat(data.total/10)
                                        var ultI = parseInt(data.total/10)

                                        if((ultF - ultI) != 0){
                                           ultI= ultI + 1
                                        }
               
                                      if(data.total > 10 && (pag+1) <= ultI){
                                      tblPag += "<li class=\"\"><a  onclick=\"paginat('"+(pag+1)+"','"+data.total+"')\">Siguiente</a></li>";
                                      tblPag += "<li class=\"\" ><a  onclick=\"paginat('-1','"+data.total+"')\">Último »</a></li>";
                                     }
                                      tblPag += "</ul>";
                                      tblPag += "</div>";  
                                      
                                      $("#totalReg").html("<h5>Total de registros: "+data.total+" </h5>");
                                       $("#tblFarmaco").html(tbl);
                                       $("#paginacion").html(tblPag);
                                }
                            });
                            
            
            
        }
        
        function addPau(id){
            callMODAL_Bootstrap_formularios("my_modal_addPauta", "Agregar Pautas", '<iframe src="<?php echo getUrl(); ?>/main/addpauta/&id='+id+'" width="1100" height="700" scrolling="no" frameBorder="0" ></iframe>');
        }
        function callMODAL_Bootstrap_formularios(id_modal,titulo, contenido) {
            
                var modal = '';
                modal += '<div class="modal fade" id="'+id_modal+'\" data-backdrop="static"  data-keyboard="false"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">';
                modal += '<div class="modal-dialog\" style=\"width:1150px;height:780px;\" role=\"document\">';
                modal += '<div class="modal-content">';
                modal += '<div class="modal-header">';
                modal += '<button type=\"button\" class="close" data-dismiss=\"modal\" aria-label=\"Close\" ><span aria-hidden=\"true\" onclick="cerrarModal()">&times;</span></button>';
                modal += '<div class="modal-header">';
                modal += '<h4 class="modal-title" id=\"myModalLabel\">'+titulo+'</h4>';
                modal += '</div>';
                modal += '<div class="modal-body">';//style="max-height: 720px;overflow-y:auto;"
                modal += contenido;
                modal += '</div>';
                modal += '<div class=\"modal-footer\">';
                modal += '<button type=\"button\" class=\"btn btn-primary\" id=\"modal_aceptar\" name=\"modal_aceptar\" onclick="cerrarModal()" data-dismiss=\"modal\">Salir</button>';
                modal += '</div>';
                modal += '</div>';
                modal += '</div>';
                modal += '</div>';

             //alert(modal);

                $("#myModal_total_formularios").html(modal);
                $("#"+id_modal).modal();
            }
            function  cerrarModal (){
                 listaAsociarVacuna(0,10);
                $("#my_modal_addPauta").modal('hide');
            }
            
            function validar(flag){
                       
                var cboEspecie = $("#cboEspecie").val();     
                var cboGrpoFarmaco = $("#cboGrpoFarmaco").val();
                var cboFarmaco = $("#cboFarmaco").val();
                var cboEdadMinima = $("#cboEdadMinima").val();
                var cboEdadMaxima = $("#cboEdadMaxima").val();
                var cboAplicacion = $("#cboAplicacion").val();
                var cboVolumen = $("#cboVolumen").val();
                var cboUndMedida = $("#cboUndMedida").val();
                var efectos = $("#efectos").val();
               // alert(txtCalendario.length+"-"+cboEspecie+"-"+cboTipoCalendario+"-"+txtFechaInicio.length+"-"+txtFechaFin.length)
                var retorno = 0;
                
                        
                        
                if(flag == '1'){
                  
                   
                    
                    if( cboEspecie == '0' ) { $("#divEspecie").addClass('has-error') ; retorno += 1 }else{  $("#divEspecie").removeClass('has-error');  retorno += 0 ;}
                    if( cboGrpoFarmaco == '0'  ) { $("#divGrpoFarmaco").addClass('has-error') ; retorno += 1 }else{  $("#divGrpoFarmaco").removeClass('has-error');  retorno += 0 ;}
                    if( cboFarmaco == '0' ) {  $("#divFarmaco").addClass('has-error') ; retorno += 1 }else{  $("#divFarmaco").removeClass('has-error');  retorno += 0 ;}
                    if( cboEdadMinima == '0' ) { $("#divEdadMinima").addClass('has-error') ; retorno += 1 }else{  $("#divEdadMinima").removeClass('has-error');  retorno += 0 ;}
                    if( cboEdadMaxima == '0' ) { $("#divEdadMaxima").addClass('has-error') ; retorno += 1 }else{  $("#divEdadMaxima").removeClass('has-error');  retorno += 0 ;}
                    if( cboAplicacion == '0'  ) { $("#divAplicacion").addClass('has-error') ; retorno += 1 }else{  $("#divAplicacion").removeClass('has-error');  retorno += 0 ;}
                    if( cboVolumen == '0' ) {  $("#divVolumen").addClass('has-error') ; retorno += 1 }else{  $("#divVolumen").removeClass('has-error');  retorno += 0 ;}
                    if( cboUndMedida == '0' ) { $("#divUndMedida").addClass('has-error') ; retorno += 1 }else{  $("#divUndMedida").removeClass('has-error');  retorno += 0 ;}
                    if( efectos.length == 0 ) { $("#divefectos").addClass('has-error') ; retorno += 1 }else{  $("#divefectos").removeClass('has-error');  retorno += 0 ;}
                    
                 }else if(flag == '2'){
                   
                    if( cboEdadMinima == '0' ) { $("#divEdadMinima").addClass('has-error') ; retorno += 1 }else{  $("#divEdadMinima").removeClass('has-error');  retorno += 0 ;}
                    if( cboEdadMaxima == '0' ) { $("#divEdadMaxima").addClass('has-error') ; retorno += 1 }else{  $("#divEdadMaxima").removeClass('has-error');  retorno += 0 ;}
                    if( cboAplicacion == '0'  ) { $("#divAplicacion").addClass('has-error') ; retorno += 1 }else{  $("#divAplicacion").removeClass('has-error');  retorno += 0 ;}
                    if( cboVolumen == '0' ) {  $("#divVolumen").addClass('has-error') ; retorno += 1 }else{  $("#divVolumen").removeClass('has-error');  retorno += 0 ;}
                    if( cboUndMedida == '0' ) { $("#divUndMedida").addClass('has-error') ; retorno += 1 }else{  $("#divUndMedida").removeClass('has-error');  retorno += 0 ;}
                    if( efectos.length == 0 ) { $("#divefectos").addClass('has-error') ; retorno += 1 }else{  $("#divefectos").removeClass('has-error');  retorno += 0 ;}
                    
                 }
                     
                    
                    return retorno;
            }
            
            function confirmaCal(){

            callMODAL_Bootstrap_Confirma("my_modal_Confirma", "Confirmación", '<h5>¿Desea guardar los cambios realizados?</h5>');
           }
        
            function callMODAL_Bootstrap_Confirma(id_modal,titulo, contenido) {
            
                var modal = '';
                modal += '<div class="modal fade" id="'+id_modal+'\" data-backdrop="static"  data-keyboard="false"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">';
                modal += '<div class="modal-dialog\" style=\"width:350px;height:400px;\" role=\"document\">';
                modal += '<div class="modal-content">';
                modal += '<div class="modal-header">';
                modal += '<button type=\"button\" class="close" data-dismiss=\"modal\" aria-label=\"Close\" ><span aria-hidden=\"true\" onclick="cerrarModal()">&times;</span></button>';
                modal += '<div class="modal-header">';
                modal += '<h4 class="modal-title" id=\"myModalLabel\">'+titulo+'</h4>';
                modal += '</div>';
                modal += '<div class="modal-body">';//style="max-height: 720px;overflow-y:auto;"
                modal += contenido;
                modal += '</div>';
                modal += '<div class=\"modal-footer\">';
                modal += '<button type=\"button\" class=\"btn btn-primary\" id=\"modal_aceptar\" name=\"modal_aceptar\" onclick="guardarCal()" data-dismiss=\"modal\">Guardar</button>';
                modal += '<button type=\"button\" class=\"btn btn-primary\" id=\"modal_aceptar\" name=\"modal_aceptar\" onclick="cerrarModal()" data-dismiss=\"modal\">Cancelar</button>';
                modal += '</div>';
                modal += '</div>';
                modal += '</div>';
                modal += '</div>';

             //alert(modal);

                $("#myModal_total_formularios").html(modal);
                $("#"+id_modal).modal();
            }
            
            function confirmaeditarCal(){

            callMODAL_Bootstrap_Edita("my_modal_edita", "Confirmación", '<h5>¿Desea guardar los cambios realizados?</h5>');
           }
        
            function callMODAL_Bootstrap_Edita(id_modal,titulo, contenido) {
            
                var modal = '';
                modal += '<div class="modal fade" id="'+id_modal+'\" data-backdrop="static"  data-keyboard="false"  tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">';
                modal += '<div class="modal-dialog\" style=\"width:350px;height:400px;\" role=\"document\">';
                modal += '<div class="modal-content">';
                modal += '<div class="modal-header">';
                modal += '<button type=\"button\" class="close" data-dismiss=\"modal\" aria-label=\"Close\" ><span aria-hidden=\"true\" onclick="cerrarModal()">&times;</span></button>';
                modal += '<div class="modal-header">';
                modal += '<h4 class="modal-title" id=\"myModalLabel\">'+titulo+'</h4>';
                modal += '</div>';
                modal += '<div class="modal-body">';//style="max-height: 720px;overflow-y:auto;"
                modal += contenido;
                modal += '</div>';
                modal += '<div class=\"modal-footer\">';
                modal += '<button type=\"button\" class=\"btn btn-primary\" id=\"modal_aceptar\" name=\"modal_aceptar\" onclick="editarCal()" data-dismiss=\"modal\">Guardar</button>';
                modal += '<button type=\"button\" class=\"btn btn-primary\" id=\"modal_aceptar\" name=\"modal_aceptar\" onclick="cerrarModal()" data-dismiss=\"modal\">Cancelar</button>';
                modal += '</div>';
                modal += '</div>';
                modal += '</div>';
                modal += '</div>';

             //alert(modal);

                $("#myModal_total_formularios").html(modal);
                $("#"+id_modal).modal();
            }
            function editarCal(){
                $.ajax({
                type: "POST",
                url: '<?php echo getUrl().'/main/editvacuna';?>',
                data:  $("#frmAsociarVacuna").serialize(),
                dataType: "json",
                success: function(data) {
                    
                    if(data == '1'){
                        alert('Se actualizo satisfactoriamente');
                        $("#cboEspecie").val('0');
                        $("#cboGrpoFarmaco").html("<option value=\"0\">Seleccione</option>");
                        $("#cboFarmaco").html("<option value=\"0\">Seleccione</option>");
                        $("#cboEspecie").prop('disabled', false);
                        $("#cboGrpoFarmaco").prop('disabled', false);
                        $("#cboFarmaco").prop('disabled', false);
                        
                        $("#cboEdadMinima").html("<option value=\"0\">Seleccione</option>");
                        $("#cboEdadMaxima").html("<option value=\"0\">Seleccione</option>");
                        $("#cboAplicacion").html("<option value=\"0\">Seleccione</option>");
                        $("#cboVolumen").html("<option value=\"0\">Seleccione</option>");
                        $("#cboUndMedida").html("<option value=\"0\">Seleccione</option>");
                        $("#efectos").val('');
                        $("#editarCal").hide();
                        $("#crearCal").show();
                        listaAsociarVacuna(0,10);
                    }
                }
            });
            }
            function guardarCal(){
                
                $.ajax({
                type: "POST",
                url: '<?php echo getUrl().'/main/formAsociarVacuna';?>',
                data:  $("#frmAsociarVacuna").serialize(),
                dataType: "json",
                success: function(data) {
                    
                    if(data == '1'){
                        alert('Registro guardado satisfactoriamente');
                        $("#cboEspecie").val('0');
                        $("#cboGrpoFarmaco").html("<option value=\"0\">Seleccione</option>");
                        $("#cboFarmaco").html("<option value=\"0\">Seleccione</option>");
                        $("#cboEdadMinima").html("<option value=\"0\">Seleccione</option>");
                        $("#cboEdadMaxima").html("<option value=\"0\">Seleccione</option>");
                        $("#cboAplicacion").html("<option value=\"0\">Seleccione</option>");
                        $("#cboVolumen").html("<option value=\"0\">Seleccione</option>");
                        $("#cboUndMedida").html("<option value=\"0\">Seleccione</option>");
                        $("#efectos").val('');
                        listaAsociarVacuna(0,10,0);
                      
                    }
                }
            });
            
            }
            
            
        </script>