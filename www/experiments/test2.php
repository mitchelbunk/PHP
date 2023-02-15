
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host = $servername;dbname=phples", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO student VALUES ("Piet", "", "")"
        echo "Connected succesfully";
    }
        catch(PDOException $e)
        {
            echo "Connection Failed: " . $e->getMessage();
        }
    ?>



</body>
</html>