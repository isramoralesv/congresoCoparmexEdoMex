'use strict'

app.controller("sesionCtrl", function($scope, $location, Aut){
	
	$scope.usuarioActual = Aut.usuario; //Variable para controlar la info del usuario que inicia sesión
	$scope.sesionIniciada = Aut.sesionIniciada;//Variable para saber si se inició sesión o no

	$scope.cerrarSesion = function(){
		Aut.cerrarSesion();
		console.log("Sesión cerrada exitosamente!");
		$location.path("/login");
	},
        $scope.redireccionSesion = function(){
           if($scope.usuarioActual == null){
               console.log("No hay usuario conectado, será redireccionado...");
               $location.path("/login");
           }
        }
});