<div class="col-xs-12">
    <div class="box">
      <div class="contenido-ficha">
                            <section>
                            <h1 class="text-center">Crear Pauta</h1>
                            <br><br>
                            
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">Vacuna:<font size="2" color="red"> </font></div>
                                        <input type="text" class="form-control" required="" id="cbDre" name="cbDre" value="">
                                  </div>
                                </div>
                              </div>
                                
                                <div class="col-md-6">
                                <div class="form-group">
                                  <label class="sr-only" for="txtCod_Mod"></label>
                                  <div class="input-group">
                                    <div class="input-group-addon">N° Veces:<font size="2" color="red"> </font></div>
                                        <select required="" class="form-control" name="cbDisciplina" id="cbDisciplina">
                                            <option value="">Todos</option>
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
                                        <div class="input-group-addon">Tipo Tiempo:<font size="2" color="red"></font></div>                                   
                                        <select required="" class="form-control" name="cbDisciplina" id="cbDisciplina">
                                            <option value="">Todos</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Pauta Inicial:<font size="2" color="red"></font></div>                                   
                                        <select required="" class="form-control" name="cbDisciplina" id="cbDisciplina">
                                            <option value="">Todos</option>
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
                                        <div class="input-group-addon">Tiempo Final:<font size="2" color="red"></font></div>                                   
                                        <select required="" class="form-control" name="cbDisciplina" id="cbDisciplina">
                                            <option value="">Todos</option>
                                        </select>
                                    </div>
                                </div>
                            </div> 
            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="txtCod_Mod"></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">Pauta Final:<font size="2" color="red"></font></div>                                   
                                        <select required="" class="form-control" name="cbDisciplina" id="cbDisciplina">
                                            <option value="">Todos</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
          </div>

         
		  
		   

          <div class="row">
          <div class="col-md-6">
            <input type="button" class="btn btn-danger" onclick="cerraFichasXgrupo()" id="btCerrar" name="btCerrar" value="Crear"/>
          </div>
          </section>
          <br><br><br>

          <section>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pautas Creadas</h3>
                    </div>
                    <div class="panel-body">
                        <div id="table-responsive" class="table-responsive">

                            <table id="tblDelegados" class="table table-striped">
                                <tbody><tr>
                        <th>Vacuna</th>
                        <th>N° Veces</th>
                        <th>Tipo tiempo</th>
                        <th>Tiempo inicial</th>
                        <th>Pauta Inicial</th>
                        <th>Tiempo Final</th>
                        <th>Pauta Final</th>
                        <th>Opciones</th>
                        </tr></tbody>
                    </tr>
                    </table>
                    </div>
                    </div>
                    </div>
                    </section>
                    <br><br><br><br><br><br>
          </div>
          </div>
    </div>