<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

 <link href="<?php echo getUrl(); ?>/lib/bootstrap-3/css/bootstrap-datepicker.min.css" rel="stylesheet">
<script src="<?php echo getUrl(); ?>/lib/bootstrap-3/js/bootstrap-datepicker.min.js"></script>

  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
    <br><br>
    <form id="formPauta" action="main/formcalendario2" method="POST" > 
        <input type="hidden" id="idHiddenPauta" name="idHiddenPauta" value="<?php echo $idVacuna;?>"/>
                <div class="row">
                    <div class="col-md-6">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">Grupo Fármaco:<font size="2" color="red"> </font></div>
                                        <select required="" disabled="disabled" class="form-control" name="cboGrpoFarmaco" id="cboGrpoFarmaco">
                                            <option value="0">Seleccione</option>
                                        </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">Fármaco:<font size="2" color="red"> </font></div>
                                        <select required="" disabled="disabled" class="form-control" name="cboFarmaco" id="cboFarmaco">
                                            <option value="0">Seleccione</option>
                                        </select>
                                  </div>
                                </div>
                              </div>
                </div>
    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Especie:<font size="2" color="red"></font></div>                                   
                                        <select required="" disabled="disabled" class="form-control" name="cboEspecie" id="cboEspecie">
                                            <option value="0">Seleccione</option>
                                             <?php
                                                    foreach($_SESSION["EPECIE_SESSION"] as $via){?>
                                                    <option value="<?php echo $via["id"]?>"><?php echo $via["nombre"]?></option>
                                             <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                
    
    
                            <div class="col-md-6" id="divPauta">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">Pauta:<font size="2" color="red"> </font></div>
                                    <input type="text" class="form-control" required="" id="txtPauta" name="txtPauta" maxlength="3" placeholder="Ingrese numeros maximos de 03 digitos" >
                                          
                                  </div>
                                </div>
                            </div>
                </div>
    <div class="row">
                            <div class="col-md-6" id="divPeriodo">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Período:<font size="2" color="red"></font></div>                                   
                                        <select  class="form-control" name="cboPeriodo" id="cboPeriodo">
                                            <option value="0">Seleccione</option>
                                               <?php
                                                    foreach($getPeriodo as $via3){?>
                                                    <option value="<?php echo $via3["id"]?>"><?php echo $via3["nombre"]?></option>
                                             <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                
    
    
                            <div class="col-md-6" id="divTipoPauta">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">Tipo de Pauta:<font size="2" color="red"> </font></div>
                                       <select required=""  class="form-control" name="cboTipoPauta" id="cboTipoPauta">
                                            <option value="0">Seleccione</option>
                                            <?php
                                                    foreach($getTipoPauta as $via2){?>
                                                    <option value="<?php echo $via2["id"]?>"><?php echo $via2["nombre"]?></option>
                                             <?php }?>
                                        </select>
                                  </div>
                                </div>
                            </div>
                </div>
  
    <div class="row" id="crearCal">
            <div class="col-md-6">
              <input type="button" class="btn btn-danger" id="save" name="save" value="Agregar"/>
            </div>
            
          </div>
         </form>   
    <br><br><br>
<section>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vacunas Asociadas</h3>
                    </div>
                    <div class="panel-body">
                        <div id="table-responsive" class="table-responsive">

                            <table id="tblPauta" class="table table-striped">
                                <tbody><tr>
                        <th>N° Dosis </th>
                        <th>Pauta</th>
                        <th>Período</th>
                        <th>Tipo de Pauta</th>
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
</body>

<script type="text/javascript">
    $(document).ready(function() {
        
        $('#txtPauta').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });

        $("#cboEspecie").val('<?php echo $especieVacuna;?>');
        $("#cboGrpoFarmaco").html('<option value=\"0\"><?php echo $tipoVacuna;?></option>');
        $("#cboFarmaco").html('<option value=\"0\"><?php echo $farmacoVacuna;?></option>');
        
        listaPauta(0,10,'<?php echo $idVacuna;?>');
       
        
     $("#save").click(function (){
               
       var txtPauta =  $("#txtPauta").val();
       var cboPeriodo =  $("#cboPeriodo").val();
       var cboTipoPauta =  $("#cboTipoPauta").val();
       var id =  '<?php echo $idVacuna;?>';
       var val = validar(1);
               if(val == 0){
      // alert('txtPauta:'+txtPauta+'-cboPeriodo:'+cboPeriodo+'-cboTipoPauta:'+cboTipoPauta+'-id'+id);
           $.ajax({
                type: "POST",
                url: '<?php echo getUrl().'/main/formPauta';?>',
                data:  {txtPauta:txtPauta,cboPeriodo:cboPeriodo,cboTipoPauta:cboTipoPauta,id:id},
                dataType: "json",
                success: function(data) {
                    
                    if(data == '1'){
                        alert('Registro guardado satisfactoriamente');
                        $("#txtPauta").val('');
                        $("#cboPeriodo").val('0');
                        $("#cboTipoPauta").val('0');
                        
                       listaPauta(0,10,id);
                      
                    }
                }
            });
            }else{
                alert('Ingresar datos indicados')
            }
            });
    });
    
    function listaPauta(inicio,fin,id){
               
        var tbl = "";
        var tblPag = "";
        var pag = (inicio/10)+1;
                $.ajax({
                                type: "POST",
                                url: '<?php echo getUrl().'/main/listapauta';?>',
                                data:  {inicio:inicio,fin:fin,id:id},
                                dataType: "json",
                                success: function(data) {
                                    //$('#gridAdminServicio').data('kendoGrid').dataSource.read();
                                 //   alert(data.total)
                                    
                                    $("#tblPauta").html('')
                                    $("#paginacion").html('')
                                    
                                       tbl +=" <tbody><tr>";
                                       tbl +=" <th>N° Dosis</th>";
                                       tbl +=" <th>Pauta</th>";
                                       tbl +=" <th>Período</th>";
                                       tbl +=" <th>Tipo de Pauta</th>";
                                       tbl +="<th>Opciones</th>";
                                       
                                    $.each( data.registros, function( key, value ) {
                                        tbl += "<tr>";
                                        tbl += "<td>"+value["num"]+"</td>";
                                        tbl += "<td>"+value["pauta"]+"</td>";
                                        tbl += "<td>"+value["periodo"]+"</td>";
                                        tbl += "<td>"+value["tipoPauta"]+"</td>";                                        
                                        tbl += "<td><a href='#' onclick=eliminarPauta('"+value["id"]+"') ><span class=\"glyphicon glyphicon-trash\" data-toggle=\"tooltip\" title=\"Eliminar Pauta\">&nbsp;</span></a></td>";
                                        
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
                                       $("#tblPauta").html(tbl);
                                       $("#paginacion").html(tblPag);
                                }
                            });
                            
            
            
        }
        
         function eliminarPauta(id){
            $.ajax({        
                                type: "POST",
                                url: '<?php echo getUrl().'/main/eliminarPauta';?>',
                                data:  {id:id},
                                dataType: "json",
                                success: function(data) {
                                    
                                    if(data == '1'){
                                        alert('Pauta eliminada satisfactoriamente');
                                        listaPauta(0,10,'<?php echo $idVacuna;?>');
                                    }
                                    }
                        
                                });
        }
        
        function validar(flag){
                       
                var txtPauta = $("#txtPauta").val();     
                var cboPeriodo = $("#cboPeriodo").val();
                var cboTipoPauta = $("#cboTipoPauta").val();
             
               // alert(txtCalendario.length+"-"+cboEspecie+"-"+cboTipoCalendario+"-"+txtFechaInicio.length+"-"+txtFechaFin.length)
                var retorno = 0;
 
                if(flag == '1'){
 
                    if( txtPauta.length == '0' ) { $("#divPauta").addClass('has-error') ; retorno += 1 }else{  $("#divPauta").removeClass('has-error');  retorno += 0 ;}
                    if( cboPeriodo == '0'  ) { $("#divPeriodo").addClass('has-error') ; retorno += 1 }else{  $("#divPeriodo").removeClass('has-error');  retorno += 0 ;}
                    if( cboTipoPauta == '0' ) {  $("#divTipoPauta").addClass('has-error') ; retorno += 1 }else{  $("#divTipoPauta").removeClass('has-error');  retorno += 0 ;}
                     
                 
                 }
                     
                    
                    return retorno;
            }
            
            
    
      </script>