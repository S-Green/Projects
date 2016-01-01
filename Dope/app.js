var app = angular.module('dopeDosage',[])
        
app.controller('mainController',function($scope){
    $scope.array = [{
        idt: '1',
        dosage:'2',
        method:'3',
        substance:'4',
        form: '5',
        food: '6'
    }];
})