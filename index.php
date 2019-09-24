<?php
require_once 'functions.php';

//create database connection
$db = new PDO('mysql:host=db; dbname=charlotteCollection', 'root', 'password');

//put settings on the fetch so it comes back as associative array
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//preparing a statement in order to send it to the db
$query = $db->prepare("SELECT `commonName`, `scientificName`, `kingdom`, `genomeMbp` FROM `modelOrganisms`;");
//this next line executes the query to run the code
$query->execute();
//create a variable to catch the results
$result = $query->fetchAll();
//var_dump($result);
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















