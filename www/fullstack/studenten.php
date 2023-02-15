<?php
echo 123;
//$servername = "localhost";
//$username = "root";
//$password = "";
//phpinfo();
$mysqli = new mysqli("localhost","root","","phples");
 //
//// Check connection
//if ($mysqli -> connect_errno) {
//    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
//    exit();
//}
//print_r($mysqli);
//
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=phples", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//} catch(PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Studenten</title>
        <meta name="Studenten">
        <link rel="stylesheet" href="css/studenten.css">
    </head>
    <body>
        <form>
            studentnr:<br><input type="number" name="studentnr"><br>
            roepnaam:<br><input type="text" name="roepnaam"><br>
            voorletters:<br><input type="text" name="voorletters"><br>
            tussenvoegsels:<br><input type="text" name="tussenvoegsels"><br>
            achternaam:<br><input type="text" name="achternaam"><br>
            adress:<br><input type="text" name="adress"><br>
            postcode:<br><input type="number" name="postcode"><br>
            woonplaats:<br><input type="text" name="woonplaats"><br>
            geslacht:<br><input type="text" name="geslacht"><br>
            telefoon:<br><input type="number" name="telefoon"><br>
            geboortedatum:<br><input type="date" name="geboortedatum"><br>
            uitgeschreven:<br><input type="text" name="uitgeschreven"><br>
            schoolgeld:<br><input type="number" name="schoolgeld"><br>
            betaald:<br><input type="number" name="betaald"><br>


            <button>submit</button>
        </form>
    </body>
</html>