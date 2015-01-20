/**
*  Module
*
* Description
*/
angular.module('myApp', ['ui.validate'])
    .controller('MainController', ['$scope', function($scope) {
        $scope.validatePassword = function (value) {
            return value === $scope.password;
        }
    }]);