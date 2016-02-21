<!DOCTYPE html>
<html lang="es">
    <head>        
        <title>COPARMEX | REGISTRO</title>          
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            <?php if (@$_GET['error'] == "usuarioexistente") : ?>
                 <button type="button" id="btnError" class="btn btn-info mb-control" data-box="#messag-box-sound-1" preload="auto"></button>
                    <!-- danger with sound -->
                    <div class="message-box message-box-info animated fadeIn" data-sound="alert" id="messag-box-sound-1">
                        <div class="mb-container">
                            <div class="mb-middle">
                                <div class="mb-title"><span class="fa fa-times"></span> Error</div>
                                <div class="mb-content">
                                    <p>El usuario que ingresaste ya existe. </p>
                                    <p>Por favor intenta con otro. </p>                    
                                </div>
                                <div class="mb-footer">
                                    <button class="btn btn-default btn-lg pull-right mb-control-close">Aceptar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end danger with sound -->
            <?php endif; ?>
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <?php include("./nav/menu.php"); ?>    <!-- menu de todo el sitio-->         
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="usuarioInicio.php">INICIO</a></li>         
                </ul>
                <!-- END BREADCRUMB -->                       
                <!-- START CONTENT FRAME -->
                <div class="content-frame">
                    
                    <!-- START CONTENT FRAME TOP -->
                    <div class="content-frame-top">                        
                        <div class="page-title">                    
                            <h2><span class="fa fa-user-secret"></span> Registro</h2>
                        </div>                                      
                        <div class="pull-right">
                            <button class="btn btn-default content-frame-right-toggle"><span class="fa fa-bars"></span></button>
                        </div>                        
                    </div>
                    <!-- END CONTENT FRAME TOP -->
                    
                    <!-- START CONTENT FRAME LEFT -->
                    <div class="content-frame-right">
                        <!-- START WIDGET CLOCK -->
                        <div class="widget widget-info widget-padding-sm">
                            <div class="widget-big-int plugin-clock">00:00</div>                            
                            <div class="widget-subtitle plugin-date">Cargando...</div>                           
                            <div class="widget-buttons widget-c3">
                                <?php include './nav/btnClock.php';?>
                            </div>                            
                        </div>                                            
                        <!-- END WIDGET CLOCK -->
                        <!-- INICIA LOGO -->
                        <div id="logo">  
                            <img src="img/app/logo.png" id="logo"/>
                        </div>
                        <br>
                        <!-- TERMINA LOGO -->
                        <!-- INICIA DATOS DE CABEZA -->
                        <div class="panel panel-default">
                            
                        </div>  
                        <!-- TERMINA DATOS DE CABEZA -->
                        <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">Usuarios Registrados</div>                                                                        
                                        <div class="widget-subtitle">27/05/2016 15:23</div>
                                        <div class="widget-int">3,548</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Usuarios Locales</div>
                                        <div class="widget-subtitle">Edo. México</div>
                                        <div class="widget-int">1,695</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">Nuevos</div>
                                        <div class="widget-subtitle">Visitors</div>
                                        <div class="widget-int">1,977</div>
                                    </div>
                                </div>                                
                            </div>         
                            <!-- END WIDGET SLIDER -->
                    </div>
                    <!-- END CONTENT FRAME LEFT -->
                    
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body content-frame-body-left">
                        
                        <div class="panel panel-default tabs" style="margin-bottom: 0px;">                            
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#tab-first" role="tab" data-toggle="tab">Registro</a></li>
                                <li><a href="#tab-second" role="tab" data-toggle="tab">Administradores</a></li>
                            </ul>
                            <div class="panel-body tab-content" style="margin: 0px;">
                                <div class="tab-pane active" id="tab-first">
                                    <!-- Inicia FormularioRegistro -->
                                    <div class="page-content-wrap" style="margin: 0px;">
                                        <div class="row" style="margin: 0px;">
                                            <div class="panel panel-default" style="margin: 0px;">
                                                <div class="panel-body">
                                                    <p>Crea una cuenta de administrador, con ella podrás dar acceso al sitio a un colaborador del evento. </p>
                                                </div>
                                                <div class="panel-body form-group-separated block ">
                                                    <!-- START WIZARD WITH VALIDATION -->       
                                                    
                                                    
                                                    
                                                    <form ng-submit="registro(usuario)" class="form-horizontal frmRegister " id="wizard-validation" role="form">
                                                        <div class="wizard show-submit wizard-validation" style="margin: 15px;">
                                                            <ul>
                                                                <li>
                                                                    <a href="#step-7">
                                                                        <span class="stepNumber">1</span>
                                                                        <span class="stepDesc">Información basica<br /><small>Verifica los datos del colaborador.</small></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#step-8">
                                                                        <span class="stepNumber">2</span>
                                                                        <span class="stepDesc">Contraseña<br /><small>Agrega una contraseña para el colaborador.</small></span>
                                                                    </a>
                                                                </li>  
                                                                <li>
                                                                    <a href="#step-9">
                                                                        <span class="stepNumber">3</span>
                                                                        <span class="stepDesc">Valída<br /><small>Confirma el registro del colaborador.</small></span>
                                                                    </a>
                                                                </li>     
                                                                
                                                            </ul>
                                                            <div id="step-7">   
                                                                <div class="form-group">
                                                                    <label class="col-md-3 col-xs-12 control-label">Nombre de Usuario</label>
                                                                    <div class="col-md-6 col-xs-12">                                            
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-user"></span></span>
                                                                            <input type="text" ng-model="usuario.nombre" class="form-control" name="txtNombre" placeholder="Nombre" required=""y>
                                                                        </div>                                            
                                                                        <span class="help-block">Con este NOMBRE DE USUARIO tienes acceso al sitio.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 col-xs-12 control-label">Correo electronico</label>
                                                                    <div class="col-md-6 col-xs-12">                                            
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-at"></span></span>
                                                                            <input type="email" ng-model="usuario.email" class="form-control" name="txtEmail" placeholder="Correo Electrónico" required="">
                                                                        </div>                                            
                                                                        <span class="help-block">Con este CORREO ELECTRONICO los colaboradores del evento podrán ponerse en contacto contigo si es necesario.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 col-xs-12 control-label">Teléfono</label>
                                                                    <div class="col-md-6 col-xs-12">                                            
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-phone"></span></span>
                                                                            <input type="tel" ng-model="usuario.telefono" class="form-control" name="txtTelefono" placeholder="Telefono" required=""/>
                                                                        </div>                                            
                                                                        <span class="help-block">Con este TELÉFONO te podrán localizar los colaboradores del evento.</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="step-8">
                                                                <div class="form-group">                                        
                                                                    <label class="col-md-3 col-xs-12 control-label">Contraseña</label>
                                                                    <div class="col-md-6 col-xs-12">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                                            <input type="password" ng-model="usuario.password" name="Contraseña" class="form-control" placeholder="Contraseña" required="">
                                                                        </div>            
                                                                        <span class="help-block">Ingresa tu contraseña para accesar al sitio.</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">                                        
                                                                    <label class="col-md-3 col-xs-12 control-label">Confirma contraseña</label>
                                                                    <div class="col-md-6 col-xs-12">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                                            <input type="password" ng-model="usuario.password2" class="form-control" name="Contraseña2" placeholder="Contraseña" required="">
                                                                        </div>            
                                                                        <span class="help-block">Vuelve a escribir tu contraseña para confirmarla.</span>
                                                                    </div>
                                                                </div>
                                                            </div>      
                                                            <div id="step-9">
                                                                <div class="form-group">                                        
                                                                    <label class="col-md-3 col-xs-12 control-label">Código  de administrador</label>
                                                                    <div class="col-md-6 col-xs-12">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                                                            <input type="password" ng-model="usuario.password" class="form-control" name="codigo" placeholder="Código" required="">
                                                                        </div>            
                                                                        <span class="help-block">Ingresa el código  de administrador para guardar los cambios.</span>
                                                                        <span class="help-block">**Si no cuentas con él, ponte en contacta a tu administrador.</span>
                                                                    </div>
                                                                </div>
  <div class="text-center">
    <button type="submit" class="btn btn-danger">Registrarme</button>
  </div>
                                                            </div>                                                                                                       
                                                        </div>     
                                                    </form>
                                                <!-- END WIZARD WITH VALIDATION -->
                                                        
                                                
                                                
                                                
                                                
                                                
                                                
                                                </div>
                                            </div>       
                                            <!-- END PAGE CONTENT WRAPPER -->     
                                        </div>
                                        <!-- END CONTENT FRAME BODY -->
                                    </div>
                                    <!-- Termina FormularioRegistro -->
                                </div>
                                <div class="tab-pane" id="tab-second">
                                    <!-- START RESPONSIVE TABLES -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-default">
                                                <div class="panel-body panel-body-table">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered table-striped table-actions">
                                                            <thead>
                                                                <tr>
                                                                    <th>NOMBRE DE USUARIO</th>
                                                                    <th >CORREO ELECTRONICO</th>
                                                                    <th>TELEFONO</th>
                                                                    <th>FECHA DE REGISTRO</th>
                                                                    <th>ACCIONES</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>                                            
                                                                <tr id="trow_1">     
                                                                    <td><strong>Nombre</strong></td>
                                                                    <td>correo@emai.com</td>
                                                                    <td>7224581003</td>
                                                                    <td>24/09/2016</td>
                                                                    <td >
                                                                        <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                                    </td>
                                                                </tr>
                                                                <tr id="trow_2">
                                                                    <td><strong>Nombre</strong></td>
                                                                    <td>correo@emai.com</td>
                                                                    <td>7224581003</td>
                                                                    <td>24/09/2016</td>
                                                                    <td>
                                                                        <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                                                    </td>
                                                                </tr>
                                                                <tr id="trow_3">
                                                                    <td><strong>Nombre</strong></td>
                                                                    <td>correo@emai.com</td>
                                                                    <td>7224581003</td>
                                                                    <td>24/09/2016</td>
                                                                    <td>
                                                                        <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_3');"><span class="fa fa-times"></span></button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>                                
                                                </div>
                                            </div>       
                                        </div>
                                    </div>
                                    <!-- END RESPONSIVE TABLES -->
                                </div>
                            </div>
                        </div>   
                    </div>
                    <!-- END CONTENT FRAME BODY -->
                </div>
                <!-- END CONTENT FRAME -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout" ng-controller="sesionCtrl">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Cerrar <strong>Sesion</strong> ?</div>
                    <div class="mb-content">
                        <p>¿Estás seguro que deseas salir?</p>                    
                        <p>Presiona SI para cerrar sesion actual, presiona NO si deseas seguir conectado en tu cuenta.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a ng-click="cerrarSesion();" class="btn btn-success btn-lg">Si</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->      
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>          
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>         
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>        
        <script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>        
        <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.js"></script>
        <!-- END THIS PAGE PLUGINS-->        
           
        <!-- START TEMPLATE ->
        <script type="text/javascript" src="js/settings.js"></script>
        -->
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
        
    <!-- END SCRIPTS -->         
    </body>
</html>