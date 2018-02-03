<!doctype html>
<html lang="en-US">

<head>
    <title>Webpage Title</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php include '_partial/head.php' ?>
</head>

<body>
    <header>
        <?php include '_partial/header.php' ?>
    </header>
    <div class="clearfix"></div>
    <section id="section-home1" class="container-fluid p-lr-none p-tb-md bg-f1f">
        Body code should be here
    </section>
    <div class="clearfix"></div>
    <footer>
        <?php include '_partial/footer.php' ?>
    </footer>
    <?php include '_partial/footer-scripts.php' ?>

    <script>
        function myFunction() {
            var x = Math.floor((Math.random() * 10));
            if (x == 0) {
                do {
                    x = Math.floor((Math.random() * 10));
                }
                while (x == 0);
            }
            var y = Math.floor((Math.random() * 10));
            if (y == x) {
                do {
                    y = Math.floor((Math.random() * 10));
                }
                while (y == x);
            }
            var z = Math.floor((Math.random() * 10));
            if ((z == x) || (z == y)) {
                do {
                    z = Math.floor((Math.random() * 10));
                }
                while ((z == x) || (z == y));
            }
            var number = (x * 100) + (y * 10) + z;
            alert(number);
        }

    </script>

</body>

</html>
