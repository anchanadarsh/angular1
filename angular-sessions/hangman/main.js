var hm = angular.module("hangman", []);
hm.controller("hangmanController", ['$scope', '$http', function ($scope, $http) {
    $scope.mnames;
    $scope.getrandomrow;
    $scope.getrowdetarray;

    $http.get("getmovies.php").then(function (response) {
        $scope.mnames = response.data.records;
    });
    $scope.getmovie = function () {
        document.getElementsByClassName("guesskey").innerHTML = "";
        $scope.getrandomrow = Math.floor((Math.random() * $scope.mnames.length) + 1);
        $scope.getrowdet = document.getElementById("movietable").rows[$scope.getrandomrow].cells[1].innerHTML;
        //        alert($scope.getrowdet);
        $scope.getrowdetarray = $scope.getrowdet.split('');
        $scope.setmovie = function (num) {
            return new Array(num);
        }
    }

    $scope.checkndisplay = function (keyid) {
        $scope.getkeyid = keyid;
        $scope.y;
        for (y = 0; y < $scope.getrowdetarray.length; y++) {
            if ($scope.getkeyid == $scope.getrowdetarray[y]) {
                document.getElementById(y).innerHTML = $scope.getkeyid;
            } else {}
        }
    }

    $scope.keys = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];

}]);
