<?php

/**
 * function creates PDO to connect to charlotteCollection database
 *
 * returns associative array
 */

function connectDb() :PDO {
    $db = new PDO('mysql:host=db; dbname=charlotteCollection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
/**
 * @param $db extracts item data from modelOrganisms
 *
 * @return associative array for each model organism is returned
 */

function getDatafromDB($db) {
    $query = $db->prepare("SELECT `commonName`, `scientificName`, `kingdom`, `genomeMbp` FROM `modelOrganisms`;");
    //this next line executes the query to run the code
    $query->execute();
    //create a variable to catch the results
    $result = $query->fetchAll();
    return $result;
}
/**
 * @param array $modelOrganisms for each model organism
 *
 * @return div with data points as a list
 */
function displayItems(array $modelOrganisms) :string
{
    $output = '';

    foreach ($modelOrganisms as $org) {
        if (array_key_exists('commonName', $org)) {

            $output .= '<div class= "item">';
            $output .= '<ul>';
            $output .= '<li> Common Name: ' . $org['commonName'] . '</li>';
            $output .= '<li> Scientific Name: ' . $org['scientificName'] . '</li>';
            $output .= '<li> Kingdom: ' . $org['kingdom'] . '</li>';
            $output .= '<li> Genome Size/Mbp: ' . $org['genomeMbp'] . '</li>';
            $output .= '</div>';

        } else {
            $output .= "There was an error displaying the items on the page";
        }
    }
    return $output;
}
