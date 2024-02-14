<?php
require "database.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Opleidingen</title>
    <meta name="Student Opleidingen">
    <link rel="stylesheet" href="css/studentOpleidingen.css">
</head>
<body>

<form action="functions/addStudentOpleiding.php" method="post">
    studentnr:      <br><input type="number"    name="studentnr"><br>
    opleidingscode:       <br><input type="text"      name="opleidingscode"><br>
    startdatum:    <br><input type="date"      name="startdatum"><br>
    einddatum:     <br><input type="date"      name="einddatum"><br>




    <input type="submit" value="Submit" name="insertStudentOpleidingData">
</form>

<h3><a href="index.html">back</a></h3>
</body>
</html>