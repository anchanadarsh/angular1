<!doctype html>
<html lang="en-US">

<head>
    <title>Webpage Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '../assets/_partial/head.php' ?>
    <link href="style.css" rel="stylesheet">
</head>

<body ng-app="cowsandbulls">
    <div class="clearfix"></div>
    <section ng-controller="cabController" id="section-home1" class="container-fluid text-center p-tb-md bg-f1f">

        <button ng-click="getNum()">Get 3 digit Number</button>

        <form class="m-t-lg">
            <label>Enter your 3 digit number</label>
            <input type="text" ng-model="guessNumber" maxlength="3">
            <button type="" ng-click="numtoarray()">Enter</button>
        </form>

        <table class="table table-bordered" style="width:50%;margin:30px auto">
            <tr>
                <th>Guess#</th>
                <th>Your Number</th>
                <th>Result</th>
            </tr>
            <tr ng-repeat="usernum in userNumArray">
                <td>{{$index + 1}}</td>
                <td>{{usernum}}</td>
                <td></td>
            </tr>
        </table>

    </section>
    <div class="clearfix"></div>

    <?php include '../assets/_partial/footer-scripts.php' ?>
    <script src="main.js" type="text/javascript"></script>

</body>

</html>
