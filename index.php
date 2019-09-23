<?php
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <section class="container">
                <h1>Model organisms: found in the lab and the home</h1>
            </section>
        </header>


    </body>





</html>














<?php
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
var_dump($result);
?>

