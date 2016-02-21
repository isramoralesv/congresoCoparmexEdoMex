app.controller("autenCtrl", function ($scope, Aut, $location){
	
	// Funcion de tipo $scope para poder usarla en la Vista
	$scope.sesion = function(usuario){
		Aut.sesion(usuario).then(function (){
			console.log("Sesion iniciada exitosamente!");
			$location.path("/");//Redireccionar automáticamente al usuario
		}, function(error){
			console.log(error);
		});
	}

	$scope.registro = function(usuario){
		Aut.registro(usuario).then(function () {
			console.log("Registrado exitosamente!");
			$location.path("/");
		}, function(error){
			console.log(error);
		});
	}
});