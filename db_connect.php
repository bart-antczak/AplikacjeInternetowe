<?php
    $servername = "localhost";
    $username = "root";
    $password = getenv("HTTP_DB_PASS");
    $dbname = "aplikacje_internetowe";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
?>