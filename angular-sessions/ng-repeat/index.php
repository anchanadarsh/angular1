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

<body ng-app="myApp">
    <div class="clearfix"></div>
    <section class="container-fluid p-lr-none p-tb-md bg-f1f" style="height:100vh" ng-controller="myController">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3" ng-repeat="team in teams">
                    <div class="team-box">
                        <img class="img-responsive" src="img/{{team.img}}.jpg">
                        <h2 class="mem-name">{{team.name}}</h2>
                        <p class="mem-description">{{team.desc}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <?php include '../assets/_partial/footer-scripts.php' ?>
    <script src="main.js"></script>
</body>

</html>
