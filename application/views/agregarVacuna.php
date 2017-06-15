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
                <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">Calendario:<font size="2" color="red"> </font></div>
                                    <input type="text" disabled="disabled" class="form-control" required="" id="txtCalendario" name="txtCalendario" value="">
                                  </div>
                                </div>
                              </div>
                
                <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Especie:<font size="2" color="red"></font></div>                                   
                                        <select required="" disabled="disabled" class="form-control" name="cboEspecie" id="cboEspecie">
                                            <option value="">Seleccione</option>
                                             <?php
                                                    foreach($_SESSION["EPECIE_SESSION"] as $via){?>
                                                    <option value="<?php echo $via["id"]?>"><?php echo $via["nombre"]?></option>
                                             <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                </div>
    <br><br>
<section>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vacunas Asociadas</h3>
                    </div>
                    <div class="panel-body">
                        <div id="table-responsive" class="table-responsive">

                            <table id="tblFarmaco" class="table table-striped">
                                <tbody><tr>
                        
                        <th>Grupo Farmaco</th>
                        <th>Farmaco</th>
                        <th>Edad Minima</th>
                        <th>Edad Maxima</th>
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
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $("#txtCalendario").val('<?php echo $nameCalendario;?>');
        $("#cboEspecie").val('<?php echo $especieCalendario;?>');
        listaAsociarVacuna(0,10,<?php echo $id;?>);
        
        $("#modal_aceptar").click(function (){
                     listaCalendario(0,10); 
                 });
    });
function listaAsociarVacuna(inicio,fin,id){
             
        var tbl = "";
        var tblPag = "";
        var pag = (inicio/10)+1;
                $.ajax({
                                type: "POST",
                                url: '<?php echo getUrl().'/main/listaAsociarVacuna';?>',
                                data:  {inicio:inicio,fin:fin,id:id},
                                dataType: "json",
                                success: function(data) {
                                    //$('#gridAdminServicio').data('kendoGrid').dataSource.read();
                                 //   alert(data.total)
                                    
                                    $("#tblFarmaco").html('')
                                    $("#paginacion").html('')
                                    
                                        tbl +=" <tbody><tr>";
                                        tbl +="<th>Grupo Farmaco</th>";
                                        tbl +="<th>Farmaco</th>";
                                        tbl +="<th>Edad Minima</th>";
                                        tbl +="<th>Edad Maxima</th>";
                                        tbl +="<th>Vía Aplicación</th>";
                                        tbl +="<th>Volumen</th>";
                                        tbl +="<th>Und. Medida</th>";
                                        tbl +="<th>Efectos</th>";
                                        tbl +="<th>Cant. Pautas</th>";
                                       tbl +="<th>Opciones</th>";
                                                    
                                    $.each( data.registros, function( key, value ) {
                                        tbl += "<tr>";
                                        tbl += "<td>"+value["tipo_farmaco"]+"</td>";
                                        tbl += "<td>"+value["farmaco"]+"</td>";
                                        tbl += "<td>"+value["edad_minima"]+"</td>";
                                        tbl += "<td>"+value["edad_maxima"]+"</td>";
                                        tbl += "<td>"+value["via_aplicacion"]+"</td>";
                                        tbl += "<td>"+value["volumen"]+"</td>";
                                        tbl += "<td>"+value["und_medidad"]+"</td>";
                                        tbl += "<td>"+value["efectos"]+"</td>";
                                        tbl += "<td>"+value["cant_pautas"]+"</td><td>";
                                        
                                        if(value["flag_agregado"] == '0' ){
                                            tbl += "<a href='#' onclick=agregar('"+value["id"]+"','<?php echo $id;?>') data-toggle=\"tooltip\" title=\"Agregar\" ><span class=\"glyphicon glyphicon-ok-sign\" >&nbsp;</span></a>";
                                        }else{
                                            tbl += "<a href='#' onclick=quitar('"+value["id"]+"','<?php echo $id;?>') ><span class=\"glyphicon glyphicon-remove-sign\" data-toggle=\"tooltip\" title=\"Quitar\">&nbsp;</span></a>";
                                        }
                                        tbl += "</td></tr>";
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
        function agregar(farmacoAsociado,calendario){
            
                        $.ajax({
                                type: "POST",
                                url: '<?php echo getUrl().'/main/addVacunaCalendario';?>',
                                data:  {farmacoAsociado:farmacoAsociado,calendario:calendario},
                                dataType: "json",
                                success: function(data) {
                                    alert('Se agrego satisfactoriamente');
                                    listaAsociarVacuna(0,10,<?php echo $id;?>);
                                }
                    });
            
        }
        
        function quitar(farmacoAsociado,calendario){
            
                        $.ajax({
                                type: "POST",
                                url: '<?php echo getUrl().'/main/delVacunaCalendario';?>',
                                data:  {farmacoAsociado:farmacoAsociado,calendario:calendario},
                                dataType: "json",
                                success: function(data) {
                                    alert('Se elimino satisfactoriamente');
                                    listaAsociarVacuna(0,10,<?php echo $id;?>);
                                }
                    });
            
        }
        </script>