/**
 * 
 */

angular.module('myApp', ['mexicoEstadisticoService']);
 
angular.module('myApp').controller('mexicoEstadisticoController', ['$scope','datoRequest','$http',mexicoEstadisticoController]);
function mexicoEstadisticoController($scope, datoRequest,$http) {
	$scope.estados = [ ];
	$scope.datos={};
	$scope.obtenerDatos = function(){
		datoRequest.datos().success(function (data){
			$scope.datos=data; // Asignaremos los datos de todos los movimientos
			$scope.datos.exist=1;
			//$scope.saldo.exist=0;
			
		});
	}
	
	
	
	
}
	