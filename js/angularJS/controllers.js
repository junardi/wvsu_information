"use strict";

var controllers = angular.module('information_system.controllers', []);   

controllers.controller('wall', function($scope, $http, $sce, $location){   
	//console.log("Hello schedule"); 

	$scope.getAllWalls = function() { 
		var protocol = window.location.protocol + "//" + window.location.host;
		var fullUrl = protocol + window.location.pathname + window.location.search;      
		var fullUrlWithOrigPath = protocol + window.location.pathname;    

		//var getAllEventsUrl = fullUrl.replace("create_schedules", "get_all_departments");     
		var getWallUrl = fullUrl + "/get_wall";      
		
		$scope.walls;
		$http.get(getWallUrl).success(function(data){ 
			$scope.walls = data;        
			//console.log($scope.walls);  
		});  	

	};         

	$scope.getAllWalls();
});

