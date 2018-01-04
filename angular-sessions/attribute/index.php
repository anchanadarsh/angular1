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

<body>
    <div class="clearfix"></div>
    <section id="section-home1" class="container-fluid p-lr-none p-tb-md bg-f1f" style="height:100vh">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">Click on names to know age</h1>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <ul class="list-colleague">
                        <li setage="20">Tushar</li>
                        <li setage="21">Imad</li>
                        <li setage="12345">Hiranya</li>
                        <li setage="22">Adarsh</li>
                        <li setage="23">Nikhila</li>
                        <li setage="24">Afraan</li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="colleague-age text-center">
                        <p>AGE</p>
                        <h3 class="show-age"></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <?php include '../sample/_partial/footer-scripts.php' ?>
    <script src="main.js"></script>
</body>

</html>
