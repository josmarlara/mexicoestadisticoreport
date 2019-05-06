/**
 * 
 */

angular.module('mexicoEstadisticoService', [])//Declaramos el modulo
	.factory('datoRequest', function($http) { //declaramos la factory
		var path = "https://gaia.inegi.org.mx/wscatgeo/mgee/";//API path
		
		return {
			//Login
			datos : function(){ //Retornara la lista de posts
				global = $http.get(path);
				return global;
			}
			
		}
	});
  