<?php

require_once ('functions.php');

if (!isset($_GET['allowed'])) {
    header('Location: addItem.php');
}
$formData = $_POST;
$dbConnect = connectDb();

$data = sanitise($formData);

addItems($data, $dbConnect);
header('Location: index.php');