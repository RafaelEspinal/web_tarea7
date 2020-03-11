<?php

$pacientes= new obj_pacientes();

if($_POST)
{
    foreach($pacientes as $col=>$val)
    {
        if(!isset($_POST[$col])){
            $_POST[$col]="No"; 
            
        }
        $pacientes->$col = $_POST[$col];
    }
    $this->db->insert("pacientes", $pacientes);
    

    
    
}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
</head>
<body>
    <div class="container-fluid">
    <a href="<?php echo base_url();?>api/dashboard" class="btn btn-primary">Dashboard</a>
    </div>
    <div class="container">   
         
        <div id="insertarbox" style="margin-top:50px;" class="col-md-8 offset-md-2 col-xs-12">                    
            <div class="card card-info" >
                <div class="card-header">
                    <div class="text-center">Registrar pacientes en API</div>
                </div>     
                <div style="padding-top:30px" class="card-body" >
    
                    <form id="loginform" class="form-horizontal" method="post" action="">
                        <div class="row">
                            <div style="margin-bottom: 25px" class="input-group col-md-6 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Cedula:</span>
                                </div>
                                <input id="cedula" type="text" class="form-control" name="cedula">                                        
                            </div>
                              
                            <div style="margin-bottom: 25px" class="input-group col-md-6 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nombre:</span>
                                </div>
                                <input id="nombre" type="text" class="form-control" name="nombre">                                        
                            </div>
                        </div>  
                        <div class="row">
                            <div style="margin-bottom: 25px" class="input-group col-md-6 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Apellido:</span>
                                </div>
                                <input id="apellido" type="text" class="form-control" name="apellido">                                        
                            </div>
                                    
                            <div style="margin-bottom: 25px" class="input-group col-md-6 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Fecha nacimiento:</span>
                                </div>
                                <input id="fechaNac" type="date" class="form-control" name="fecha_nacimiento">                                        
                            </div>
                        </div>

                        <div class="row">
                            <div style="margin-bottom: 25px" class="input-group col-md-6 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Provincia:</span>
                                </div>
                                <input id="provincia" type="text" class="form-control" name="provincia">                                        
                            </div>

                            <div style="margin-bottom: 25px" class="input-group col-md-6 mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Fecha contagio:</span>
                                </div>
                                <input id="fechaCon" type="date" class="form-control" name="fecha_contagio">                                        
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="custom-control col-md-6 offset-md-1 custom-checkbox">
                                        <input class="custom-control-input sintoma" id="moqueo" type="checkbox" name="moqueo" value="Si" > 
                                        <label class="custom-control-label" for="moqueo">Moqueo</label>
                                    </div>
                                    <div class="custom-control col-md-5 custom-checkbox">
                                        <input class="custom-control-input sintoma" id="fiebre" type="checkbox" name="fiebre" value="Si" > 
                                        <label class="custom-control-label" for="fiebre">Fiebre</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="custom-control col-md-6 offset-md-1 custom-checkbox">
                                        <input class="custom-control-input sintoma" id="dolor_cabeza" type="checkbox" name="dolor_cabeza" value="Si"> 
                                        <label class="custom-control-label" for="dolor_cabeza">Dolor de cabeza</label>
                                    </div>
                                    <div class="custom-control col-md-5 custom-checkbox">
                                        <input class="custom-control-input sintoma" id="falta_dinero" type="checkbox" name="falta_dinero" value="Si"> 
                                        <label class="custom-control-label" for="falta_dinero">Falta de dinero</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="custom-control offset-md-1 col-md-6 custom-checkbox">
                                        <input class="custom-control-input sintoma" id="depresion" type="checkbox" name="depresion" value="Si"> 
                                        <label class="custom-control-label" for="depresion">Depresion</label>
                                    </div>
                                    <div class="custom-control col-md-5 custom-checkbox">
                                        <input class="custom-control-input sintoma" id="muerte" type="checkbox" name="muerte" value="Si"> 
                                        <label class="custom-control-label" for="muerte">Muerte</label>
                                    </div>
                                </div>
                            </div>
                        </div>        

                        <div class="col-sm-12 text-center">
                            <input id="btnRegistrar"  type="submit" value="Registrar" class="btn btn-success"/>
                        </div>
                    </form>     
                </div>                     
            </div>  
        </div>
    </div>
</body>
<script>

</script>

</html>
