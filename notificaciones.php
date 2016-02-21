<!DOCTYPE html>

<html lang="es">
    <head>        
        <title>COPARMEX | NOTIFICACIONES</title>          
    </head>
    <body >
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
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
                        <a href="../Coparmex/backend/sesiones/salir.php" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
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
                            <h2><span class="fa fa-bullhorn"></span> NOTIFICACIONES</h2>
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
                        
                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default" >
                                <div class="panel-heading" style="background-color: #ffffff;">
                                    <div class="panel-title-box" style="height: 100px;">
                                        <button class="btn btn-default" ><a href="usuarios.php" style="text-decoration: none;">Ir a Usuarios</a></button>
                                        <button class="btn btn-default" >Añadir</button>
                                    </div>    
                                </div>        
                            </div>  
                            
                            <div class="panel panel-default">
                                <div class="panel-body panel-body-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="200">TITULO</th>
                                                    <th>DESCRIPCIÓN</th>
                                                    <th width="100">ESTADO</th>
                                                    <th width="100">FITRO</th>
                                                    <th width="100">FECHA</th>
                                                    <th width="100">ACCIONES</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                <tr id="trow_1">
                                                    <td class="text-center">Titulo 1</td>
                                                    <td><strong>Descripcion 1</strong></td>
                                                    <td><span class="label label-success">Enviado</span></td>
                                                    <td>Filtro 1</td>
                                                    <td>24/09/2016</td>
                                                    <td >
                                                        <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                                <tr id="trow_2">
                                                    <td class="text-center">Titulo 2</td>
                                                    <td><strong>Descripcion 2</strong></td>
                                                    <td><span class="label label-warning">Pendiente</span></td>
                                                    <td>Filtro 1</td>
                                                    <td>23/09/2016</td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <button class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_2');"><span class="fa fa-times"></span></button>
                                                    </td>
                                                </tr>
                                                <tr id="trow_3">
                                                    <td class="text-center">Titulo 3</td>
                                                    <td><strong>Descripcion 3</strong></td>
                                                    <td><span class="label label-info">Pendiente</span></td>
                                                    <td>Filtro 1</td>
                                                    <td>22/09/2016</td>
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
                    <!-- END CONTENT FRAME BODY -->
                </div>
                <!-- END CONTENT FRAME -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->


        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Eliminar <strong>Notificación</strong></div>
                    <div class="mb-content">
                        <p>¿Estas seguro que deseas eliminar esta notificación?</p>                    
                        <p> Si la eliminas no podras visualizarla despues.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Si</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->  
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
        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/demo_tables.js"></script>     
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
        
        <!-- END TEMPLATE -->
        
    <!-- END SCRIPTS -->         
    </body>
</html>





