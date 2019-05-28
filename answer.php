<?php

    include_once("db_connect.php");

    $sql_team =     "INSERT INTO teams_answers (team_id)
                    VALUES ('".$_POST["team"]."')";

    $sql_driver =   "INSERT INTO drivers_answers (driver_id)
                    VALUES ('".$_POST["driver"]."')";

    mysqli_query($conn, $sql_team) or die("database error:". mysqli_error($conn));

    mysqli_query($conn, $sql_driver) or die("database error:". mysqli_error($conn));

    $Message = 'Odpowiedź dodana do bazy!';
    header("Location: index.php?Message={$Message}");

?>