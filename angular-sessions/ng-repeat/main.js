// All custom codes with comment

var myApp = angular.module("myApp", []);
myApp.controller("myController", ['$scope', function ($scope) {
    $scope.handle = "";
    $scope.teams = [
        {
            img: "1",
            name: "Abdul Razak",
            desc: "jhgcasbcjh jhfgc jhgcjb jkgcsjkabck kcgsjk"
        }, {
            img: "2",
            name: "Abdul bhai",
            desc: "jhgcasbcjh jhfgc jhgcjb "
        }, {
            img: "3",
            name: "Hiranya Kapoor",
            desc: "jhgcasbcjh jhfgc jjkgcsjkabck kcgsjk"
        }, {
            img: "4",
            name: "Kriti Sanon",
            desc: "jhgcasbcjh jhgcjb jkgcsjkabck kcgsjk"
        }, {
            img: "2",
            name: "Rafat Mukadam",
            desc: "jhgcasbcjh jhgcjb jkgcsjkabck kcgsjk"
        }
    ];
}]);
