<?php



?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

    <div class="container">    
        <div id="insertarbox" style="margin-top:50px;" class="col-md-8 offset-md-2 col-xs-12">                    
            <div class="card card-info" >
                <div class="card-header">
                    <div class="text-center">Registrar pacientes en API</div>
                </div>     
                <div style="padding-top:30px" class="card-body" >
    
                    <form id="loginform" class="form-horizontal" role="form">
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
                                <input id="fechaNac" type="date" class="form-control" name="fechaNac">                                        
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
                                <input id="fechaCon" type="date" class="form-control" name="fechaCon">                                        
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="custom-control col-md-6 offset-md-1 custom-checkbox">
                                        <input class="custom-control-input" id="sintoma1" type="checkbox" name="checkbox" value="Moqueo"> 
                                        <label class="custom-control-label" for="sintoma1">Moqueo</label>
                                    </div>
                                    <div class="custom-control col-md-5 custom-checkbox">
                                        <input class="custom-control-input" id="sintoma2" type="checkbox" name="checkbox" value="Fiebre"> 
                                        <label class="custom-control-label" for="sintoma2">Fiebre</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="custom-control col-md-6 offset-md-1 custom-checkbox">
                                        <input class="custom-control-input" id="sintoma3" type="checkbox" name="checkbox" value="Dolor de cabeza"> 
                                        <label class="custom-control-label" for="sintoma3">Dolor de cabeza</label>
                                    </div>
                                    <div class="custom-control col-md-5 custom-checkbox">
                                        <input class="custom-control-input" id="sintoma4" type="checkbox" name="checkbox" value="Falta de dinero"> 
                                        <label class="custom-control-label" for="sintoma4">Falta de dinero</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="custom-control offset-md-1 col-md-6 custom-checkbox">
                                        <input class="custom-control-input" id="sintoma5" type="checkbox" name="checkbox" value="Depresion"> 
                                        <label class="custom-control-label" for="sintoma5">Depresion</label>
                                    </div>
                                    <div class="custom-control col-md-5 custom-checkbox">
                                        <input class="custom-control-input" id="sintoma6" type="checkbox" name="checkbox" value="Muerte"> 
                                        <label class="custom-control-label" for="sintoma6">Muerte</label>
                                    </div>
                                </div>
                            </div>
                        </div>        

                        <div class="col-sm-12 text-center">
                            <a id="btnRegistrar" href="#" class="btn btn-success">Registrar</a>
                        </div>
 
                    </form>     
                </div>                     
            </div>  
        </div>
    </div>

    
</body>
</html>
