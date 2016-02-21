'use strict'

// Modulo de la Aplicacion
var app = angular.module("congresoCoparmex", [
	'ngAnimate',
	'ngResource',
	'ngRoute',
	'firebase'
])
// Constante para hacer referencia a la App de Firebase
.constant('FBURL', 'https://congresos.firebaseio.com/')
// Rutas de la Aplicación
.config(function ($routeProvider) {
	$routeProvider
		.when('/', {
			templateUrl: 'inicio.php'
		})
		.when('/configuracionAdministradores', {
			templateUrl: 'configuracionAdministradores.php',
			controller: 'autenCtrl'
		})
		.when('/configuracionApp', {
			templateUrl: 'configuracionApp.php',
			controller: 'configuracionAppCtrl'
		})
		.when('/mapa', {
			templateUrl: 'mapa.php',
			controller: 'mapaCtrl'
		})
		.when('/negocios', {
			templateUrl: 'negocios.php',
			controller: 'negociosCtrl'
		})
		.when('/notificaciones', {
			templateUrl: 'notificaciones.php',
			controller: 'notificacionesCtrl'
		})
		.when('/novedades', {
			templateUrl: 'novedades.php',
			controller: 'novedadesCtrl'
		})
		.when('/ponentes', {
			templateUrl: 'ponentes.php',
			controller: 'ponentesCtrl'
		})
		.when('/preguntas', {
			templateUrl: 'preguntas.php',
			controller: 'preguntasCtrl'
		})
		.when('/programa', {
			templateUrl: 'programa.php',
			controller: 'programaCtrl'
		})
		.when('/usuarios', {
			templateUrl: 'usuarios.php',    
			controller: 'usuariosCtrl'
		})
		.when('/login', {
			templateUrl: 'login.php',
			controller: 'autenCtrl'
		})
		.otherwise({
			redirectTo: '/'
		});
});