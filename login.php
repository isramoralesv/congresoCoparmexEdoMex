<!DOCTYPE html>

<html lang="es" class="body-full-height">
    <head>        
        <title>CONGRESO | Inicio Sesión</title>            
    </head>
    <body ng-app="congresoCoparmex">
        <div class="login-container lightmode">
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Inicia Sesión</strong> como administrador.</div>
                    <form class="form-horizontal" ng-submit="sesion(usuario)">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" ng-model="usuario.email" class="form-control" placeholder="Correo Electrónico" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" ng-model="usuario.password" class="form-control" placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-link btn-block">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block" type="submit" name="btnAccesar">Accesar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2016 COPARMEX
                    </div>
                    <div class="pull-right">
                        <a href="#">Acerca</a> |
                        <a href="#">Privacidad</a> |
                        <a href="#">Contacto</a>
                    </div>
                </div>
            </div>
            
        </div>
    </body>
</html>






