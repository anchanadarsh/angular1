angular.module("todoApp", []).controller("todoCtrl", function ($scope) {
    $scope.todos = [{
        text: 'learn html',
        done: false
    }, {
        text: 'learn css',
        done: false
    }, {
        text: 'learn bootstrap',
        done: false
    }, {
        text: 'learn jquery',
        done: false
    }, {
        text: 'learn angular',
        done: false
    }];
    
    $scope.totalTodos = function(){
        return $scope.todos.length;
    }

    $scope.addTodoList = function () {
        $scope.todos.push({text:$scope.addTodo,done:false});
        $scope.addTodo = '';
    };
});