<!-- Benjamin Fiore     deleteManufact.php -->
<!-- 11/21/2021 BF Original Program -->

<!DOCTYPE html>
<html lang = "en">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head> 
<body>
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

        <hr>
        <h1> DELETE MANUFACTURER </h1>
        <h1> ... </h1>
        <?php
            define("FILE_AUTHOR", "Benjamin Fiore");
            include("ErrorHandler.php");

            if(isset($_GET["Manufacturer_ID"])){
                $Manufacturer_ID = $_GET["Manufacturer_ID"];
            }
            else {
                echo "Invalid Manufacturer_id - A manufacturer ID must be given.";
                Die;
            }

            if(isset($_GET["Active"])){
                $active = $_GET["Active"];
            }
            else {
                echo "Invalid status - The requested manufacturer must have a status.";
                Die;
            }
            
            require("../connect_db.php");
            

            $q = "UPDATE t2_manufacturers SET Active='" . $active . "'
                    WHERE Manufacturer_ID = $Manufacturer_ID";
            
            $r = mysqli_query($dbc, $q);


            if ($r) {
            echo "<h1 style='color: red';> Success!<br> The requested manufacturer was successfully deleted. " . $Manufacturer_ID . "</h1>";
            echo "<a href='Display Manufacturers Table - Kiwi Smartphone Service.php'> Display Manufacturers Table </a>";
            }
            else {
                echo "<li>" . mysqli_error( $dbc ) . "</li>";
            }

            include("footer.php");
        ?>

    </main>

</body>
</html>