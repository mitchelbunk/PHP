<?php
    if (isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        setcookie('username', $username, time() + 3600);

        header('Location: page2.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholder="Enter Username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>