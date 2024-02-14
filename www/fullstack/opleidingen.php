<?php
require "database.php"
?>
<!DOCTYPE html>
<html>
<head>
    <title>Opleidingen</title>
    <meta name="Opleidingen">
    <link rel="stylesheet" href="css/opleidingen.css">
</head>
<body>




<form action="functions/addOpleiding.php" method="post">
    opleidingscode:      <br><input type="text"    name="opleidingscode"><br>
    naam:       <br><input type="text"      name="naam"><br>
    niveau:    <br><input type="number"      name="niveau"><br>

    <input type="submit" value="Submit" name="insertOpleidingData">
</form>
<h3><a href="index.html">back</a></h3>
</body>
</html>