<?php

/**
 * function creates PDO to connect to charlotteCollection database
 *
 * returns associative array
 */
function connectDb() {
    $db = new PDO('mysql:host=db; dbname=charlotteCollection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * returns all the data from modelOrganisms table in $db
 */
function getDatafromDB($db) {
    $query = $db->prepare("SELECT `image`,`commonName`, `scientificName`, `kingdom`, `genomeMbp` FROM `modelOrganisms`;");
    //this next line executes the query to run the code
    $query->execute();
    //create a variable to catch the results
    $result = $query->fetchAll();

    return $result;

}

/**
 * From array $modelOrganisms, strings are returned in separate div for each item
 *
 * Each value in array is returned as list item
 *
 */
function displayItems(array $modelOrganisms) :string {
    $output = '';

    foreach ($modelOrganisms as $org) {

        $output .= '<div class= "item">';
        $output .= '<ul>';
        $output .= '<li> Common Name: ' . $org['commonName'] . '</li>';
        $output .= '<li> Scientific Name: ' . $org['scientificName'] . '</li>';
        $output .= '<li> Kingdom: ' . $org['kingdom'] . '</li>';
        $output .= '<li> Genome Size/Mbp: ' . $org['genomeMbp'] . '</li>';
        $output .= '</div>';

    }
    return $output;
}
//ignore this: trying to display background image as part of div
//$output .= '<div class=\'item\' style=\'background-image: url(\'' . $org['image'] . '\') >';
//$output .= '<div class=\'item\' style=\'background-image: url(\'';
//$output .= $org['image'];
//$output .= '\') >';
