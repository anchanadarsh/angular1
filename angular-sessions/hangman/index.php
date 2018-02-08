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
    <section ng-controller="hangmanController" id="section-home1" class="container-fluid text-center p-tb-md bg-f1f" style="height:100vh">
        <h1>
            <ul>
                <li>A</li>
                <li>A</li>
                <li>A</li>
                <li>A</li>
                <li>A</li>
                <li>A</li>
            </ul>
        </h1>
    </section>
    <div class="clearfix"></div>

    <?php include '../assets/_partial/footer-scripts.php' ?>
    <script src="main.js" type="text/javascript"></script>

</body>

</html>
