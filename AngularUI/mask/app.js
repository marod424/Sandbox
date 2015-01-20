/**
*  Module
*
* Description
*/
angular.module('myApp', ['ui.mask'])
    .controller('MainController', ['$scope', function($scope) {
        // 9 A * 
        $scope.mask1 = '9999 9999 9999 9999';
        $scope.mask2 = '(999) 999-9999';
        $scope.mask3 = 'A9A9***A9A9';
    }]);