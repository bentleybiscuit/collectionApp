    <?php
    require_once 'functions.php';

    $db = connectDb();
    $modelOrganisms= getDatafromDB($db);
    $html = displayItems($modelOrganisms);

    ?>

    <html>
        <head>

            <link rel="stylesheet" type="text/css" href="normalize.css">
            <link rel="stylesheet" type="text/css" href="styles.css">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>The various guinea pigs of biological science</title>
        </head>

        <body>
            <header>
                <h1>The various guinea pigs of biological science: collectable in the home or lab</h1>
            </header>
            <section class="container">

        <?php echo $html; ?>

            </section>
        </body>
    </html>