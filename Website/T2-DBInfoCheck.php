<!DOCTYPE HTML>
<!-- 2021/10/18  BF  Original Program    -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> DB Connection </title>
</head>

<body>

    <?php   
        echo "<h1> Benjamin Fiore is Testing Connections </h1>";
        echo "<ol>";
        echo "<li> Calling 'connect_db.php' to connect to the database! </li>";

        /* This will connect to the database; $dbc is a link identifier to the database */
        require ("..\connect_db.php");

        if (mysqli_ping($dbc))  # For good connection
            {echo "<li> Connected! </li>";
            echo "<li> MySQL Server ".mysqli_get_server_info($dbc).
            " connected on "         .mysqli_get_host_info($dbc).
            "</li>";
            }
            echo "</ol>";
?>

</body>
</html>