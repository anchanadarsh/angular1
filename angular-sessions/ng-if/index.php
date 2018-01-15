<!doctype html>
<html lang="en-US">

<head>
    <title>Webpage Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '../sample/_partial/head.php' ?>
    <link href="style.css" rel="stylesheet">
</head>

<body ng-app="myApp">
    <div class="clearfix"></div>
    <section class="container-fluid p-lr-none p-tb-md bg-f1f" style="height:100vh" ng-controller="myController">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <form>
                        <label>Enter your Demo Website Link</label>
                        <input type="text" ng-model="handle">
                    </form>
                    <h1><a href="http://demo.quanical.com/{{handle}}" target="_blank">demo.quanical.com/{{handle}}</a></h1>
                    <h4 style="color:#ff006c" ng-if="handle == 'jdeyes'">WOW!! This is my project</h4>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <?php include '../sample/_partial/footer-scripts.php' ?>
    <script src="main.js"></script>
</body>

</html>
