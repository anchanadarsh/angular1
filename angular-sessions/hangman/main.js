var hm = angular.module("hangman", []);
hm.controller("hangmanController", ['$scope', '$http', function ($scope, $http) {
    $scope.mnames;
    $scope.getrandomrow;

    $http.get("getmovies.php").then(function (response) {
        $scope.mnames = response.data.records;
    });
    $scope.getmovie = function () {
        //        alert($scope.mnames.length);
        $scope.getrandomrow = Math.floor((Math.random() * $scope.mnames.length) + 1);
        $scope.getrowdet = document.getElementById("movietable").rows[$scope.getrandomrow].cells[1].innerHTML;
        //        alert($scope.getrowdet);
        //        alert($scope.getrowdet.length);
        $scope.setmovie = function (num) {
            return new Array(num);
        }
    }

    $scope.keys = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

}]);
