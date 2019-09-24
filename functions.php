<?php

//create database connection
function connectDb() {
    $db = new PDO('mysql:host=db; dbname=charlotteCollection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getDatafromDB($db) {
    $query = $db->prepare("SELECT `image`,`commonName`, `scientificName`, `kingdom`, `genomeMbp` FROM `modelOrganisms`;");
    //this next line executes the query to run the code
    $query->execute();
    //create a variable to catch the results
    $result = $query->fetchAll();

    return $result;

}


function displayItems(array $result) :string {
    $htmlOut = "";
    $rowNames = ["image", "commonName" => "Common Name:",
        "scientificName" => "Scientific Name:",
        "kingdom" => "Kingdom:",
        "genomeMbp" => "Genome Size (Mbp):"];
//first foreach goes to item, second goes for the fields til they end then to next item ie rows then columns
    foreach ($result as $asOrganism) {
        $htmlOut .= "<div class=\"item\">";
        $htmlOut .="<ul>";
        foreach ($asOrganism as $key => $attribute) {
            if($key ==="image") {
                $htmlOut .= '<div class="item" style="background-image: url("'.$attribute.'")>';
            }
                else {
                    $htmlOut .= "<li>$rowNames[$key] $attribute </li>";
                }
            }
         }
        $htmlOut .="</ul>";
        $htmlOut .= "</div>";

    return $htmlOut;
    }


