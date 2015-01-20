/**
*  Module
*
* Description
*/
angular.module('myApp', ['ngRoute', 'ui.route'])
    .config(function($routeProvider, $locationProvider) {
        $routeProvider.otherwise({
            templateUrl: 'main.html',
            controller: 'MainController'
        });

        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        });
    })
    .controller('MainController', ['$scope', function($scope) {
        $scope.routes = [
            '/route-1', 
            '/route-2', 
            '/route-3'
        ]
    }]);