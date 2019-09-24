<?php

//create database connection
function connectDb() {
    $db = new PDO('mysql:host=db; dbname=charlotteCollection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getDatafromDB($db) {
    $query = $db->prepare("SELECT `commonName`, `scientificName`, `kingdom`, `genomeMbp` FROM `modelOrganisms`;");
    //this next line executes the query to run the code
    $query->execute();
    //create a variable to catch the results
    $result = $query->fetchAll();

    return $result;

}
function getresult($result) {
    foreach ($result as $asOrganism) {
        foreach ($asOrganism as $field=>$value){
            echo $field . $value;
        }

    }
}


