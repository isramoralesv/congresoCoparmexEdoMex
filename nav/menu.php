<li class="xn-logo" style="background-color: #00A6D1;">
    <a href="#/"><img src="img/logo.png" id="logo"/></span> </a>
    <a href="#" class="x-navigation-control"></a>
</li>
<li class="xn-profile" ng-controller="sesionCtrl">
    <a href="#" class="profile-mini" style="align: center; width: 50px; height: 50px; padding-left: 10%;">
        <div>
           <img ng-src="{{usuarioActual.profile.gravatar}}">
        </div>
        <!--<img src="assets/images/users/avatar.jpg" alt="usuario"/>-->
    </a>
    <div class="profile">
        <div class="profile-image" id="iniciales-centro">
            <div>
                <img ng-src="{{usuarioActual.profile.gravatar}}">
            </div>
            <!--<img src="assets/images/users/avatar.jpg" alt="usuario"/>-->
        </div>
        <div class="profile-data" ng-show="sesionIniciada()">
            <div class="profile-data-name"><strong>{{usuarioActual.profile.nombre}}</strong></div>
            <div class="profile-data-name"></div>
        </div>
    </div>                                                                        
</li>
<li class="active">
    <a href="#/"><span class="fa fa-home"></span> <span class="xn-text">INICIO</span></a>                        
</li>   
<li class="">
    <!--<a href="#"><span class="fa fa-bullhorn"></span> <span class="xn-text">Notificaciones</span></a>
    <ul>
        <li><a href="usuarioActividadMovimientos.php"><span class="fa fa-bell"></span> Mis Movimientos</a></li>
        <li><a href="usuarioActividadInvitaciones.php"><span class="fa fa-envelope"></span> Invitaciones</a></li>                         
    </ul>-->
    <a href="#/notificaciones"><span class="fa fa-bullhorn"></span> <span class="xn-text">NOTIFICACIONES</span></a>          
</li>  
<li class="">
    <a href="#/programa><span class="fa fa-calendar"></span> <span class="xn-text">PROGRAMA</span></a>          
</li>           

<li class="">
    <a href="#/ponentes"><span class="fa fa-users"></span> <span class="xn-text">PONENTES</span></a>          
</li>         
<li class="">
    <a href="#/mapa"><span class="fa fa-map"></span> <span class="xn-text">MAPA</span></a>          
</li>          
<li class="">
    <a href="#/usuarios"><span class="fa fa-male"></span> <span class="xn-text">USUARIOS</span></a>          
</li>         
<li class="">
    <a href="#/negocios"><span class="fa fa-comments"></span> <span class="xn-text">RED DE NEGOCIOS</span></a>          
</li>         
<li class="">
    <a href="#/novedades"><span class="fa fa-rss"></span> <span class="xn-text">NOVEDADES</span></a>          
</li>         
<li class="">
    <a href=#/preguntas"><span class="fa fa-question"></span> <span class="xn-text">PREGUNTAS</span></a>          
</li>               
<li class="xn-openable">
     <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">CONFIGURACIÓN</span></a>             
     <ul>
         <li><a href="#/configuracionApp"><span class="fa fa-rocket"></span> App</a></li>  
         <li><a href="#/configuracionAdministradores"><span class="fa fa-user-secret"></span> Administradores</a></li>  
     </ul> 
</li>                   