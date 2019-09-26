<?php

require_once ('functions.php');

if (!isset($_GET['allowed'])) {
    header('Location: addItem.php');
}

$formData = $_POST;
$dbConnect = connectDb();
var_dump($formData);

var_dump(addItems($formData, $dbConnect));
//header('Location: index.php');

