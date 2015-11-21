/**
*  Module
*
* Description
*/
angular.module('myApp', [])
    .controller('MainController', ['$scope', function($scope) {
        $scope.msg = "hello angular ui";
    }]);