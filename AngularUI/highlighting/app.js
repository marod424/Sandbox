/**
*  Module
*
* Description
*/
angular.module('myApp', ['ui.highlight', 'ngSanitize'])
    .controller('MainController', ['$scope', function($scope) {
        $scope.text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ' + 
                     'Repellendus autem commodi iste, a deserunt illum optio, minus voluptatum accusamus magnam, excepturi quos. ' + 
                     'Esse nobis labore neque, a culpa provident, enim?';
    }]);