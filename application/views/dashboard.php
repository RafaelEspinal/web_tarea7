<?php
function signo_zodiaco($fecha){ 
  $zodiaco = ''; 
        
  list ( $ano, $mes, $dia ) = explode ( "-", $fecha ); 
  
  if     ( ( $mes == 1 && $dia > 19 )  || ( $mes == 2 && $dia < 19 ) )  { $zodiaco = "Acuario"; }
  elseif ( ( $mes == 2 && $dia > 18 )  || ( $mes == 3 && $dia < 21 ) )  { $zodiaco = "Piscis"; } 
  elseif ( ( $mes == 3 && $dia > 20 )  || ( $mes == 4 && $dia < 20 ) )  { $zodiaco = "Aries"; } 
  elseif ( ( $mes == 4 && $dia > 19 )  || ( $mes == 5 && $dia < 21 ) )  { $zodiaco = "Tauro"; } 
  elseif ( ( $mes == 5 && $dia > 20 )  || ( $mes == 6 && $dia < 21 ) )  { $zodiaco = "Géminis"; } 
  elseif ( ( $mes == 6 && $dia > 20 )  || ( $mes == 7 && $dia < 23 ) )  { $zodiaco = "Cáncer"; } 
  elseif ( ( $mes == 7 && $dia > 22 )  || ( $mes == 8 && $dia < 23 ) )  { $zodiaco = "Leo"; } 
  elseif ( ( $mes == 8 && $dia > 22 )  || ( $mes == 9 && $dia < 23 ) )  { $zodiaco = "Virgo"; } 
  elseif ( ( $mes == 9 && $dia > 22 )  || ( $mes == 10 && $dia < 23 ) ) { $zodiaco = "Libra"; } 
  elseif ( ( $mes == 10 && $dia > 22 ) || ( $mes == 11 && $dia < 22 ) ) { $zodiaco = "Escorpio"; } 
  elseif ( ( $mes == 11 && $dia > 21 ) || ( $mes == 12 && $dia < 22 ) ) { $zodiaco = "Sagitario"; } 
  elseif ( ( $mes == 12 && $dia > 21 ) || ( $mes == 1 && $dia < 20 ) )  { $zodiaco = "Capricornio"; } 
  return $zodiaco; 
}

?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
</head>
<body>
<div class="container-fluid" >
  <a href="<?php echo base_url("api/index"); ?>" class="btn btn-danger">Regresar</a>
</div>
<div class="container">
  <!--div de la tabla col-md-6-->
  <div class="row" style="margin-top:30px;">
    <div class="card col-md-8" >
        <div class="card-header">
          <h1 class="text-center">Tabla signos</h1>
        </div> 
        <div class="card-body">
          <table class="table table-responsive overflow-auto" style="height:300px">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Elemento</th>
                <th>Modalidad</th>
                <th>Duracion</th>
                <th>Simbolo</th>
                <th>Infectados</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Acuario</td>
                <td>Aire</td>
                <td>Fijo</td>
                <td>22 enero - 21 febrero</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994899.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Acuario"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Picsis</td>
                <td>Agua</td>
                <td>Mutable</td>
                <td>22 Fecbrero - 21 Marzo</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994934.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Piscis"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Aries</td>
                <td>Fuego</td>
                <td>Cardinal</td>
                <td>21 Marzo - 21 Abril</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994901.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Aries"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Tauro</td>
                <td>Tierra</td>
                <td>Fijo</td>
                <td>22 Abril - 21 Mayo</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994943.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Tauro"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Géminis</td>
                <td>Aire</td>
                <td>Mutable</td>
                <td>22 Mayo - 21 Junio</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994915.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Géminis"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Cáncer</td>
                <td>Agua</td>
                <td>Cardinal</td>
                <td>22 Junio - 21 Julio</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994910.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Cáncer"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Leo</td>
                <td>Fuego</td>
                <td>Fijo</td>
                <td>22 Julio - 21 Agosto</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994918.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Leo"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Virgo</td>
                <td>Tierra</td>
                <td>Mutable</td>
                <td>22 Agosto - 21 Septiembre</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994953.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Virgo"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Libra</td>
                <td>Aire</td>
                <td>Cardinal</td>
                <td>22 Septiembre - 21 Octubre</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994921.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Libra"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Escorpio</td>
                <td>Agua</td>
                <td>Fijo</td>
                <td>22 Octubre - 21 Noviembre</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994941.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Escorpio"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Sagitario</td>
                <td>Fuego</td>
                <td>Mutable</td>
                <td>22 Noviembre - 21 Diciembre</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994938.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Sagitario"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
              <tr>
                <td>Capricornio</td>
                <td>Tierra</td>
                <td>Cardinal</td>
                <td>22 Diciembre - 21 Enero</td>
                <td><img src="https://image.flaticon.com/icons/svg/1994/1994912.svg" style="height: 50px; width:50px;"></td>
                <?php
                  $query = $this->db->get('pacientes');
                  $x=0;
                  foreach ($query->result() as $row)
                  {
                    $y = signo_zodiaco($row->fecha_nacimiento);
                    if($y=="Capricornio"){
                      $x++;
                    }
                  }
                  echo "<td class='text-center'>$x</td>";
                ?>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
    <div class="card col-md-4" >
        <div class="card-header">
          <h1 class="text-center">CoronaVirus</h1>
        </div> 
        <div class="card-body">
          <img src="https://www.cdc.gov/coronavirus/2019-ncov/images/outbreak-coronavirus-world.png" class="mw-100 mh-100" alt="">
          <hr>
          <p>El coronavirus-2 del síndrome respiratorio agudo grave ​ es un coronavirus causante de la enfermedad por coronavirus.​​​ Inicialmente, el virus fue llamado 2019-nCoV. </p>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="card col-md-12" >
        <div class="card-header">
          <h1 class="text-center">Tabla Pacientes</h1>
        </div> 
        <div class="card-body">
          <table class="table overflow-auto">
            <thead>
              <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Provincia</th>
                <th>Fecha de contagio</th>
                <th>Moqueo</th>
                <th>Fiebre</th>
                <th>Dolor de cabeza</th>
                <th>Falta de dinero</th>
                <th>Depresion</th>
                <th>Muerte</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $this->db->order_by('id', 'DESC');
                $rs = $this->db->get('pacientes', 5)->result_array();

                foreach($rs as $fila){


                  echo "<tr>

                  <td>{$fila['cedula']}</td>
                  <td>{$fila['nombre']}</td>
                  <td>{$fila['apellido']}</td>
                  <td>{$fila['fecha_nacimiento']}</td>
                  <td>{$fila['provincia']}</td>
                  <td>{$fila['fecha_contagio']}</td>
                  <td>{$fila['moqueo']}</td>
                  <td>{$fila['fiebre']}</td>
                  <td>{$fila['dolor_cabeza']}</td>
                  <td>{$fila['falta_dinero']}</td>
                  <td>{$fila['depresion']}</td>
                  <td>{$fila['muerte']}</td>
                  

                 </tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
</div>
</body>

</html>