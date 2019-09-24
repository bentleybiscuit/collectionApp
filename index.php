<?php
require_once 'functions.php';

$db = connectDb();
$modelOrganisms= getDatafromDB($db);

foreach ($modelOrganisms as $asOrganism) {
    foreach ($asOrganism as $field=>$value){
        echo $field . $value;
    }

}

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
<!--placeholders at the moment-->
<!--                create divs with lists to float-->
            <div class="items">
                <ul>
                    <li>common name</li>
                    <li>scientific name</li>
                    <li>kingdom</li>
                    <li>genome size Mbp</li>
<!--                        add background image on each div-->
                </ul>
            </div>

            <div class="items">
                <ul>
                    <li>common name</li>
                    <li>scientific name</li>
                    <li>kingdom</li>
                    <li>genome size Mbp</li>
                    <!--                        add background image on each div-->
                </ul>
            </div>

            <div class="items">
                <ul>
                    <li>common name</li>
                    <li>scientific name</li>
                    <li>kingdom</li>
                    <li>genome size Mbp</li>
                    <!--                        add background image on each div-->
                </ul>
            </div>

            <div class="items">
                <ul>
                    <li>common name</li>
                    <li>scientific name</li>
                    <li>kingdom</li>
                    <li>genome size Mbp</li>
                    <!--                        add background image on each div-->
                </ul>
            </div>

            <div class="items">
                <ul>
                    <li>common name</li>
                    <li>scientific name</li>
                    <li>kingdom</li>
                    <li>genome size Mbp</li>
                    <!--                        add background image on each div-->
                </ul>
            </div>

            <div class="items">
                <ul>
                    <li>common name</li>
                    <li>scientific name</li>
                    <li>kingdom</li>
                    <li>genome size Mbp</li>
                    <!--                        add background image on each div-->
                </ul>
            </div>
        </section>
    </body>
</html>















