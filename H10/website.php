<?php
session_start();
    if (isset($_SESSION["user"])) {
        echo "<h1>Welkom ".$_SESSION["user"]. " op de website";
    } else {
        header('location: H10.php');
    }