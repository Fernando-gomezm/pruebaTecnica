<?php

  $con = new mysqli('localhost','root','','batch_record');

?>
<!DOCTYPE html>
<html lang="es">

<head>

  <title>Microbiologia | Samara Cosmetics</title>
  
</head>

<!--<body class = "css\bootstrap.css.map">
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
<scrip type="text/javascript" src="js/boostrap.min.js"></scrip>
<scrip type="text/javascript" src="jquery-3.6.0.min.js"></script>-->

  <div id="main-wrapper">
    <div class="container-fluid">
      <div class="row page-titles">
        <h1 hidden>3</h1>
        <h1 class="text-themecolor m-b-0 m-t-0"><b>MICROBIOLOGÍA</b></h1>
        <a href="../../microbiologia" style="background-color:#fff;color:#FF8D6D" class="btn waves-effect waves-light btn-danger pull-right btn-md" role="button">Cola de Trabajo</a>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link text-uppercase" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="width: 100%">
                  INFORMACION DEL PRODUCTO
                </button>
              </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <div class="contenedorInfo2">
                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">Fecha de Programación</label>
                    <input type="date" class="form-control" id="in_fecha" width="50px" readonly><p>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">No Orden de Producción</label>
                    <input type="text" class="form-control" id="in_numero_orden" readonly><p>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">Referencia</label>
                    <input type="text" class="form-control" id="in_referencia" readonly>
                  </div>

                  <div class="contenedorInfo__group">
                    <table id="txtobservacionesTanques" class="itemInfo table table-striped table-bordered" style="width:80%; height: 30px;">
                     <table border="2">
                      <thead>
                        <tr>                        
                          <th class="centrado">Tanque</th>  
                          <th class="centrado">Cantidad</th>
                          <th class="centrado">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id="fila1">
                          <td class="centrado" id="tanque1">tanque1</td>
                          <td class="centrado" id="cantidad1">cantidad1</td>
                          <td class="centrado" id="total1">total1</td>
                        </tr>
                        <tr id="fila2">
                          <td class="centrado" id="tanque2">tanque2</td>
                          <td class="centrado" id="cantidad2">cantidad2</td>
                          <td class="centrado" id="total2">total2</td>
                        </tr>
                      </tbody>
                     </table>
                    </table><p>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="in_tamano_lote" class="col-form-label">Tamaño Lote (kg)</label>
                    <input type="text" class="form-control" id="in_tamano_lote" readonly><p>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">No. Lote</label>
                    <input type="text" class="form-control" id="in_numero_lote" readonly><p>
                  </div>

                  <div class="contenedorInfo__group">
                    <label for="recipient-name" class="col-form-label">Linea</label>
                    <input type="text" class="form-control" id="in_linea" readonly><p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="width: 100%">
                  LIBERACIÓN MICROBIOLOGÍA
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <div class="parametrosControl">
                  <h3 for="recipient-name" class="col-form-label" style="text-align: center;"></h3>
                </div>

                <div class="obj3 mb-3 ml-3 mr-3">
                  <label for="recipient-name" class="col-form-label envasadora">|--Identificación Incubadora--|</label>
                  <label for="recipient-name" class="col-form-label loteadora">|--Identificación Autoclave--|</label>
                  <label for="recipient-name" class="col-form-label loteadora">|--Identificación Cabina de Flujo Laminar--|</label><p>
            
                  <select class="selectpicker form-control sel_equipos" id="sel_id">
                  
                  <option value="value1"selected>SELECCION ID</option>
                  <?php
                            $sql="SELECT * FROM equipos";
                            $result=mysqli_query($con,$sql);
                            
                            while($mostrar=mysqli_fetch_array($result)) {
                            ?>
                            
                            <option><?php echo $mostrar['id_equipo']?></option>
                            </tr>
                              <?php
                            }
                              ?> 
                  </select>
                  <select class="selectpicker form-control sel_equipos" id="sel_equipo">
                  <option value="value1"selected>SELECCION AUTOCLAVE</option>
                  <?php
                            $sql="SELECT * FROM equipos";
                            $result=mysqli_query($con,$sql);
                            
                            while($mostrar=mysqli_fetch_array($result)) {
                            ?>
                            
                            <option><?php echo $mostrar['tipo_equipo']?></option>
                            </tr>
                              <?php
                            }
                              ?> 
                  </select>

                  <select class="selectpicker form-control sel_equipos" id="sel_incubadora" id="otro">
                  <option value="value1"selected>SELECCION TPO_EQUIPO</option>
                  <?php
                            $sql="SELECT * FROM equipos";
                            $result=mysqli_query($con,$sql);
                            
                            while($mostrar=mysqli_fetch_array($result)) {
                            ?>
                            
                            <option><?php echo $mostrar['tipo_equipo']?></option>
                            </tr>
                              <?php
                            }
                              ?> 
                  </select>


                  

                  
                 
                </div>
                
                <div class="parametrosControl">
                  <h3 for="recipient-name" class="col-form-label" style="text-align: center;">Análisis Microbiologico</h3>
                </div>

                

                <div class="col-md-12 align-self-center">
                  <div class="card">
                    <div class="card-block">
                      <div class="table-responsive">
                        <table class="table table-striped">
                          <thead>
                          <table border="1">  
                          <tr>
                              <th>Análisis</th>
                              <th>Especificación</th>
                              <th>Resultado</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th>Recuento de Mesófilos Aerobios Totales</th>
                              <?php
                            $sql="SELECT * FROM mesofilos";
                            $result=mysqli_query($con,$sql);
                            while($mostrar=mysqli_fetch_array($result)) {
                            ?>
                            <td align="justify"><?php echo $mostrar['especificacion']?></td>
                            <td align="justify"><?php echo $mostrar['resultado']?></td><t/r>
                            </tr>
                              <?php
                            }
                              ?> 

                            </tr>
                            <tr>
                              <th>Pseudomona Aeruginosa</th>
                              <?php
                            $sql="SELECT * FROM pseudomona";
                            $result=mysqli_query($con,$sql);
                            while($mostrar=mysqli_fetch_array($result)) {
                            ?>
                            <td align="justify"><?php echo $mostrar['especificacion']?></td>
                            <td align="justify"><?php echo $mostrar['resultado']?></td><t/r>
                            </tr>
                              <?php
                            }
                              ?> 
                            </tr>
                            <tr>
                              <th>Escherichia Coli y Coliformes Totales</th>
                              <?php
                            $sql="SELECT * FROM coliformes";
                            $result=mysqli_query($con,$sql);
                            while($mostrar=mysqli_fetch_array($result)) {
                            ?>
                            <td align="justify"><?php echo $mostrar['especificacion']?></td>
                            <td align="justify"><?php echo $mostrar['resultado']?></td><t/r>
                            </tr>
                              <?php
                            }
                              ?> 
                            </tr>
                            <tr>
                              <th>Staphylococcus Aureus</th>
                              <?php
                            $sql="SELECT * FROM staphylococcus";
                            $result=mysqli_query($con,$sql);
                            while($mostrar=mysqli_fetch_array($result)) {
                            ?>
                            <td align="justify"><?php echo $mostrar['especificacion']?></td>
                            <td align="justify"><?php echo $mostrar['resultado']?></td><t/r>
                            </tr>
                              <?php
                            }
                              ?> 
                            </tr>

                          </table>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 align-self-center">
                  <div class="card">
                    <div class="card-block">
                      <div class="obj2 mb-3 ml-3 mr-3">
                        <p><label for="recipient-name" class="col-form-label envasadora">Fecha de Siembra: </label>
                        <input type="date" class="form-control" id="fechaSiembra"></input><p>
                        <label for="recipient-name" class="col-form-label loteadora">Fecha de Resultados: </label>                        
                        <input type="date" class="form-control" id="fechaResultados"></input>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row" style="margin: 1%">
                  <div class="col-md-4 align-self-center">
                  <p><label for="microbiologia_realizado" class="col-form-label">Realizado Por:</label>
                    <input type="text" class="form-control " id="microbiologia_realizado" readonly>
                  </div>

                  <div class="col-md-2 align-self-center" style="margin-top: 2.8%">
                    <input type="text" id="idbtn" hidden>
                    <input type="button" class="btn btn-danger microbiologia_realizado" id="microbiologia_realizado" onclick="cargar(this, 'firma1')" style="width: 100%; height: 38px;" value="Firmar">
                  </div>

                  <div class="col-md-4 align-self-center">
                  <p><label for="microbiologia_verificado" class="col-form-label">Verificado Por</label>
                    <input type="text" class="form-control" id="microbiologia_verificado" readonly>
                  </div>
                  <div class="col-md-2 align-self-center" style="margin-top: 2.8%">
                    <input type="button" class="btn btn-danger microbiologia_verificado" id="microbiologia_verificado" onclick="cargar(this, 'firma2')" style="width: 100%; height: 38px;" value="Firmar">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



  </body>
</body>

</html>