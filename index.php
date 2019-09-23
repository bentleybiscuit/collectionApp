<?php
//create database connection
$db = new PDO('mysql:host=db; dbname=charlotteCollection', 'root', 'password');

//put settings on the fetch so it comes back as associative array
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//preparing a statement in order to send it to the db
$query = $db->prepare("SELECT `commonName` FROM `modelOrganisms`;");
//this next line executes the query to run the code
$query->execute();
//create a variable to catch the results
$result = $query->fetchAll();
var_dump($result);

