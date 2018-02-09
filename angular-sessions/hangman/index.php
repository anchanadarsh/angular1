<!doctype html>
<html lang="en-US">

<head>
    <title>Webpage Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '../assets/_partial/head.php' ?>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body ng-app="hangman">
    <div class="clearfix"></div>
    <section ng-controller="hangmanController" class="container-fluid text-center p-tb-md bg-f1f" style="min-height:100vh">
        <table id="movietable" class="m-tb-xxl table table-bordered" style="width:50%;margin:30px auto;display:none">
            <tr>
                <th>No</th>
                <th>Name</th>
            </tr>
            <tr ng-repeat="mname in mnames">
                <td>{{mname.movieno}}</td>
                <td>{{mname.moviename | uppercase}}</td>
            </tr>
        </table>

        <button class="btn btn-primary" ng-click="getmovie()">Get Movie</button>

        <h1 class="guess-space">
            <ul>
                <li ng-repeat="i in getrowdetarray track by $index" ng-class="{'transbor' : getrowdetarray[$index]==' '}" id="{{$index}}" class="guesskey"></li>
            </ul>
        </h1>

        <div class="keypad">
            <div class="container-fluid">
                <div class="row">
                    <div ng-repeat="key in keys" class="col-xs-3 p-lr-none">
                        <div class="keys" ng-click="checkndisplay(key)" id="{{key}}" ng-class="">
                            <h3>{{key}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="clearfix"></div>

    <?php include '../assets/_partial/footer-scripts.php' ?>
    <script src="main.js" type="text/javascript"></script>

</body>

</html>
