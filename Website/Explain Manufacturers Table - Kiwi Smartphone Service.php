<!-------------------------------------------------------    
    Benjamin Fiore  Explain Manufacturers Table - Kiwi Smartphone Serive.php
    10/30/2021 BF Original Program
-------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
?>
<head>
    <title> Explain Manufacturers Information - Kiwi Smartphone Serice </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" /> 
</head>

<body>
    <header> 
        <h1 style="text-align: center;"> KiWi Manufacturer Table Explained </h1>
    </header>
    <hr>
    <div class="the_menu">
        <ul>
                <li><a href="Team2.php">Home</a></li>
                <li><a href="DashPro.php">Dash Pro</a></li> 
                <li><a href="DashSlim.php">Dash Slim</a></li> 
                <li><a href="Display Manufacturers Table - Kiwi Smartphone Service.php"> Manufacturers</a></li>
                <li><a href="Display Products Table - Kiwi Smartphone Service.php">Store</a></li>
                <li><a href="Disclaimers - Kiwi Smartphone Service.php">Disclaimers </a></li>
                <li><a href="mailto:Christopher.Courts1@marist.edu; Bashir.Dashir1@marist.edu; Benjamin.Fiore1@marist.edu">Contact</a> </li>
                <?php
					if($_SESSION['login_status'] == "Logged in as admin")
					{
				?>
						<li><a style="color: forestgreen; background-color: forestgreen;" href ="">_________________________________________________________</li>
						<li><a href="t2_logout.php">Logout </a></li>
						<li><a href="Admin Links - Kiwi Smartphone Service.php">ADMIN </a></li>
				<?php
					}
					else
					{
						if($_SESSION['login_status'] == "Logged in as employee")
						{
						?>
							<li><a style="color: forestgreen; background-color: forestgreen;" href ="">_________________________________________________________________</li>
							<li><a href="t2_logout.php">Logout </a></li>
						<?php
						}
						else
							{
						?>
								<li><a style="color: forestgreen; background-color: forestgreen;" href ="">_________________________________________________________________</li>
								<li><a href="t2_login.php">Login </a></li>
						<?php
							}
						
					}
						?>
            </ul> <hr>
        <br />
    </div>
    <main>

    <?php
        define ("FILE_AUTHOR", "Benjamin Fiore");


    echo "<hr> <br><br>";        
    explain_t2_manufacturers();

        function explain_t2_manufacturers() {
            require("../connect_db.php");
            $q = "EXPLAIN t2_manufacturers"; //We put command in q
            $r = mysqli_query($dbc, $q);    // We run the command
            
            echo "<table border = '2', class = 'center'>";
            echo "<th> Field </th>";
            echo "<th> type </th>";
            echo "<th> NULL </th>";
            echo "<th> KEY </th>";
            echo "<th> Defualt </th>";
            echo "<th> Extra </th>";

            if ($r ) {
                while ($row = mysqli_fetch_array($r , MYSQLI_NUM)) {
                    echo "<tr>";
                    echo "<td> " 
                    . $row[0] . " </td><td>" 
                    . $row[1] . " </td><td>" 
                    . $row[2] . " </td><td>" 
                    . $row[3] . " </td><td>" 
                    . $row[4] . " </td><td>" 
                    . $row[5] . " </td>";
                    echo "</tr>";
                }
            }

            else {
                echo "<li>" . mysqli_error($dbc) . "</li>";
            }
            echo "</table>";
            echo "<br><br>";
    }
    echo "<hr>";
    include("footer.php");
    
    ?>

    </main>
</body>
</html>