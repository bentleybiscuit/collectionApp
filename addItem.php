<html>
<head>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a model organism to your collection</title>
</head>
<body>
    <h1>Complete the form to add an item to your collection:</h1>

<form method="post" action="connect.php">
    <label for="common">Common Name: </label>
    <input id=“common“ type="text" name="commName" required>
    <label for="scientific">Scientific Name: </label>
    <input id="scientific" type="text" name="sciName" required>
    <label for="kingdom">Kingdom: </label>
    <select id=“kingdom" name="king">
    <option value=“Animals”>Animals</option>
    <option value=“Archaebacteria”>Archaebacteria</option>
    <option value=“Eubacteria”>Eubacteria</option>
    <option value=“Fungi”>Fungi</option>
    <option value=“Plants”>Plants</option>
    <option value=“Protists”>Protists</option>
    </select>
    <label for="genome">Genome Size Mbp: </label>
    <input id=“genome“ type="number" step=“0.01” min=“1" name="genSize" required>
    <input type="submit" value="Submit”>
        </form>
    </body>
</html>
