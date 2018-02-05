var cab = angular.module("cowsandbulls", []);
cab.controller("cabController", ['$scope', function ($scope) {

    $scope.x;
    $scope.y;
    $scope.z;

    $scope.getNum = function () {
        $scope.x = Math.floor((Math.random() * 10));
        if ($scope.x == 0) {
            do {
                $scope.x = Math.floor((Math.random() * 10));
            }
            while ($scope.x == 0);
        }
        $scope.y = Math.floor((Math.random() * 10));
        if ($scope.y == $scope.x) {
            do {
                $scope.y = Math.floor((Math.random() * 10));
            }
            while ($scope.y == $scope.x);
        }
        $scope.z = Math.floor((Math.random() * 10));
        if (($scope.z == $scope.x) || ($scope.z == $scope.y)) {
            do {
                $scope.z = Math.floor((Math.random() * 10));
            }
            while (($scope.z == $scope.x) || ($scope.z == $scope.y));
        }
        var number = ($scope.x * 100) + ($scope.y * 10) + $scope.z;
        alert(number);
    }
    $scope.userNumArray = [];
    $scope.resultArray = [];

    $scope.numtoarray = function () {
        $scope.userNumArray.push($scope.guessNumber);
        $scope.l = Math.floor($scope.guessNumber / 100);
        $scope.m = Math.floor(($scope.guessNumber % 100) / 10);
        $scope.n = $scope.guessNumber % 10;
                alert($scope.l);
                alert($scope.m);
                alert($scope.n);
                alert($scope.x);
                alert($scope.y);
                alert($scope.z);

//        $scope.result;
//        if ($scope.l == $scope.x) {
//            $scope.result = "1B";
//        } else if ($scope.l == $scope.y) {
//            $scope.result = "1C";
//        } else if ($scope.l == $scope.z) {
//            $scope.result = "1C";
//        } else {
//            $scope.result = "No Match";
//        }



        $scope.guessNumber = "";
    }
}]);
